<?php
$data=array(array("nama"=>"persegi1", "panjang"=>56,"lebar"=>23),
            array("nama"=>"persegi2", "panjang"=>33,"lebar"=>21),
            array("nama"=>"persegi3", "panjang"=>65,"lebar"=>42),
            array("nama"=>"persegi4", "panjang"=>73,"lebar"=>29));

foreach($data as $dt=>$persegi){
    $data[$dt]["luas"]=$data[$dt]["panjang"]*$data[$dt]["lebar"];
}

            $jsonData=json_encode($data,JSON_PRETTY_PRINT);
            echo "<pre>".$jsonData. "</pre>";