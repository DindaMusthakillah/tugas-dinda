<?php

    $nama = ($_POST['nama']);
    $nisn = ($_POST['nisn']);

    echo "<h1>Data yang Dikirim</h1>";
    echo "<p>Nama: $nama</p>";
    echo "<p>NISN: $nisn</p>";

?>
<a href="form.php"><p>kembali ke halaman form</p></a>