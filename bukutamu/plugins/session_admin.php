<?php
session_start();
include "config.php";

if(!isset($_SESSION['admin'])){
//mysqli_close($con); // Menutup koneksi
echo "<script>
		location.replace('login.php')</script>";
}


?>