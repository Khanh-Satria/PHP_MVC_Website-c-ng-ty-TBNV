<?php

    class GioiThieu_Model extends Database{

        public function getGioiThieu(){

            $qr = "select * from gioi_thieu";
            $mang = array();
            $rows = mysqli_query($this->con,$qr);
            while($row = mysqli_fetch_array($rows)){
                $mang[]=$row;
            }
            return json_encode($mang);
        }

        public function updateGioiThieu($gioi_thieu){
                $qr = "update gioi_thieu set "
                . "noi_dung='" . $gioi_thieu['noi_dung'] . "' "
                . "where id= '" . $gioi_thieu['id'] . "'";
                echo $qr;
                 $rs = mysqli_query($this->con, $qr);
           
            return $rs;
        }
    
    }
?>