<?php
class NguoiDung_Model extends Database
{
    public function getNguoiDung($tai_khoan, $mat_khau)
    {
        $qr = "select * from nguoidung where tai_khoan='$tai_khoan' and mat_khau='$mat_khau'";
        $row = mysqli_query($this->con, $qr);
        $nguoi_dung = mysqli_fetch_object($row);
        return json_encode($nguoi_dung);
    }


    public function getAll()
    {
        $qr = "SELECT nguoidung.* , quyen.ten_quyen as tq, quyen.id as idq
            FROM ((nguoidung
            INNER JOIN quyen_nguoidung ON nguoidung.id = quyen_nguoidung.id_nguoidung)
            INNER JOIN quyen ON quyen_nguoidung.id_quyen = quyen.id)";
        $mang = array();
        $rows = mysqli_query($this->con, $qr);
        while ($row = mysqli_fetch_array($rows)) {
            $mang[] = $row;
        }
        return json_encode($mang);
    }

    public function get_ND_Q_TheoID($id_nguoidung){
        $qr = "SELECT nguoidung.* , quyen.ten_quyen as tq, quyen.id as idq
            FROM ((nguoidung
            INNER JOIN quyen_nguoidung ON nguoidung.id = quyen_nguoidung.id_nguoidung)
            INNER JOIN quyen ON quyen_nguoidung.id_quyen = quyen.id) where nguoidung.id='$id_nguoidung'";

            $row = mysqli_query($this->con, $qr);
            $nguoi_dung= mysqli_fetch_object($row);
            return json_encode($nguoi_dung);

    }


    public function getQuyenNguoiDung($id_nguoidung)
    {
        $qr = "select * from quyen_nguoidung where id_nguoidung = '$id_nguoidung'";
        $row = mysqli_query($this->con, $qr);
        $quyen_nguoidung = mysqli_fetch_object($row);
        return json_encode($quyen_nguoidung);
    }

    public function getQuyen($id_quyen)
    {
        $qr = "select * from quyen where id='$id_quyen'";
        $row = mysqli_query($this->con, $qr);
        $quyen = mysqli_fetch_object($row);
        return json_encode($quyen);
    }

    public function getAllQuyen(){
        $qr="select * from quyen";
        $mang = array();
        $rows = mysqli_query($this->con, $qr);
        while ($row = mysqli_fetch_array($rows)) {
            $mang[] = $row;
        }
        return json_encode($mang);
    }

    public function getIDInsert($kq)
    {
        if ($kq) {
            $id = mysqli_insert_id($this->con);
        }
        return $id;
    }


    public function addND($nguoi_dung)
    {
        $qr = "insert into nguoidung(tai_khoan, mat_khau, ho_ten) "
            . "values('" . $nguoi_dung['tai_khoan'] . "', "
            . "'" . $nguoi_dung['mat_khau'] . "', "
            . "'" . $nguoi_dung['ho_ten'] . "')";
        $rs = mysqli_query($this->con, $qr);
        return $rs;
    }

    public function addQND($quyen_nguoidung)
    {
        $qr = "insert into quyen_nguoidung(id_nguoidung, id_quyen) "
            . "values('" . $quyen_nguoidung['id_nguoidung'] . "', "
            . "'" . $quyen_nguoidung['id_quyen'] . "')";
        $rs = mysqli_query($this->con, $qr);
        return $rs;
    } 

    public function updateND($nguoi_dung)
    {
        $qr = "update nguoidung set "
            . "tai_khoan='" . $nguoi_dung['tai_khoan'] . "', "
            . "mat_khau='" . $nguoi_dung['mat_khau'] . "', "
            . "ho_ten='" . $nguoi_dung['ho_ten'] . "' "
            . "where id= '" . $nguoi_dung['id'] . "'";
        $rs = mysqli_query($this->con, $qr);
        return $rs;
    }

    public function updateQND($quyen_nguoidung){
        $qr = "update quyen_nguoidung set "
            . "id_nguoidung='" . $quyen_nguoidung['id_nguoidung'] . "', "
            . "id_quyen='" . $quyen_nguoidung['id_quyen'] . "' "
            . "where id_nguoidung= '" . $quyen_nguoidung['id_nguoidung'] . "'";
        $rs = mysqli_query($this->con, $qr);
        return $rs;
    }

    public function delete($ma_nguoidung)
    {
        $qr = "delete from nguoidung where id=" . $ma_nguoidung;
        $rs = mysqli_query($this->con, $qr);
        return $rs;
    }

    public function deleteQND($ma_nguoidung)
    {
        $qr = "delete from quyen_nguoidung where id_nguoidung=" . $ma_nguoidung;
        $rs = mysqli_query($this->con, $qr);
        return $rs;
    }
}
