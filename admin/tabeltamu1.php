<?php
include '../plugins/config.php';

date_default_timezone_set('Asia/Jakarta');
$tanggalskr=date('Y-m-d H:i:s');
$bulanskr=date('m');
$tahunskr=date('Y');

    $no=1;
    $select1 = "SELECT *, DATE_FORMAT(timestamp, '%d %b %Y %H:%i:%s') as tgl FROM tamu WHERE DATE_FORMAT(timestamp, '%m')='".$_POST['bulan']."' AND DATE_FORMAT(timestamp, '%Y')='".$_POST['tahun']."'";
    $select_act1 = mysqli_query($con, $select1);
    if($select_act1->num_rows>0){
        while($row1=$select_act1->fetch_assoc()){
            echo "
                <tr><td>".$no."</td><td>".$row1['tgl']."</td><td>".$row1['noid']."</td><td>".$row1['nama']."</td><td>".$row1['profil']."</td><td>".$row1['alamat']."</td><td>".$row1['telp']."</td><td>".$row1['keperluan']."</td><td>".strtoupper($row1['bidang'])."</td><td>".$row1['jmlpengunjung']."</td><td><a onclick='konfrimdel(".$row1['id'].")' href='javascript:;'><span class='glyphicon glyphicon-remove'></span></a></td></tr>
            ";
            $no++;
        }
    }
    else{
        echo "
            <tr><td colspan='10'><center>Tidak ada data</center></td></tr>
        ";        
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

