<?php

use Phalcon\Mvc\View;
use Phalcon\Http\Request;
use Phalcon\Http\Response;
use Phalcon\Mvc\Model\Query;
use Phalcon\Mvc\View\Engine\Volt;

class UserController extends \Phalcon\Mvc\Controller {

    public function indexAction() {
        
    }

    public function adduserAction() {
        if ($this->request->isPost()) {

            $datasent = $this->request->getPost();

            $input = new TbUser;
            $input->name = $datasent["nama"];
            $input->username = $datasent["username"];
            $input->password = md5($datasent["password"]);
            $input->page = strtolower(join($datasent["page"], ','));
            $input->user_create = date('Y-m-d h:i:s');
            $input->user_stat = 1;


            $savesuccess = $input->save();

            if ($savesuccess) {
                $this->response->redirect("user/manageuser");
            } else {
                $this->response->redirect("user/adduser?msg=Add user failed");
            }
        } else {
            // echo "request harus post";
        }

        $this->view->setVar("idsess", $this->session->get("id_user"));
        $this->view->setVar("pic", $this->session->get("name"));
        $this->view->setVar("data", $userData);
    }

    public function manageuserAction() {
        $user = new TbUser();
        $userData = $user::find("user_stat = 1")->toArray();
        $this->view->setVar("pic", $this->session->get("name"));
        $this->view->setVar("idsess", $this->session->get("id_user"));
        $this->view->setVar("data", $userData);
    }

    public function editpassAction() {
        $user = new TbUser();

        $id = $this->request->getQuery('id');
        $userData = $user::find("id_user = $id")->toArray();
        if (count($userData) > 0) {
            $this->view->setVar("idsess", $this->session->get("id_user"));
            $this->view->setVar("pic", $this->session->get("name"));
            $this->view->setVar("data", $userData);
        } else {
            $this->response->redirect("user/manageuser");
        }
    }

    public function edituserAction() {
        $user = new TbUser();

        $id = $this->request->getQuery('id');
        $userData = $user::find("id_user = $id")->toArray();
        if (count($userData) > 0) {
            $this->view->setVar("idsess", $this->session->get("id_user"));
            $this->view->setVar("pic", $this->session->get("name"));
            $this->view->setVar("data", $userData);
        } else {
            $this->response->redirect("user/manageuser");
        }
    }

    public function updateuserAction() {
        if ($this->request->isPost()) {
            $post = $this->request->getPost();

            if ($post["id"] != "") {
                if (empty($post["page"]) || $post["page"] == "") {
                    if ($post["nama"] != '' && $post["password"] != '' && $post["username"] != '') {
                        $update = $this->db->query("UPDATE tb_user SET name = '" . $post['nama'] . "',password = '" . md5($post['password']) . "' WHERE id_user = '" . $post['id'] . "' AND user_stat = 1");

                        if ($update) {
                            $this->response->redirect("user/manageuser");
                        } else {
                            echo 'gagal update';
                        }
                    } else {
                        $this->response->redirect("user/edituser?id=" . $post["id"] . "&msg=Field can not be empty&err=true");
                    }
                } else {
                    if ($post["nama"] != '' && $post["password"] != '' && $post["username"] != '') {
                        $update = $this->db->query("UPDATE tb_user SET name = '" . $post['nama'] . "',password = '" . md5($post['password']) . "',page = '" . strtolower(join($post["page"], ',')) . "' WHERE id_user = '" . $post['id'] . "' AND user_stat = 1");

                        if ($update) {
                            $this->response->redirect("user/manageuser");
                        } else {
                            $this->response->redirect("user/manageuser?msg=Update profile dan page gagal");
                        }
                    } else {
                        $update = $this->db->query("UPDATE tb_user SET page = '" . strtolower(join($post["page"], ',')) . "' WHERE id_user = '" . $post['id'] . "' AND user_stat = 1");

                        if ($update) {
                            $this->response->redirect("user/manageuser");
                        } else {
                            $this->response->redirect("user/manageuser?msg=Update page gagal");
                        }
                    }
                }
            }
        }
    }

