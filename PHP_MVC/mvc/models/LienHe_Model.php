<?php
class LienHe_Model extends Database{
    public function getLienHe(){
        $qr = "select * from lien_he where id=1";
        $rows = mysqli_query($this->con, $qr);
        while($row = mysqli_fetch_array($rows)){
            $lienhe = $row;
        }
        return json_encode($lienhe);
    }

    public function updateLienHe($lienhe){
        $qr = "update lien_he set "
        . "ten_cty='" . $lienhe['ten_cty'] . "', "
        . "dia_chi='" . $lienhe['dia_chi'] . "', "
        . "gg_map='" . $lienhe['gg_map'] . "', "
        . "website='" . $lienhe['website'] . "', "
        . "gmail='" . $lienhe['gmail'] . "', "
        . "sdt1='" . $lienhe['sdt1'] . "', "
        . "sdt2='" . $lienhe['sdt2'] . "' "
        . "where id= '" . 1 . "'";
       
    $rs = mysqli_query($this->con, $qr);
    return $rs;
    }
}
?>