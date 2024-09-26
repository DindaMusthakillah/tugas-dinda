<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Segitiga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="number"] {
            width: 100px;
        }
        input[type="submit"] {
            margin-top: 10px;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Hitung Luas dan Keliling Segitiga</h1>

    <form method="post" action="">
        <label for="sisiA">Panjang sisi a:</label>
        <input type="number" id="sisiA" name="sisiA" step="any" required><br>
        <label for="sisiB">Panjang sisi b:</label>
        <input type="number" id="sisiB" name="sisiB" step="any" required><br>
        <label for="sisiC">Panjang sisi c:</label>
        <input type="number" id="sisiC" name="sisiC" step="any" required><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $a = floatval($_POST['sisiA']);
        $b = floatval($_POST['sisiB']);
        $c = floatval($_POST['sisiC']);

        // Validasi input
        if ($a <= 0 || $b <= 0 || $c <= 0) {
            echo "<p>Semua sisi harus lebih besar dari nol.</p>";
        } elseif ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
            echo "<p>Sisi-sisi yang dimasukkan tidak membentuk segitiga yang valid.</p>";
        } else {
            // Menghitung keliling
            $keliling = $a + $b + $c;

            // Menghitung luas menggunakan rumus Heron
            $s = $keliling / 2;
            $luas = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));

            // Menampilkan hasil
            echo "<div class='result'>";
            echo "<p>Keliling segitiga adalah: " . number_format($keliling, 2) . "</p>";
            echo "<p>Luas segitiga adalah: " . number_format($luas, 2) . "</p>";
            echo "</div>";
        }
    }
    ?>

</body>
</html>
