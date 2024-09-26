<?php

$phi=3.14;
$R=7;
$T=10;

$R = ($_GET['R']);
$T = ($_GET['T']);

$hasil = $phi * $R * $R * $T;
echo "volume tabung <br><p>$phi * $R * $R * $T = $hasil";

?>
<a href="tabung.php"><p>kembali ke halaman form</p></a>