<?php
class DuAn_Model extends Database
{
    // Lấy dự án-------
    public function getDuAn()
    {
        $qr = "select * from du_an";
        $mang = array();
        $rows = mysqli_query($this->con, $qr);
        while ($row = mysqli_fetch_array($rows)) {
            $mang[] = $row;
        }
        return json_encode($mang);
    }

    public function getDuAnTheoMa($ma_duan)
    {
        $qr = "select * from du_an where id=" . $ma_duan;
        $rows = mysqli_query($this->con, $qr);
        while ($row = mysqli_fetch_array($rows)) {
            $ctda = $row;
        }
        return json_encode($ctda);
    }

    public function getHinhCTDA($ma_duan)
    {
        $qr = "select * from image_duan where id_duan=" . $ma_duan;
        $mang = array();
        $rows = mysqli_query($this->con, $qr);
        while ($row = mysqli_fetch_array($rows)) {
            $mang[] = $row;
        }
        return json_encode($mang);
    }
    //Kêt thúc nhóm lấy dự án-------


    //NHóm sửa dự án--------------------------
    public function updateDuAn($duan)
    {
        $qr = "update du_an set "
            . "ten_du_an='" . $duan['ten_du_an'] . "', "
            . "mo_ta='" . $duan['mo_ta'] . "', "
            . "image='" . $duan['image'] . "' "
            . "where id= '" . $duan['id'] . "'";
        $rs = mysqli_query($this->con, $qr);
        return $rs;
    }

    public function updateImage($id, $fn)
    {
        foreach ($fn as $key => $value) {
            $qr = "update image_duan set "
                . "image='" . $value . "' "
                . "where id_duan = '" . $id . "'";      
            $rs = mysqli_query($this->con, $qr);
        }
        return $rs;
    }

    public function deleteImage($id){
        $qr="delete from image_duan where id_duan='$id'";
        $rs = mysqli_query($this->con, $qr);
        return $rs;
    }
    //Kết thúc NHóm sửa dự án--------------------------



    //Nhóm thêm dự án---------------------------------
    public function addDuAn($duan)
    {
        $qr = "insert into du_an(ten_du_an, mo_ta, image) "
            . "values('" . $duan['ten_du_an'] . "', "
            . "'" . $duan['mo_ta'] . "', "
            . "'" . $duan['image'] . "')";
        $rs = mysqli_query($this->con, $qr);
        return $rs;
    }

    public function getIDInsert($kq)
    {
        if ($kq) {
            $id = mysqli_insert_id($this->con);                             
        }
        return $id;
    }

    public function addImage($id, $fn)
    {
        foreach ($fn as $key => $value) {
            $qr = "insert into image_duan(id_duan, image) "
                . "values('" . $id . "', "
                . "'" . $value . "')";
            $rs = mysqli_query($this->con, $qr);
        }
        return $rs;
    }

    //Kết thúc Nhóm thêm dự án---------------------------------



    //Nhóm xóa dự án-----------------------------------------
    public function delete($ma_duan)
    {
        $qr = "delete from du_an where id=" . $ma_duan;
        $rs = mysqli_query($this->con, $qr);
        return $rs;
    }
    //Kết thúc Nhóm xóa dự án-----------------------------------------
}
