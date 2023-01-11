<?php
    class DV_GP_Model extends Database{
        public function getDV_GP(){
           $qr = "select * from dichvu_giaiphap";
            $mang = array();
            $rows = mysqli_query($this->con, $qr);
            while($row = mysqli_fetch_array($rows)){
                $mang[] = $row;
            }
            return json_encode($mang);
        }

        public function getDV_GPTheoMa($ma_dv_gp){
            $qr = "select * from dichvu_giaiphap where id=".$ma_dv_gp;
            $rows = mysqli_query($this->con, $qr);
            while($row = mysqli_fetch_array($rows)){
                $ctdvgp = $row;
            }
            return json_encode($ctdvgp);
        }

        public function getCT_DV_GP($ma_dv_gp){
            $qr = "select * from ct_dvgp where id_dvgp=".$ma_dv_gp;
            $mang = array();
            $rows = mysqli_query($this->con, $qr);
            while($row = mysqli_fetch_array($rows)){
                $mang[] = $row;
            }
            return json_encode($mang);
        }

        public function getXem_DV_GP($ma_ctdvgp){
            $qr = "select * from ct_dvgp where id=".$ma_ctdvgp;
            $rows = mysqli_query($this->con, $qr);
            while($row = mysqli_fetch_array($rows)){
                $ctdvgp = $row;
            }
            return json_encode($ctdvgp);
        }

        public function getDVGPMoi(){
            $qr = "SELECT * from ct_dvgp ORDER BY id desc LIMIT 5";
            $mang = array();
            $rows = mysqli_query($this->con, $qr);
            while($row = mysqli_fetch_array($rows)){
                $mang[] = $row;
            }
            return json_encode($mang);
        }


        public function add($dvgp){
            $qr = "insert into dichvu_giaiphap(ten_dv_gp, image) "
            . "values('" . $dvgp['ten_dv_gp'] . "', "
            . "'" . $dvgp['image'] . "')";
            $rs = mysqli_query($this->con, $qr);
            return $rs;
        }

        public function update($dvgp){
            $qr = "update dichvu_giaiphap set "
            . "ten_dv_gp='" . $dvgp['ten_dv_gp'] . "', "
            . "image='" . $dvgp['image'] . "' "
            . "where id= '" . $dvgp['id'] . "'";
            $rs = mysqli_query($this->con, $qr);
            return $rs;
        }

        public function delete($ma_dvgp)
        {
            $qr = "delete from dichvu_giaiphap where id=" . $ma_dvgp;
            $rs = mysqli_query($this->con, $qr);
            return $rs;
        }

        /*Chi tiết dv gp */

        public function addCT($ctdvgp){
            $qr = "insert into ct_dvgp(id_dvgp, ten_ct_dvgp, tom_tat, mo_ta, hinh_anh) "
            . "values('" . $ctdvgp['id_dvgp'] . "', "
            . "'" . $ctdvgp['ten_ct_dvgp'] . "', "
            . "'" . $ctdvgp['tom_tat'] . "', "
            . "'" . $ctdvgp['mo_ta'] . "', "
            . "'" . $ctdvgp['hinh_anh'] . "')";
            $rs = mysqli_query($this->con, $qr);
            return $rs;
        }

        public function updateCT($ctdvgp){
            $qr = "update ct_dvgp set "
            . "id_dvgp='" . $ctdvgp['id_dvgp'] . "', "
            . "ten_ct_dvgp='" . $ctdvgp['ten_ct_dvgp'] . "', "
            . "tom_tat='" . $ctdvgp['tom_tat'] . "', "
            . "mo_ta='" . $ctdvgp['mo_ta'] . "', "
            . "hinh_anh='" . $ctdvgp['hinh_anh'] . "' "
            . "where id= '" . $ctdvgp['id'] . "'";
            $rs = mysqli_query($this->con, $qr);
            return $rs;
        }

        public function deleteCT($ma_dvgp)
        {
            $qr = "delete from ct_dvgp where id=" . $ma_dvgp;
            $rs = mysqli_query($this->con, $qr);
            return $rs;
        }

        /*hết Chi tiết dv gp */
    }
?>