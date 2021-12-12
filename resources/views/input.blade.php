<?php
session_start();
$server = "localhost";
$user = "root";
$password = "";
$db_name = "data_vaksin";

$conn = mysqli_connect($server, $user, $password, $db_name);

if (isset($_GET["kirim"])) {
    $nama_lengkap = htmlspecialchars($_GET["nama_lengkap"]);
    $alamat = htmlspecialchars($_GET["alamat"]);
    $tempat_lahir = htmlspecialchars($_GET["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($_GET["tanggal_lahir"]);
    $jenis_kelamin = htmlspecialchars($_GET["jenis_kelamin"]);
    $nomor_telepon = htmlspecialchars($_GET["nomor_telepon"]);
    $email = htmlspecialchars($_GET["email"]);
    $keterangan = htmlspecialchars($_GET["keterangan"]);

        $sql = "INSERT INTO pesertavaksin (nama_lengkap, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, nomor_telepon, email, keterangan)
        VALUES ('$nama_lengkap', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$nomor_telepon', '$email', '$keterangan')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "
            <script>
                alert ('Input Data Complete');
                document.location.href = '/crud'
            </script>";
        } else {
            echo "
            <script>
                confirm ('Input Data Failed');
                document.location.href = '/form'
            </script>";
        }
}
?>