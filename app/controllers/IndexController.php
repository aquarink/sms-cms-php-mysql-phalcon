<?php

use Phalcon\Http\Request;
use Phalcon\Http\Response;
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

                        $signinLog = new TbSigninUser();
                        $signinLog->assign(array(
                            'id_user' => $userData['id_user'],
                            'name_user' => $userData['name'],
                            'ip_user' => $request->getClientAddress(),
                            'sign_date' => $now,
                                )
                        );
                        if ($signinLog->save()) {
                            echo date('Y-m-d h:i:s') . " : Insert report push Ok \n";
                        }

                        $this->response->redirect("home");
                    }
                } else {
                    $this->response->redirect("index?msg=Username dan Password not register");
                }
            }
            $this->view->disable();
        }
    }

}
