<?php 
$hostname = "localhost";
$database = "db_cloudpnm";
$username = "root";
$password = "";

$connect = mysqli_connect($hostname, $username, $password, $database);
if (!$connect){
    die("Koneksi Tidak berhasil : ". mysqli_connect_error());
}
?>