<?php
session_start();
    class GioiThieu extends Controller{

        public $dv_gp_model;
        public $gioithieu_model;
        public $tintuc_model;

        public function __construct(){
            $this->dv_gp_model = $this->model("DV_GP_Model");
            $this->gioithieu_model = $this->model("GioiThieu_Model");
            $this->tintuc_model = $this->model("TinTuc_Model");
            $this->lienhe_model = $this->model("LienHe_Model");
        }
        public function SayHi(){
            $this->view("master1",[
                "page" => "gioi-thieu",
                "dv_gp" => $this->dv_gp_model->getDV_GP(),
                "dvgpmoi" => $this->dv_gp_model->getDVGPMoi(),
                "tintucmoi" => $this->tintuc_model->getTinTucMoi(),
                "lienhe" => $this->lienhe_model->getLienHe(),
                "gioithieu" => $this->gioithieu_model->getGioiThieu()
            ]);
        }

        public function Update(){


            if(isset($_POST['btnUpdate'])){
              
                for($i=1; $i<=3; $i++){
                    $noi_dung = $_POST["txtNoiDung$i"];
                    $gioi_thieu = array('noi_dung' => $noi_dung, 'id' => $i);
                    $kq=$this->gioithieu_model->updateGioiThieu($gioi_thieu);
                }
                if($kq){
                    $this->view("master2", [
                        "page" => "update-gioithieu",
                        "lienhe" => $this->lienhe_model->getLienHe(),
                        "gioithieu" => $this->gioithieu_model->getGioiThieu()
                    ]);
                }
            }else{
                $this->view("master2", [
                    "page" => "update-gioithieu",
                    "lienhe" => $this->lienhe_model->getLienHe(),
                    "gioithieu" => $this->gioithieu_model->getGioiThieu()
                ]);
            }

            
        }
    }
