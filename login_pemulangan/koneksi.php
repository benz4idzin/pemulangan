<?php

$host="localhost";
$user="root";
$pass="";
$database="pemulangan";

$koneksi = mysqli_connect($host, $user, $pass, $database);

$Email      =$_POST['email'];
$Password   =$_POST['password'];

$sql = $koneksi-> query("SELECT * FROM user WHERE email='$Email' AND password='$Password'");

$cek = mysqli_num_row($sql);
if (mysqli_num_row($sql) > 0){
    $hasil = mysqli_fetch_array($sql);
    echo $hasil['level'];
}
else{
    echo "2";
}

mysqli_close($koneksi);

?>
