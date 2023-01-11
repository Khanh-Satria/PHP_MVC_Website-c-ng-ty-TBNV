<?php
session_start();
class Home extends Controller
{

    public $dv_gp_model;
    public $duan_model;
    public $tintuc_model;
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
        $this->view("master1", [
            "page" => "home",
            "dv_gp" => $this->dv_gp_model->getDV_GP(),
            "dvgpmoi" => $this->dv_gp_model->getDVGPMoi(),
            "tintucmoi" => $this->tintuc_model->getTinTucMoi(),
            "lienhe" => $this->lienhe_model->getLienHe(),
            "du_an" => $this->duan_model->getDuAn()
        ]);
    }

    public function CTDA($ma_duan)
    {

        $this->view("master1", [
            "page" => "ct-duan",
            "dv_gp" => $this->dv_gp_model->getDV_GP(),
            "ctda" => $this->duan_model->getDuAnTheoMa($ma_duan),
            "dvgpmoi" => $this->dv_gp_model->getDVGPMoi(),
            "tintucmoi" => $this->tintuc_model->getTinTucMoi(),
            "lienhe" => $this->lienhe_model->getLienHe(),
            "image_duan" => $this->duan_model->getHinhCTDA($ma_duan)
        ]);
    }
    public function KiemTra()
    {

        $tai_khoan = "";
        $mat_khau = "";
        if (isset($_POST["btnLogin"])) {
            $tai_khoan = $_POST["txtUser"];
            $mat_khau = $_POST["txtPassword"];
            $row = $this->nguoidung_model->getNguoiDung($tai_khoan, $mat_khau);
            $nguoidung = json_decode($row);
            if ($nguoidung != null) {
                $_SESSION['ho_ten'] = $nguoidung->ho_ten;
                $_SESSION['id'] = $nguoidung->id;
                $this->view("master2", [
                    "page" => "quanly-duan",
                    "nguoidung" => $nguoidung,
                    "lienhe" => $this->lienhe_model->getLienHe(),
                    "du_an" => $this->duan_model->getDuAn()
                ]);
            } else {
                $thongbao = "Vui lòng nhập lại...";
                $this->view("master_dangnhap", [
                    "page" => "dang-nhap",
                    "lienhe" => $this->lienhe_model->getLienHe(),
                    "thong_bao" => $thongbao,

                ]);
            }
        }
    }

    public function HomeAdmin()
    {
        $this->view("master2", [
            "page" => "quanly-duan",
            "lienhe" => $this->lienhe_model->getLienHe(),
            "du_an" => $this->duan_model->getDuAn()
        ]);
    }


    public function Add()
    {
        if ($_SESSION['ho_ten'] != "") {
            echo $_SESSION['ho_ten'];
        } else {
            echo "that bai";
        }
        $this->view("master2", [
            "page" => "add-duan",
            "lienhe" => $this->lienhe_model->getLienHe(),
        ]);
    }

    public function XuLyAdd()
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

            if (isset($_FILES['images'])) {
                $files = $_FILES['images'];
                $file_names = $files['name'];
                foreach ($file_names as $key => $value) {
                    move_uploaded_file($files['tmp_name'][$key], 'uploads/' . $value);
                }
            }
            $ten_du_an = $_POST['txtTen_du_an'];
            $mo_ta = $_POST['txtMo_ta'];
            $duan = $arrayName = array('ten_du_an' => $ten_du_an, 'mo_ta' => $mo_ta, 'image' => $file_name);
            $kq = $this->duan_model->addDuAn($duan);
            $id = $this->duan_model->getIDInsert($kq);
            $kq2 = $this->duan_model->addImage($id, $file_names);
        }       

        $this->view("master2", [
            "page" => "quanly-duan",
            "du_an" => $this->duan_model->getDuAn(),
            "lienhe" => $this->lienhe_model->getLienHe(),
            "kq"  => $kq,
            "kq2" => $kq2
        ]);
    }

    public function Delete($ma_duan)
    {

        $kq = $this->duan_model->delete($ma_duan);
        $this->view("master2", [
            "page" => "quanly-duan",
            "lienhe" => $this->lienhe_model->getLienHe(),
            "du_an" => $this->duan_model->getDuAn()
        ]);
    }

    public function Update($ma_duan)
    {
        $this->view("master2", [
            "page" => "update-duan",
            "lienhe" => $this->lienhe_model->getLienHe(),
            "du_an" => $this->duan_model->getDuAnTheoMa($ma_duan),
            "image_duan" => $this->duan_model->getHinhCTDA($ma_duan),
        ]);
    }


    public function XuLyUpdate($ma_duan)
    {
        $duan = json_decode($this->duan_model->getDuAnTheoMa($ma_duan));

        if (isset($_POST['btnUpdate'])) {
            if (isset($_FILES['image'])) {
                $file = $_FILES['image'];
                $file_name = $file['name'];

                if (empty($file_name)) {
                   
                    $file_name = $duan->image;
                } else {
                    if ($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png') {
                        move_uploaded_file($file['tmp_name'], 'uploads/' . $file_name);
                    } else {
                        echo "Không đúng định dạng...";
                        $file_name = '';
                    }
                }
            }

            if (isset($_FILES['images'])) {
                $files = $_FILES['images'];
                $file_names = $files['name'];
                if(!empty($file_names[0])){
                    foreach ($file_names as $key => $value) {
                        move_uploaded_file($files['tmp_name'][$key], 'uploads/' . $value);
                    }
                    $this->duan_model->deleteImage($ma_duan);
                    $this->duan_model->addImage($ma_duan, $file_names);
                }
               
            }
            $ten_du_an = $_POST['txtTen_du_an'];
            $mo_ta = $_POST['txtMo_ta'];
            $duan = $arrayName = array('id' => $ma_duan, 'ten_du_an' => $ten_du_an, 'mo_ta' => $mo_ta, 'image' => $file_name);
            $kq = $this->duan_model->updateDuAn($duan);
            
        }

        $this->view("master2", [
            "page" => "quanly-duan",
            "lienhe" => $this->lienhe_model->getLienHe(),
            "du_an" => $this->duan_model->getDuAn(),
            "kq"  => $kq,
        ]);
    }
}
