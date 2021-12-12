<?php
session_start();
$server = "localhost";
$user = "root";
$password = "";
$db_name = "data_vaksin";

$conn = mysqli_connect($server, $user, $password, $db_name);
if ( isset($_GET["kirim2"])){
    $id = $_GET['id'];
    $nama_lengkap = $_GET['nama_lengkap'];
    $alamat = $_GET['alamat'];
    $tempat_lahir = $_GET['tempat_lahir'];
    $tanggal_lahir = $_GET['tanggal_lahir'];
    $jenis_kelamin = $_GET['jenis_kelamin'];
    $nomor_telepon = $_GET['nomor_telepon'];
    $email = $_GET['email'];
    $keterangan = $_GET['keterangan'];

        $sql = "UPDATE pesertavaksin SET nama_lengkap='$nama_lengkap', alamat='$alamat', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', nomor_telepon='$nomor_telepon', email='$email', keterangan='$keterangan' WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if( $result ) {
            header('Location: /crud');
        } else {
            die("Gagal menyimpan perubahan...");
        }
}
?>