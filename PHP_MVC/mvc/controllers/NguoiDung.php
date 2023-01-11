<?php
session_start();
class NguoiDung extends Controller
{

    public $nguoidung_model;

    public function __construct()
    {
        $this->dv_gp_model = $this->model("DV_GP_Model");
        $this->duan_model = $this->model("DuAn_Model");
        $this->tintuc_model = $this->model("TinTuc_Model");
        $this->nguoidung_model = $this->model("NguoiDung_Model");
        $this->lienhe_model = $this->model("LienHe_Model");
    }
    public function SayHi()
    {
        $this->view("master_dangnhap", [
            "page" => "dang-nhap",
            "lienhe" => $this->lienhe_model->getLienHe(),
            "thong_bao" => " ",
        ]);
    }

    public function DangXuat()
    {
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
        $this->view("master1", [
            "page" => "home",
            "dv_gp" => $this->dv_gp_model->getDV_GP(),
            "dvgpmoi" => $this->dv_gp_model->getDVGPMoi(),
            "tintucmoi" => $this->tintuc_model->getTinTucMoi(),
            "lienhe" => $this->lienhe_model->getLienHe(),
            "du_an" => $this->duan_model->getDuAn()
        ]);
    }

    public function Admin()
    {

        if (isset($_SESSION['id'])) {
            $quyen_nguoidung = json_decode($this->nguoidung_model->getQuyenNguoiDung($_SESSION['id']));
            $quyen = json_decode($this->nguoidung_model->getQuyen($quyen_nguoidung->id_quyen));

            if ($quyen->id == 1) {
                $this->view("master2", [
                    "page" => "quanly-user",
                    "lienhe" => $this->lienhe_model->getLienHe(),
                    "user" => $this->nguoidung_model->getAll()
                ]);
            } else {

                $this->view("master2", [
                    "page" => "update-user-tv",
                    "lienhe" => $this->lienhe_model->getLienHe(),
                    "user" => $this->nguoidung_model->get_ND_Q_TheoID($_SESSION['id']),
                ]);
            }
        }
    }

    public function Add()
    {
        if (isset($_POST['btnAdd'])) {

            $ho_ten = $_POST['txtTen'];
            $tai_khoan = $_POST['txtTaiKhoan'];
            $mat_khau = $_POST['txtMatKhau'];
            $id_quyen = $_POST['slQuyen'];
            $user = array('tai_khoan' => $tai_khoan, 'mat_khau' => $mat_khau, 'ho_ten' => $ho_ten);
            $kq1 = $this->nguoidung_model->addND($user);
            $id = $this->nguoidung_model->getIDInsert($kq1);
            $quyen_user = array('id_nguoidung' => $id, 'id_quyen' => $id_quyen);
            $kq2 = $this->nguoidung_model->addQND($quyen_user);
            if ($kq2) {
                $this->view("master2", [
                    "page" => "quanly-user",
                    "lienhe" => $this->lienhe_model->getLienHe(),
                    "user" => $this->nguoidung_model->getAll()
                ]);
            }
        } else {
            $this->view("master2", [
                "page" => "add-user",
                "lienhe" => $this->lienhe_model->getLienHe(),
                "quyen" => $this->nguoidung_model->getAllQuyen()
            ]);
        }
    }

    public function Update($id_nguoidung)
    {
        if (isset($_POST['btnUpdate'])) {
            $ho_ten = $_POST['txtTen'];
            $tai_khoan = $_POST['txtTaiKhoan'];
            $mat_khau = $_POST['txtMatKhau'];
            $id_quyen = $_POST['slQuyen'];
            $user = array('id' => $id_nguoidung, 'tai_khoan' => $tai_khoan, 'mat_khau' => $mat_khau, 'ho_ten' => $ho_ten);
            $kq1 = $this->nguoidung_model->updateND($user);
            $quyen_user = array('id_nguoidung' => $id_nguoidung, 'id_quyen' => $id_quyen);
            $kq2 = $this->nguoidung_model->updateQND($quyen_user);
            if ($kq2) {
                $this->view("master2", [
                    "page" => "quanly-user",
                    "lienhe" => $this->lienhe_model->getLienHe(),
                    "user" => $this->nguoidung_model->getAll()
                ]);
            }
        } else {
            $user = json_decode($this->nguoidung_model->get_ND_Q_TheoID($id_nguoidung));
            $this->view("master2", [
                "page" => "update-user",
                "user" => $this->nguoidung_model->get_ND_Q_TheoID($id_nguoidung),
                "quyen" => $this->nguoidung_model->getAllQuyen(),
                "lienhe" => $this->lienhe_model->getLienHe(),
                "id_q" => $user->idq
            ]);
        }
    }

    public function UpdateTV()
    {
        if (isset($_POST['btnUpdate'])) {
            $ho_ten = $_POST['txtTen'];
            $tai_khoan = $_POST['txtTaiKhoan'];
            $mat_khau = $_POST['txtMatKhau'];
            $user = array('id' => $_SESSION['id'], 'tai_khoan' => $tai_khoan, 'mat_khau' => $mat_khau, 'ho_ten' => $ho_ten);
            $kq1 = $this->nguoidung_model->updateND($user);
            $_SESSION['ho_ten'] = $ho_ten;
            if ($kq1) {
                $this->view("master2", [
                    "page" => "quanly-duan",
                    "lienhe" => $this->lienhe_model->getLienHe(),
                    "du_an" => $this->duan_model->getDuAn()
                ]);
            }
        } else {
            $this->view("master2", [
                "page" => "update-user-tv",
                "lienhe" => $this->lienhe_model->getLienHe(),
                "user" => $this->nguoidung_model->get_ND_Q_TheoID($_SESSION['id']),
            ]);
        }
    }

    public function Delete($id_user)
    {

        $kq = $this->nguoidung_model->delete($id_user);
        $kq2 = $this->nguoidung_model->deleteQND($id_user);
        if ($kq) {
            $this->view("master2", [
                "page" => "quanly-user",
                "lienhe" => $this->lienhe_model->getLienHe(),
                "user" => $this->nguoidung_model->getAll()
            ]);
        }
    }
}
