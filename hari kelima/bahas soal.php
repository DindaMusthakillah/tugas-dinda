<?php

$nilai=-94;

if($nilai>=90 && $nilai <=100){
    $predikat="A";
}
if($nilai>=80 && $nilai <=89){
    $predikat="B";
}
if($nilai>=70 && $nilai <=79){
    $predikat="C";
}
if($nilai>=60 && $nilai <=69){
    $predikat="D";
}
if($nilai>=0 && $nilai <=59){
    $predikat="E";
}
else{
    $predikat="tidak ada";
}


$hasil="$nilai:$predikat";
print $hasil;