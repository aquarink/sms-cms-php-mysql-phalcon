<?php

class HomeController extends \Phalcon\Mvc\Controller {

    public function indexAction() {
        if ($this->session->has("id_user")) {
            $this->view->setVar("pic", $this->session->get("name"));
            $this->view->setVar("idsess", $this->session->get("id_user"));
        }
//        // Check if the variable is defined
//        if ($this->session->has("user-name")) {
//            
//        }
//        // Retrieve its value
//        $name = $this->session->get("user-name");
//        // Remove a session variable
//        $this->session->remove("user-name");
//        // Destroy the whole session
//        $this->session->destroy();
    }

}
