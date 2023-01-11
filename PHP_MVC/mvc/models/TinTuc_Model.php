<?php
    class TinTuc_Model extends Database{
        public function getTinTuc(){
            $qr = "select * from tintuc";
            $mang = array();
            $rows = mysqli_query($this->con, $qr);
            while($row = mysqli_fetch_array($rows)){
                $mang[] = $row;
            }
            return json_encode($mang);
     }
     public function getTinTucTheoMa($ma_tin_tuc){
        $qr = "select * from tintuc where id=".$ma_tin_tuc;
        $rows = mysqli_query($this->con, $qr);
        while($row = mysqli_fetch_array($rows)){
            $cttt = $row;
        }
        return json_encode($cttt);
    }
    public function getTinTucMoi(){
        $qr = "SELECT * from tintuc ORDER BY id desc LIMIT 5";
        $mang = array();
        $rows = mysqli_query($this->con, $qr);
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }




    public function updateTinTuc($tin_tuc){
       
            $qr = "update tintuc set "
            . "ten_tin_tuc='" . $tin_tuc['ten_tin_tuc'] . "', "
            . "hinh_anh='" . $tin_tuc['hinh_anh'] . "', "
            . "tom_tat='" . $tin_tuc['tom_tat'] . "', "
            . "mo_ta='" . $tin_tuc['mo_ta'] . "' "
            . "where id= '" . $tin_tuc['id'] . "'";
            echo $qr;
             $rs = mysqli_query($this->con, $qr);
       
        return $rs;
    
    }

    public function addTinTuc($tin_tuc)
    {
        $qr = "insert into tintuc(ten_tin_tuc, hinh_anh, tom_tat, mo_ta) "
            . "values('" . $tin_tuc['ten_tin_tuc'] . "', "
            . "'" . $tin_tuc['hinh_anh'] . "', "
            . "'" . $tin_tuc['tom_tat'] . "', "
            . "'" . $tin_tuc['mo_ta'] . "')";
        $rs = mysqli_query($this->con, $qr);
        echo $qr;
        return $rs;
    }

    public function delete($ma_tintuc)
        {
            $qr = "delete from tintuc where id=" . $ma_tintuc;
            $rs = mysqli_query($this->con, $qr);
            return $rs;
        }

    }
