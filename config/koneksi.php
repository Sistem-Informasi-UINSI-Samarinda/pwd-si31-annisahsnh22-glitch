<?php

$servername = "localhost";
$database = "pwd_2441919018";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Koneksi Gagal: ". mysqli_connecr_error());
}

echo "Koneksi Berhasil";
mysqli_close($conn);

?>