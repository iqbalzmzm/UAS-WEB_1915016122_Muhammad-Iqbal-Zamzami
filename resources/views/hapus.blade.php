<?php
$server = "localhost";
$user = "root";
$password = "";
$db_name = "data_vaksin";

$conn = mysqli_connect($server, $user, $password, $db_name);

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM pesertavaksin WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    if( $query ){
        header('Location: /crud');
    } else {
        die("Data gagal dihapus");
    }

} else {
    die("akses tidak ditemukan");
}

?>