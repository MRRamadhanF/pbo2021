<?php
require_once("initialize.php");

$rama = new Mahasiswa("H1101191029", "Muh Ridha Ramadhan Fatriendi", "2001-12-13", "Laki-laki");

$tegar = new Mahasiswa("H1101191071", "Tegar Ferdigantara", "2001-09-24", "Laki-laki");

$bayu = new Mahasiswa("H1101191047", "Bayu Firmadi", "2001-10-18", "Laki-laki");

$firman = new MahasiswaBaru("H1101201009", "Firmansyah Putra", "2002-08-04", "Laki-laki", 1342);

$meyliza = new MahasiswaBaru("H1101201042", "Meyliza Utari", "2002-05-27", "Perempuan", 1572);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php echo "<p>Selamat Datang</p>"; ?>
    
    <?php
        $rama->tampilkanNama(); $rama->tampilkanAngkatan();
        echo "<br>";
        $tegar->tampilkanNama(); $tegar->tampilkanAngkatan();
        echo "<br>";
        $bayu->tampilkanNama(); $bayu->tampilkanAngkatan();
        echo "<br>";
        $firman->tampilkanNama(); $firman->tampilkanAngkatan();
        echo "<br>";
        $meyliza->tampilkanNama(); $meyliza->tampilkanAngkatan();
        echo "<br>";
        echo "<br>";
        $rama->tampilkanNama(); $rama->tampilkanUmur();
        echo "<br>";
        $tegar->tampilkanNama(); $tegar->tampilkanUmur();
        echo "<br>";
        $bayu->tampilkanNama(); $bayu->tampilkanUmur();
        echo "<br>";
        $firman->tampilkanNama(); $firman->tampilkanUmur();
        echo "<br>";
        $meyliza->tampilkanNama(); $meyliza->tampilkanUmur();
        echo "<br>";
    ?>
</body>
</html>