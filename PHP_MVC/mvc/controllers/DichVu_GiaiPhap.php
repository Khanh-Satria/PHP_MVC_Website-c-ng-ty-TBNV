<?php
session_start();
class DichVu_GiaiPhap extends Controller
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
            "page" => "dichvu-giaiphap",
            "dv_gp" => $this->dv_gp_model->getDV_GP(),
            "dvgpmoi" => $this->dv_gp_model->getDVGPMoi(),
            "lienhe" => $this->lienhe_model->getLienHe(),
            "tintucmoi" => $this->tintuc_model->getTinTucMoi()
        ]);
    }

    public function CTDVGP($ma_dv_gp)
    {
        $this->view("master1", [
            "page" => "ct-dv-gp",
            "dv_gp" => $this->dv_gp_model->getDV_GP(),
            "ct_dv_gp" => $this->dv_gp_model->getCT_DV_GP($ma_dv_gp),
            "dvgpmoi" => $this->dv_gp_model->getDVGPMoi(),
            "tintucmoi" => $this->tintuc_model->getTinTucMoi(),
            "lienhe" => $this->lienhe_model->getLienHe(),
            "dvgp" => $this->dv_gp_model->getDV_GPTheoMa($ma_dv_gp)
        ]);
    }

    public function XemDVGP($ma_dv_gp)
    {
        $this->view("master1", [
            "page" => "xem-dv-gp",
            "dv_gp" => $this->dv_gp_model->getDV_GP(),
            "ct_dv_gp" => $this->dv_gp_model->getXem_DV_GP($ma_dv_gp),
            "dvgpmoi" => $this->dv_gp_model->getDVGPMoi(),
            "lienhe" => $this->lienhe_model->getLienHe(),
            "tintucmoi" => $this->tintuc_model->getTinTucMoi()
        ]);
    }

    public function Admin()
    {
        $this->view("master2", [
            "page" => "quanly-dvgp",
            "lienhe" => $this->lienhe_model->getLienHe(),
            "dvgp" => $this->dv_gp_model->getDV_GP(),
        ]);
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
            $ten_dv_gp = $_POST['txtTenDVGP'];
            $dv_gp = array('ten_dv_gp' => $ten_dv_gp, 'image' => $file_name);
            $kq = $this->dv_gp_model->add($dv_gp);
            if ($kq) {
                $this->view("master2", [
                    "page" => "quanly-dvgp",
                    "lienhe" => $this->lienhe_model->getLienHe(),
                    "dvgp" => $this->dv_gp_model->getDV_GP(),
                ]);
            }
        } else {
            $this->view("master2", [
                "page" => "add-dvgp",
                "lienhe" => $this->lienhe_model->getLienHe(),
            ]);
        }
    }




    public function Update($ma_dvgp)
    {

        $dv_gp = json_decode($this->dv_gp_model->getDV_GPTheoMa($ma_dvgp));

        if (isset($_POST['btnUpdate'])) {
            if (isset($_FILES['image'])) {
                $file = $_FILES['image'];
                $file_name = $file['name'];

                if (empty($file_name)) {

                    $file_name = $dv_gp->image;
                } else {
                    if ($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png') {
                        move_uploaded_file($file['tmp_name'], 'uploads/' . $file_name);
                    } else {
                        echo "Không đúng định dạng...";
                        $file_name = '';
                    }
                }
            }
            $ten_dv_gp = $_POST['txtTenDVGP'];
            $dvgp  = array('id' => $ma_dvgp, 'ten_dv_gp' => $ten_dv_gp, 'image' => $file_name);
            $kq = $this->dv_gp_model->update($dvgp);
            if ($kq) {
                $this->view("master2", [
                    "page" => "quanly-dvgp",
                    "dvgp" => $this->dv_gp_model->getDV_GP(),
                    "lienhe" => $this->lienhe_model->getLienHe(),
                ]);
            }
        } else {

            $this->view("master2", [
                "page" => "update-dvgp",
                "lienhe" => $this->lienhe_model->getLienHe(),
                "dvgp" => $this->dv_gp_model->getDV_GPTheoMa($ma_dvgp)
            ]);
        }
    }


    public function Delete($ma_dvgp)
    {

        $kq = $this->dv_gp_model->delete($ma_dvgp);
        if ($kq) {
            $this->view("master2", [
                "page" => "quanly-dvgp",
                "lienhe" => $this->lienhe_model->getLienHe(),
                "dvgp" => $this->dv_gp_model->getDV_GP(),
            ]);
        }
    }

    public function DanhSach($ma_dv_gp)
    {
        $this->view("master2", [
            "page" => "ds-dvgp",
            "lienhe" => $this->lienhe_model->getLienHe(),
            "ct_dv_gp" => $this->dv_gp_model->getCT_DV_GP($ma_dv_gp),
            "ma_dv_gp" => $ma_dv_gp
        ]);
    }

    public function AddCT($ma_dv_gp)
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
            $ten_ct_dvgp = $_POST['txtTenCTDVGP'];
            $tom_tat = $_POST['txtTomTat'];
            $mo_ta = $_POST['txtMoTa'];
            $ct_dvgp = array('id_dvgp' => $ma_dv_gp, 'ten_ct_dvgp' => $ten_ct_dvgp, 'tom_tat' => $tom_tat, 'mo_ta' => $mo_ta, 'hinh_anh' => $file_name);
            $kq = $this->dv_gp_model->addCT($ct_dvgp);
            if ($kq) {
                $this->view("master2", [
                    "page" => "ds-dvgp",
                    "ct_dv_gp" => $this->dv_gp_model->getCT_DV_GP($ma_dv_gp),
                    "lienhe" => $this->lienhe_model->getLienHe(),
                    "ma_dv_gp" => $ma_dv_gp
                ]);
            }
        } else {
            $this->view("master2", [
                "page" => "add-ctdvgp",
                "lienhe" => $this->lienhe_model->getLienHe(),
                "ma_dv_gp" => $ma_dv_gp
            ]);
        }
    }

    public function DeleteCT($ma_ctdvgp)
    {
        $ctdvgp = json_decode($this->dv_gp_model->getXem_DV_GP($ma_ctdvgp));
        $ma_dv_gp = $ctdvgp->id_dvgp;
        $kq = $this->dv_gp_model->deleteCT($ma_ctdvgp);
        if ($kq) {
            $this->view("master2", [
                "page" => "ds-dvgp",
                "ct_dv_gp" => $this->dv_gp_model->getCT_DV_GP($ma_dv_gp),
                "lienhe" => $this->lienhe_model->getLienHe(),
                "ma_dv_gp" => $ma_dv_gp
            ]);
        }
    }

    public function UpdateCT($ma_ctdvgp)
    {

        $ctdvgp = json_decode($this->dv_gp_model->getXem_DV_GP($ma_ctdvgp));
        $ma_dv_gp = $ctdvgp->id_dvgp;
        if (isset($_POST['btnUpdate'])) {
            if (isset($_FILES['image'])) {
                $file = $_FILES['image'];
                $file_name = $file['name'];

                if (empty($file_name)) {

                    $file_name = $ctdvgp->hinh_anh;
                } else {
                    if ($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png') {
                        move_uploaded_file($file['tmp_name'], 'uploads/' . $file_name);
                    } else {
                        echo "Không đúng định dạng...";
                        $file_name = '';
                    }
                }
            }
            $ten_ct_dvgp = $_POST['txtTenCTDVGP'];
            $tom_tat = $_POST['txtTomTat'];
            $mo_ta = $_POST['txtMoTa'];
            $ct_dvgp = array('id' => $ma_ctdvgp ,'id_dvgp' => $ma_dv_gp, 'ten_ct_dvgp' => $ten_ct_dvgp, 'tom_tat' => $tom_tat, 'mo_ta' => $mo_ta, 'hinh_anh' => $file_name);
            $kq = $this->dv_gp_model->updateCT($ct_dvgp);
            if ($kq) {
                $this->view("master2", [
                    "page" => "ds-dvgp",
                    "ct_dv_gp" => $this->dv_gp_model->getCT_DV_GP($ma_dv_gp),
                    "lienhe" => $this->lienhe_model->getLienHe(),
                    "ma_dv_gp" => $ma_dv_gp
                ]);
            }
        } else {

            $this->view("master2", [
                "page" => "update-ctdvgp",
                "ctdvgp" => $this->dv_gp_model->getXem_DV_GP($ma_ctdvgp),
                "lienhe" => $this->lienhe_model->getLienHe(),
                "ma_dv_gp" => $ma_dv_gp
            ]);
        }
    }
}
