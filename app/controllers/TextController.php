<?php

class TextController extends \Phalcon\Mvc\Controller {

    public function indexAction() {
        
    }

    public function addtextAction() {
        $app = new TbAppConfig();
        $appData = $app::find()->toArray();
        $this->view->setVar("data", $appData);
        if ($this->request->isPost()) {

            $datasent = $this->request->getPost();

            $input = new TbAppsContent();

            $input->id_app = $datasent["id_app"];
            $input->content_field = $datasent["content_field"];
            $input->category = $datasent["category"];
            $input->publish_date = $datasent["publish_date"];
            $input->content_number = $datasent["content_number"];
            $input->content_create = "asdasd";

            $savesuccess = $input->save();

            if ($savesuccess) {
                $this->view->disable();
                echo 'sukses';
//                $this->view->pick('report/medianame');
            } else {
                $this->view->disable();
                echo 'gagal';
            }
        } else {
            // echo "request harus post";
        }
    }

    public function managetextAction() {
        $text = new TbAppsContent();
        $queryApp = "SELECT c.`app_desc`, a.`category`, "
                . "a.`content_field`, a.`publish_date`, a.`content_number`, "
                . "a.`content_create` "
                . "FROM tb_app_config AS c "
                . "LEFT JOIN tb_apps_content AS a "
                . "ON c.`id_app` = a.`id_app` "
                . "GROUP BY c.`id_app`";
        $result = $this->db->query($queryApp);
        $dataArr = $result->fetchAll();
        $this->view->setVar("data", $dataArr);
    }

    public function addquizAction() {
        
    }

    public function managequizAction() {
        
    }

    public function addwapAction() {
        
    }

    public function managewapAction() {
        
    }

}
