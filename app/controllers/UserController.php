<?php

use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;

class UserController extends \Phalcon\Mvc\Controller {

    public function indexAction() {
        
    }

    public function adduserAction() {
        if ($this->request->isPost()) {

            $datasent = $this->request->getPost();

            $input = new TbUser;

            $input->username = $datasent["username"];
            $input->password = $this->security->hash($datasent["password"]);
            $input->page = strtolower(join($datasent["page"], ','));
            $input->user_create = date('Y-m-d h:i:s');


            $savesuccess = $input->save();

            if ($savesuccess) {
                $this->response->redirect("user/manageuser");
            } else {
                $this->response->redirect("user/adduser?msg=Add user failed");
            }
        } else {
            // echo "request harus post";
        }
    }

    public function manageuserAction() {
        $user = new TbUser();
        $userData = $user::find()->toArray();
        $this->view->setVar("data", $userData);
    }

    public function logoutAction() {
        //Remove a session variable
        $this->session->remove('id_user');
        $this->session->remove('name');
        $this->session->remove('page');
        // Destroy the whole session
        $this->session->destroy();
        
        $this->response->redirect("index");
    }

}
