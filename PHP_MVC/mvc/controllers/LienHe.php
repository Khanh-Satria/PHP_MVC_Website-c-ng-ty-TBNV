<?php
session_start();
    class LienHe extends Controller{

        public $dv_gp_model;
        public $lienhe_model;
        public $tintuc_model;

        public function __construct(){
            $this->dv_gp_model = $this->model("DV_GP_Model");
            $this->lienhe_model = $this->model("LienHe_Model");
            $this->tintuc_model = $this->model("TinTuc_Model");
        }
        public function SayHi(){
            $this->view("master1",[
                "page" => "lien-he",
                "lienhe" => $this->lienhe_model->getLienHe(),
                "dv_gp" => $this->dv_gp_model->getDV_GP(),
                "dvgpmoi" => $this->dv_gp_model->getDVGPMoi(),
                "tintucmoi" => $this->tintuc_model->getTinTucMoi(),
            ]);
        }

        public function Update()
        {
            if(isset($_POST['btnUpdate'])){
                $ten_cty = $_POST["txtTenCT"];
                $dia_chi = $_POST["txtDiaChi"];
                $ggm = $_POST["txtGGM"];
                $web = $_POST["txtWeb"];
                $gmail = $_POST["txtGmail"];
                $sdt1 = $_POST["txtSdt1"];
                $sdt2 = $_POST["txtSdt2"];
                $lienhe = array('ten_cty' => $ten_cty, 'dia_chi'=>$dia_chi, 'gg_map'=>$ggm, 'website'=>$web, 'gmail'=>$gmail, 'sdt1'=>$sdt1, 'sdt2'=>$sdt2);
                $kq=$this->lienhe_model->updateLienHe($lienhe);
                if($kq){
                    $this->view("master2", [
                        "page" => "update-lienhe",
                        "lien_he" => $this->lienhe_model->getLienHe(),
                    ]);
                }
            }else{
                $this->view("master2", [
                    "page" => "update-lienhe",
                    "lien_he" => $this->lienhe_model->getLienHe(),
                ]);
            }
        }
    }
?>