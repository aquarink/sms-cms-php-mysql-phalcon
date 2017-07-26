<?php

use Phalcon\Mvc\Model;

class ReportController extends \Phalcon\Mvc\Controller {

    public function indexAction() {
        
    }

    public function applicationAction() {
        $app = new TbAppConfig();
        $appdata = $app::find()->toArray();
        $this->view->setVar("data", $appdata);


        if ($this->request->isPost()) {

            $datasent = $this->request->getPost();

            $input = new TbAppConfig();

            $input->app_desc = $datasent["app_desc"];
            $input->push_status = $datasent["push_status"];
            $input->push_time = $datasent["push_time"];
            $input->push_day = $datasent["push_day"];
            $input->partner = $datasent["partner"];
            $input->contact = $datasent["contact"];
            $input->marketing = $datasent["marketing"];
            $input->pic = $datasent["pic"];
            $input->config_status = $datasent["config_status"];
            $input->app_create = "asdasd";

            $savesuccess = $input->save();

            if ($savesuccess) {
                $app = new TbAppConfig();
                $appdata = $app::find()->toArray();
                $this->view->setVar("data", $appdata);
                $this->view->pick('report/application');
            } else {
                echo "sorry problemnya dibawah ya";
            }
        } else {
            // echo "request harus post";
        }
    }

    public function deleteAppAction($id_app) {
        $app = new TbAppConfig();
        $delapp = $app::findFirst($id_app);
        if (!$delapp) {
            echo 'tidak ada data';
            $this->view->disable();

            return;
        }

        if (!$delapp->delete()) {

            echo 'Gagal Hapus';
            $this->view->disable();
            return;
        }


        $this->response->redirect('report/application');
    }

    public function editappAction() {
        $id_app = $_GET['id'];
        if (!$this->request->isPost()) {
            $app = new TbAppConfig();
            $editapp = $app::findFirst($id_app);

            if (!$editapp) {
                $this->view->disable();
            } else {
                $app = new TbAppConfig();
                $editapp = $app::findFirst($id_app);

                $app = new TbAppConfig();
                $appdata = $app::find()->toArray();
                $this->view->setVar("data", $appdata);

                $this->view->setVar("detail", $editapp->toArray());
                return $this->view->pick("report/editapp");
            }
        }
        if ($this->request->isPost()) {
            $app = new TbAppConfig();
            $editapp = $app::findFirst($id_app);
            $data = array(
                'app_desc' => $this->request->getPost('app_desc'),
                'push_status' => $this->request->getPost('push_status'),
                'push_time' => $this->request->getPost('push_time'),
                'push_day' => $this->request->getPost('push_day'),
                'partner' => $this->request->getPost('partner'),
                'contact' => $this->request->getPost('contact'),
                'marketing' => $this->request->getPost('marketing'),
                'pic' => $this->request->getPost('pic'),
                'config_status' => $this->request->getPost('config_status')
            );
            $editapp->assign($data);

            if (!$editapp->update()) {
                echo 'gagal';
            } else {
                $app = new TbAppConfig();
                $appdata = $app::find()->toArray();
                $this->view->setVar("data", $appdata);
                $this->view->pick('report/application');
            }
        } else {
            
        }
    }

    public function keywordAction() {
        $keyword = new TbKeyword();
        $app = new TbAppConfig();
        $keywordData = $keyword::find()->toArray();
        $appdata = $app::find()->toArray();
        $this->view->setVar("data", $keywordData);
        $this->view->setVar("dataApp", $appdata);

        if ($this->request->isPost()) {

            $datasent = $this->request->getPost();

            $input = new TbKeyword();

            $input->keyword = $datasent["keyword"];
            $input->telco = $datasent["telco"];
            $input->shortcode = $datasent["shortcode"];
            $input->id_app = $datasent["id_app"];
            $input->keyword_status = $datasent["keyword_status"];
            $input->keyword_create = "asdasd";

            $savesuccess = $input->save();

            if ($savesuccess) {
                $keyword = new TbKeyword();
                $keywordData = $keyword::find()->toArray();
                $this->view->setVar("data", $keywordData);
                $this->view->pick('report/keyword');
            } else {
                echo 'gagal';
            }
        } else {
            // echo "request harus post";
        }
    }

    public function deletekeyAction($id_keyword) {
        $keyword = new TbKeyword();
        $keywordData = $keyword::findFirst($id_keyword);
        if (!$keywordData) {
            echo 'tidak ada data';
            $this->view->disable();

            return;
        }

        if (!$keywordData->delete()) {

            echo 'Gagal Hapus';
            $this->view->disable();
            return;
        }


        $this->response->redirect('report/keyword');
    }

