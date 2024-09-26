<?php
$usia=-16;
$status="";
if($usia>=0 and $usia<=12){
    $status="Anak-anak";
}elseif($usia>=13 and $usia<=17){
    $status="Remaja";
}elseif($usia>=18 and $usia<=59){
    $status="dewasa";
}elseif($usia>=60){
    $status="lansia";
}

echo "Usia anda ".$usia.", Anda termasuk kedalam kategori ".$status;