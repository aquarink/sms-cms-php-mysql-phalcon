<?php

use Phalcon\Http\Request;
use Phalcon\Http\Response;
use Phalcon\Http\Dispatcher;
use Phalcon\Mvc\Model\Query;

class IndexController extends ControllerBase {

    public function indexAction() {
        $request = new Request();
        $response = new Response();
        $now = date("Y-m-d h:i:s");

        if ($this->request->isPost()) {
            $user = $request->getPost();
            //
            if (isset($user['btnSignin'])) {
                $checkUser = $this->db->query("SELECT * FROM tb_user WHERE username = '" . $user['emailTxt'] . "' AND password = '" . md5($user['passTxt']) . "'");
                if ($checkUser->numRows() > 0) {
                    foreach ($checkUser->fetchAll() as $userData) {
                        $this->session->set('id_user', $userData['id_user']);
                        $this->session->set('name', $userData['name']);
                        $this->session->set('page', $userData['page']);

                        $saveQuery = $this->dblog->query("INSERT INTO tb_signin_user (id_user,name_user,ip_user,sign_date) VALUES('".$userData['id_user']."','".$userData['name']."','".$request->getClientAddress()."','".$now."')");
                        if($saveQuery) {
                            $this->response->redirect("home");
                        } else {
                            echo 'gagal query';
                        }
                    }
                } else {
                    $this->response->redirect("index?msg=Username dan Password not register");
                }
            }
            $this->view->disable();
        }
    }

}