    public function editKeywordAction() {
        $id_keyword = $_GET['id'];
        if (!$this->request->isPost()) {
            $keyword = new TbKeyword();
            $editkeyword = $keyword::findFirst($id_keyword);

            if (!$editkeyword) {
                $this->view->disable();
            } else {
                $keyword = new TbKeyword();
                $editkeyword = $keyword::findFirst($id_keyword);

                $keyword = new TbKeyword();
                $keywordData = $keyword::find()->toArray();
                $this->view->setVar("data", $keywordData);

                $app = new TbAppConfig();
                $appdata = $app::find()->toArray();
                $this->view->setVar("dataApp", $appdata);

                $this->view->setVar("detail", $editkeyword->toArray());
                return $this->view->pick("report/editkeyword");
            }
        }
        if ($this->request->isPost()) {
            $keyword = new TbKeyword();
            $editkeyword = $keyword::findFirst($id_keyword);
            $data = array(
                'keyword' => $this->request->getPost('keyword'),
                'telco' => $this->request->getPost('telco'),
                'shortcode' => $this->request->getPost('shortcode'),
                'id_app' => $this->request->getPost('id_app'),
                'keyword_status' => $this->request->getPost('keyword_status')
            );
            $editkeyword->assign($data);

            if (!$editkeyword->update()) {
                echo 'gagal';
            } else {
                $keyword = new TbKeyword();
                $keywordData = $keyword::find()->toArray();
                $this->view->setVar("data", $keywordData);
                $this->view->pick('report/keyword');
            }
        } else {
            
        }
    }

    public function regkeywordAction() {
        
    }

//    PARTNER--------------------------------------------
    public function partnernameAction() {

        $partner = new TbPartner();
        $partnerData = $partner::find()->toArray();
        $this->view->setVar("data", $partnerData);

        if ($this->request->isPost()) {

            $datasent = $this->request->getPost();

            $input = new TbPartner();

            $input->name_partner = $datasent["name_partner"];
            $input->create_partner = "asdasd";

            $savesuccess = $input->save();

            if ($savesuccess) {
                $partner = new TbPartner();
                $partnerData = $partner::find()->toArray();
                $this->view->setVar("data", $partnerData);
                $this->view->pick('report/partnername');
            } else {
                echo 'gagal';
            }
        } else {
            // echo "request harus post";
        }
    }

    public function deletePartnerAction($id) {
        $partner = new TbPartner();
        $partnerData = $partner::findFirst($id);
        if (!$partnerData) {
            echo 'tidak ada data';
            $this->view->disable();

            return;
        }

        if (!$partnerData->delete()) {

            echo 'Gagal Hapus';
            $this->view->disable();
            return;
        }


        $this->response->redirect('report/partnername');
    }

    public function editpartnerAction() {
        $id_partner = $_GET['id'];
        if (!$this->request->isPost()) {
            $partner = new TbPartner();
            $editPartner = $partner::findFirst($id_partner);

            if (!$editPartner) {
                $this->view->disable();
            } else {
                $partner = new TbPartner();
                $editPartner = $partner::findFirst($id_partner);

                $partner = new TbPartner();
                $partnerData = $partner::find()->toArray();
                $this->view->setVar("data", $partnerData);

                $this->view->setVar("detail", $editPartner->toArray());
                return $this->view->pick("report/editpartner");
            }
        }
        if ($this->request->isPost()) {
            $partner = new TbPartner();
            $editPartner = $partner::findFirst($id_partner);
            $data = array(
                'name_partner' => $this->request->getPost('name_partner')
            );
            $editPartner->assign($data);

            if (!$editPartner->update()) {
                echo 'gagal';
            } else {
                $partner = new TbPartner();
                $partnerData = $partner::find()->toArray();
                $this->view->setVar("data", $partnerData);
                $this->view->pick('report/partnername');
            }
        } else {
            
        }
    }

//    END PARTNER---------------------------
//    MEDIA NAME------------------------------------
    public function medianameAction() {

        $media = new TbMedia();
        $mediaData = $media::find()->toArray();
        $this->view->setVar("data", $mediaData);

        if ($this->request->isPost()) {

            $datasent = $this->request->getPost();

            $input = new TbMedia();

            $input->code_media = $datasent["code_media"];
            $input->name_media = $datasent["name_media"];
            $input->create_media = "asdasd";

            $savesuccess = $input->save();

            if ($savesuccess) {
                $media = new TbMedia();
                $mediaData = $media::find()->toArray();
                $this->view->setVar("data", $mediaData);
                $this->view->pick('report/medianame');
            } else {
                echo 'gagal';
            }
        } else {
            // echo "request harus post";
        }
    }

    public function deleteMediaAction($id_media) {
        $media = new TbMedia();
        $mediaData = $media::findFirst($id_media);
        if (!$mediaData) {
            echo 'tidak ada data';
            $this->view->disable();

            return;
        }

        if (!$mediaData->delete()) {

            echo 'Gagal Hapus';
            $this->view->disable();
            return;
        }


        $this->response->redirect('report/medianame');
    }

