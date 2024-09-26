<?php
//soal no 1
function cetak(){
    echo "did you have a nice day";
    echo "<br>";
}

cetak();


//soal no 2
function siswa($nama, $nisn, $kelas ){
    echo "Hai nama saya $nama, nisn saya adalah $nisn, saya kelas $kelas <br> ";
}

siswa("Budi", "12345678", "XI RPL 1");
siswa("Andi", "87654321", "XI RPL 2");



//soal no 3
function perkalian($bil1,$bil2){
    return $bil1*$bil2;
}
echo perkalian(10,5)."<br>";
echo perkalian(20,9)."<br>";
$kali=perkalian(11,6);
echo $kali;   