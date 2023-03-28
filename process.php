<?php

$nama=$_POST['nama'];
$jeniskel=$_POST['jeniskel'];
$instansi=$_POST['instansi'];
$asal=$_POST['asal'];
$pesankesan=$_POST['pesankesan'];

    include 'plugins/config.php';
    $insert = "INSERT INTO tamu(timestamp,nama,jeniskel,instansi,asal,pesankesan) VALUES(now(),'".$nama."','".$jeniskel."','".$instansi."','".$asal."','".$pesankesan."')";
    
    if(mysqli_query($con, $insert)){
        echo 'ok';    
    }
    