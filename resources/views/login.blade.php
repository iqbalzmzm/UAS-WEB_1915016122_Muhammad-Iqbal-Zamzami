<?php
session_start();
$server = "localhost";
$user = "root";
$password = "";
$db_name = "data_vaksin";

$conn = mysqli_connect($server, $user, $password, $db_name);

if ( !$conn ){
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}

if (isset($_GET['login'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    $result = mysqli_query($conn, "SELECT * from users WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            if ($row['pengguna'] === 'admin') {
                header("Location: /");
            } else {
                header("Location: /form");
            }
            echo "
            <script>
                alert('Gagal');
            </script>";
            exit;
        }
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="main">
        <div class="form">
            <h2 class="tittle">Login</h2>
            <p align="center">Lakukan Vaksin Sekarang!</p><br>
            <?php if (isset($error)) {
                echo "<p style='color:red;'> Username or Password wrong!</p>";
            } ?>
            <form action="" method="GET">
                <label for="username">Username</label><br><br>
                <input type="text" class="form_login" name="username" id="username" placeholder="Username" required>
                <label for="password">Password</label><br><br>
                <input type="password" class="form_login" name="password" id="password" placeholder="Password" required>
                <center>
                    <button type="submit" class="btn_login" name="login" id="login">Login</button>
                </center>
                <p>Belum punya akun?</p>
                <a class="link" href="/regis">Buat Akun</a>
                <br><br><br>
                <a href="/"><button type="button" class="btn btn-dark">Kembali</button></a>
        </div>
    </div>
</body>
</html>