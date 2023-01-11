<?php
session_start();
class TinTuc extends Controller
{

    public $dv_gp_model;
    public $tintuc_model;

    public function __construct()
    {
        $this->dv_gp_model = $this->model("DV_GP_Model");
        $this->tintuc_model = $this->model("TinTuc_Model");
        $this->lienhe_model = $this->model("LienHe_Model");
    }
    public function SayHi()
    {
        $this->view("master1", [
            "page" => "tin-tuc",
            "dv_gp" => $this->dv_gp_model->getDV_GP(),
            "dvgpmoi" => $this->dv_gp_model->getDVGPMoi(),
            "tintucmoi" => $this->tintuc_model->getTinTucMoi(),
            "lienhe" => $this->lienhe_model->getLienHe(),
            "tintuc" => $this->tintuc_model->getTinTuc()
        ]);
    }


    public function CTTT($ma_tin_tuc)
    {
        $this->view("master1", [
            "page" => "ct-tintuc",
            "dv_gp" => $this->dv_gp_model->getDV_GP(),
            "cttt" => $this->tintuc_model->getTinTucTheoMa($ma_tin_tuc),
            "dvgpmoi" => $this->dv_gp_model->getDVGPMoi(),
            "lienhe" => $this->lienhe_model->getLienHe(),
            "tintucmoi" => $this->tintuc_model->getTinTucMoi(),
        ]);
    }

    public function Admin()
    {
        $this->view("master2", [
            "page" => "quanly-tintuc",
            "lienhe" => $this->lienhe_model->getLienHe(),
            "tin_tuc" => $this->tintuc_model->getTinTuc()
        ]);
    }

    public function Delete($ma_tintuc)
    {

        $kq = $this->tintuc_model->delete($ma_tintuc);
        if ($kq) {
            $this->view("master2", [
                "page" => "quanly-tintuc",
                "lienhe" => $this->lienhe_model->getLienHe(),
                "tin_tuc" => $this->tintuc_model->getTinTuc()
            ]);
        }
    }

    public function Add()
    {


        if (isset($_POST['btnAdd'])) {

            if (isset($_FILES['image'])) {
                $file = $_FILES['image'];
                $file_name = $file['name'];

                if ($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png') {
                    move_uploaded_file($file['tmp_name'], 'uploads/' . $file_name);
                } else {
                    echo "Không đúng định dạng...";
                    $file_name = '';
                }
            }
            $ten_tin_tuc = $_POST['txtTenTinTuc'];
            $tom_tat = $_POST['txtTomTat'];
            $mo_ta = $_POST['txtMoTa'];
            $tin_tuc = array('ten_tin_tuc' => $ten_tin_tuc, 'hinh_anh' => $file_name, 'tom_tat' => $tom_tat, 'mo_ta' => $mo_ta);
            $kq = $this->tintuc_model->addTinTuc($tin_tuc);
            if ($kq) {
                $this->view("master2", [
                    "page" => "quanly-tintuc",
                    "lienhe" => $this->lienhe_model->getLienHe(),
                    "tin_tuc" => $this->tintuc_model->getTinTuc()
                ]);
            }
        } else {
            $this->view("master2", [
                "page" => "add-tintuc",
                "lienhe" => $this->lienhe_model->getLienHe(),
            ]);
        }
    }

    public function Update($ma_tintuc)
    {

        $tin_tuc = json_decode($this->tintuc_model->getTinTucTheoMa($ma_tintuc));

        if (isset($_POST['btnUpdate'])) {
            if (isset($_FILES['image'])) {
                $file = $_FILES['image'];
                $file_name = $file['name'];

                if (empty($file_name)) {

                    $file_name = $tin_tuc->hinh_anh;
                } else {
                    if ($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png') {
                        move_uploaded_file($file['tmp_name'], 'uploads/' . $file_name);
                    } else {
                        echo "Không đúng định dạng...";
                        $file_name = '';
                    }
                }
            }
            $ten_tin_tuc = $_POST['txtTenTinTuc'];
            $tom_tat = $_POST['txtTomTat'];
            $mo_ta = $_POST['txtMoTa'];
            $tin_tuc  = array('id' => $ma_tintuc, 'ten_tin_tuc' => $ten_tin_tuc, 'tom_tat' => $tom_tat, 'mo_ta' => $mo_ta, 'hinh_anh' => $file_name);
            $kq = $this->tintuc_model->updateTinTuc($tin_tuc);
            if ($kq) {
                $this->view("master2", [
                    "page" => "quanly-tintuc",
                    "lienhe" => $this->lienhe_model->getLienHe(),
                    "tin_tuc" => $this->tintuc_model->getTinTuc()
                ]);
            }
        } else {

            $this->view("master2", [
                "page" => "update-tintuc",
                "tin_tuc" => $this->tintuc_model->getTinTucTheoMa($ma_tintuc),
                "lienhe" => $this->lienhe_model->getLienHe(),
            ]);
        }
    }
}
