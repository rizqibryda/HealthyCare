<!DOCTYPE html>
<html>
<head>
    
</head>
<body>

<?php
    header('Content-Type: text/html');
    $Name = $_POST["Nama"];
    $NIK = $_POST["NIK"];
    $Umur = $_POST["Umur"];
    $jeniskelamin = $_POST["jeniskelamin"];
    $tanggallahir = $_POST['tanggallahir'];

    echo "Mohon periksa kembali data Anda apakah sudah benar<br>";
    echo "Nama: $name <br>";
    echo "Nomor Induk Penduduk: $NIK" . "<br>";
    echo "Umur: $Umur" . "<br>";
    echo "Jenis Kelamin: $jeniskelamin" . "<br>";
    echo "Tanggal Lahir: $tanggallahir" . "<br>";
?>

</body>
</html>