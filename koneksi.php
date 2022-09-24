<?php
$host="localhost";
$user="root";
$password="";
$database="alpinkeren";

$koneksi=mysqli_connect($host,$user,$password,$database);


//cek koneksi
if($koneksi){
echo "berhasil terhubung";
}else{
    echo "gagal terhubung";
}
?>