    public function editMediaAction() {
        $id_media = $_GET['id'];
        if (!$this->request->isPost()) {
            $media = new TbMedia();
            $editMedia = $media::findFirst($id_media);

            if (!$editMedia) {
                $this->view->disable();
            } else {
                $media = new TbMedia();
                $editMedia = $media::findFirst($id_media);

                $medias = new TbMedia();
                $mediasData = $medias::find()->toArray();
                $this->view->setVar("data", $mediasData);

                $this->view->setVar("detail", $editMedia->toArray());
                return $this->view->pick("report/editmedianame");
            }
        }
        if ($this->request->isPost()) {
            $media = new TbMedia();
            $editMedia = $media::findFirst($id_media);
            $data = array(
                'code_media' => $this->request->getPost('code_media'),
                'name_media' => $this->request->getPost('name_media')
            );
            $editMedia->assign($data);

            if (!$editMedia->update()) {
                echo 'gagal';
            } else {
                $media = new TbMedia();
                $mediaData = $media::find()->toArray();
                $this->view->setVar("data", $mediaData);
                $this->view->pick('report/medianame');
            }
        } else {
            
        }
    }

//    END MEDIA------------------------------------------

    public function listchargingAction() {
        
    }

    public function mologAction() {
	$today = date("Y_m_d");
	$query = "SELECT * FROM tb_mo_$today ORDER BY `session_date` DESC LIMIT 20";
        $result = $this->dblog->query($query);
        $moData = $result->fetchAll();
        $this->view->setVar("data", $moData);
    }

    public function mtlogAction() {
        $today = date("Y_m_d");
	$query = "SELECT * FROM tb_push_$today ORDER BY `session_date` DESC LIMIT 20";
	$result = $this->dblog->query($query);
	$mtData= $result->fetchAll();
        $this->view->setVar("data", $mtData);
    }

    public function DNLogAction() {
        $today = date("Y_m_d");
	$query = "SELECT * FROM tb_dr_$today ORDER BY `session_date` DESC LIMIT 20";
	$result = $this->dblog->query($query);
	$dndata= $result->fetchAll();
        $this->view->setVar("data", $dndata);
    }

    public function dailymtAction() {
        
    }

    public function moregAction() {
        
    }

    public function smssubscriberAction() {
        error_reporting(0);
        $member = new TbMembers();
        $query = "SELECT COUNT(c.`id_app`) AS jumlah,  c.`id_app`, c.`app_desc`, m.`reg_types` FROM tb_keyword AS k
        LEFT JOIN tb_app_config AS c
        ON k.`id_app` = c.`id_app`
        LEFT JOIN tb_members AS m
        ON k.`keyword` = m.`app`
        WHERE m.`reg_types` != ''
        GROUP BY c.`app_desc`, m.`reg_types`
        ORDER BY c.`id_app`";
        $result = $this->db->query($query);
        $dataArr = $result->fetchAll();

        foreach ($dataArr as $val) {
            $datas[$val['app_desc']][$val['reg_types']] = $val['jumlah'];
            $datas[$val['app_desc']]['id_app'] = $val['id_app'];
        }
        $this->view->setVar("data", $datas);
    }

    public function dailytrafficAction() {
	error_reporting(0);
        date_default_timezone_set('Asia/Jakarta');

        $thisMonth = date("Y-m");
//        $this->view->disable();
        
        $awalBulan = date('Y-m-01');
        $tanggal = date('d');
        $today = date('Y-m-'. $tanggal );
        
        $query = "SELECT *, SUBSTRING(SUBJECT, 1, 4) AS sub, SUM(total) total_c FROM tb_report_push
            WHERE (report_date BETWEEN '$awalBulan' AND '$today')
        GROUP BY DAY(report_date), sub, stat";
        
        $result = $this->db->query($query);
        $dataArr = $result->fetchAll();
//            print_r($dataArr);
        foreach ($dataArr as $val) {
            $date = new DateTime($val['report_date']);
            $date_key = date_format($date, 'd');

            $datas[$date_key][$val['sub'] . '_total'] = $val['total_c'];
            if (($val['sub'] == 'PUSH') && ($val['stat'] == 'Deliver')) {
                $datas[$date_key]['push']['delivered'] = $val['total_c'];
            }

            if (($val['sub'] == 'PUSH') && ($val['stat'] == 'Rejected')) {
                $datas[$date_key]['push']['rejected'] = $val['total_c'];
            }
//             echo date('d', $val['report_date']);
//            $datas[$val['app_desc']]['id_app'] = $val['id_app'];
        }
        $this->view->setVar("data", $datas);
        
    }

    public function monthlytrafficAction() {
        
    }

    public function topserviceAction() {
        
    }

    public function partnertrafficAction() {
        
    }

    public function profitlossAction() {
        
    }

    public function pushsmsAction() {
        
    }

}