    public function deleteuserAction() {
        $id = $this->request->getQuery('id');

        if (!empty($id) || $id != "") {
            $update = $this->db->query("UPDATE tb_user SET user_stat = 2 WHERE id_user = '" . $id . "'");
            if ($update) {
                $this->response->redirect("user/manageuser");
            } else {
                echo 'gagal update';
            }
        } else {
            $this->response->redirect("user/manageuser");
        }
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

    public function pushbysessidAction() {
        $id = $this->request->getQuery('id');
        $now = date('Y_m_d');

        header('Access-Control-Allow-Origin: *');

        if (!empty($id) || $id != "") {
            $getData = $this->dblog->query("SELECT * FROM tb_push_$now WHERE session_id = '" . $id . "' LIMIT 1");
            if ($getData->numRows() > 0) {
                
                    echo "<tr background-color: #4183D7;color: #fff;text-align: center>
                    <th>Telco</th>
                    <th>Shortcode</th>
                    <th>Msisdn</th>
                    <th>Sms</th>
                    <th>Id App</th>
                    <th>Keyword</th>
                    <th>Seq of Content</th>
                    <th>Field of Content</th>
                    <th>Id Trx</th>
                    <th>Date Trx</th>
                    <th>Id Session</th>
                    <th>Date Session</th>
                    <th>Type</th>
                    <th>Cost</th>
                    <th>DN Status</th>
                    <th>Hit Status</th>
                    <th>Subject</th>
                    </tr>";
                    
                    foreach ($getData->fetchAll() as $data) {
                    echo "<tr>
                    <td>" . $data['telco'] . "</td>
                    <td>" . $data['shortcode'] . "</td>
                    <td>" . $data['msisdn'] . "</td>
                    <td>" . $data['sms_field'] . "</td>
                    <td>" . $data['id_app'] . "</td>
                    <td>" . $data['keyword'] . "</td>
                    <td>" . $data['content_number'] . "</td>
                    <td>" . $data['content_field'] . "</td>
                    <td>" . $data['trx_id'] . "</td>
                    <td>" . $data['trx_date'] . "</td>
                    <td>" . $data['session_id'] . "</td>
                    <td>" . $data['session_date'] . "</td>
                    <td>" . $data['type'] . "</td>
                    <td>" . $data['cost'] . "</td>
                    <td>" . $data['send_status'] . "</td>
                    <td>" . $data['response_code'] . "</td>
                    <td>" . $data['subject'] . "</td>
                    </tr>";
                }
            }
        }
    }
    
    public function pushbymsisdnAction() {
        $id = $this->request->getQuery('id');
        $now = date('Y_m_d');

        header('Access-Control-Allow-Origin: *');

        if (!empty($id) || $id != "") {
            $getData = $this->dblog->query("SELECT * FROM tb_push_$now WHERE msisdn = '" . $id . "'");
            if ($getData->numRows() > 0) {
                
                    echo "<tr background-color: #4183D7;color: #fff;text-align: center>
                    <th>Telco</th>
                    <th>Shortcode</th>
                    <th>Msisdn</th>
                    <th>Sms</th>
                    <th>Id App</th>
                    <th>Keyword</th>
                    <th>Seq of Content</th>
                    <th>Field of Content</th>
                    <th>Id Trx</th>
                    <th>Date Trx</th>
                    <th>Id Session</th>
                    <th>Date Session</th>
                    <th>Type</th>
                    <th>Cost</th>
                    <th>DN Status</th>
                    <th>Hit Status</th>
                    <th>Subject</th>
                    </tr>";
                    
                    foreach ($getData->fetchAll() as $data) {
                    echo "<tr>
                    <td>" . $data['telco'] . "</td>
                    <td>" . $data['shortcode'] . "</td>
                    <td>" . $data['msisdn'] . "</td>
                    <td>" . $data['sms_field'] . "</td>
                    <td>" . $data['id_app'] . "</td>
                    <td>" . $data['keyword'] . "</td>
                    <td>" . $data['content_number'] . "</td>
                    <td>" . $data['content_field'] . "</td>
                    <td>" . $data['trx_id'] . "</td>
                    <td>" . $data['trx_date'] . "</td>
                    <td>" . $data['session_id'] . "</td>
                    <td>" . $data['session_date'] . "</td>
                    <td>" . $data['type'] . "</td>
                    <td>" . $data['cost'] . "</td>
                    <td>" . $data['send_status'] . "</td>
                    <td>" . $data['response_code'] . "</td>
                    <td>" . $data['subject'] . "</td>
                    </tr>";
                }
            }
        }
    }
    
    public function mobysessidAction() {
        $id = $this->request->getQuery('id');
        $now = date('Y_m_d');

        header('Access-Control-Allow-Origin: *');

        if (!empty($id) || $id != "") {
            $getData = $this->dblog->query("SELECT * FROM tb_mo_$now WHERE session_id = '" . $id . "' LIMIT 1");
            if ($getData->numRows() > 0) {
                
                    echo "<tr background-color: #4183D7;color: #fff;text-align: center>
                    <th>Telco</th>
                    <th>Shortcode</th>
                    <th>Msisdn</th>
                    <th>Sms</th>
                    <th>Keyword</th>
                    <th>Id Trx</th>
                    <th>Date Trx</th>
                    <th>Id Session</th>
                    <th>Date Session</th>
                    <th>Type</th>
                    </tr>";
                    foreach ($getData->fetchAll() as $data) {
                    echo "<tr>
                    <td>" . $data['telco'] . "</td>
                    <td>" . $data['shortcode'] . "</td>
                    <td>" . $data['msisdn'] . "</td>
                    <td>" . $data['sms_field'] . "</td>
                    <td>" . $data['keyword'] . "</td>
                    <td>" . $data['trx_id'] . "</td>
                    <td>" . $data['trx_date'] . "</td>
                    <td>" . $data['session_id'] . "</td>
                    <td>" . $data['session_date'] . "</td>
                    <td>" . $data['reg_type'] . "</td>
                    </tr>";
                }
            }
        }
    }

}
