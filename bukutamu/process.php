<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

date_default_timezone_set('Asia/Jakarta');
$tanggalskr=date('Y-m-d H:i:s');
$bulanskr=date('m');
$tahunskr=date('Y');

$id=$_POST['id'];
$nama=$_POST['nama'];
$instansi=$_POST['instansi'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$jeniskeperluan=$_POST['jeniskeperluan'];
$keperluan=$_POST['keperluan'];
$bidang=$_POST['bidang'];
$jmlpengunjung=$_POST['jmlpengunjung'];

if($jeniskeperluan=="Sewa"){
    include 'plugins/config.php';
    $insert = "INSERT INTO tamu(timestamp,nama,alamat,noid,profil,telp,bidang,keperluan,keperluan_detail,jmlpengunjung) VALUES(now(),'".$nama."','".$alamat."','".$id."','".$instansi."','".$telp."','".$bidang."','".$jeniskeperluan."','".$keperluan."','".$jmlpengunjung."')";
    include 'plugins/config2.php';
    $insert2 = "INSERT INTO permohonan(tanggal,media,nama,alamat,lembaga,telp,informasi,tujuan,status) VALUES(now(),'1','".$nama."','".$alamat."','".$instansi."','".$telp."','".$jeniskeperluan."','Informasi sewa gedung / asrama','1')";
    mysqli_query($con, $insert);
    mysqli_query($con2, $insert2);
        echo 'ok';
}
elseif($jeniskeperluan=="Magang/Penelitian"){
    include 'plugins/config.php';
    $insert = "INSERT INTO tamu(timestamp,nama,alamat,noid,profil,telp,bidang,keperluan,keperluan_detail,jmlpengunjung) VALUES(now(),'".$nama."','".$alamat."','".$id."','".$instansi."','".$telp."','".$bidang."','".$jeniskeperluan."','".$keperluan."','".$jmlpengunjung."')";
    include 'plugins/config2.php';
    $insert2 = "INSERT INTO permohonan(tanggal,media,nama,alamat,lembaga,telp,informasi,tujuan,status) VALUES(now(),'1','".$nama."','".$alamat."','".$instansi."','".$telp."','".$jeniskeperluan."','".$keperluan."','1')";
    mysqli_query($con, $insert);
    mysqli_query($con2, $insert2);
        echo 'ok';
}
else{
    include 'plugins/config.php';
    $insert = "INSERT INTO tamu(timestamp,nama,alamat,noid,profil,telp,bidang,keperluan,keperluan_detail,jmlpengunjung) VALUES(now(),'".$nama."','".$alamat."','".$id."','".$instansi."','".$telp."','".$bidang."','".$jeniskeperluan."','".$keperluan."','".$jmlpengunjung."')";
    mysqli_query($con, $insert);
    echo 'ok';
}
    //echo $tanggalskr;