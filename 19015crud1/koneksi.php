<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "19015_crud1";    

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($connection) {
     echo "Berhasil";
} else {
    echo "Koneksi Gagal! : ". mysqli_connect_error();
}

?>