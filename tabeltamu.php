<?php
include 'plugins/config.php';

    $no=1;
    $select1 = "SELECT *, DATE_FORMAT(timestamp, '%d %b %Y %H:%i:%s') as tgl FROM tamu ORDER BY timestamp DESC";
    $select_act1 = mysqli_query($con, $select1);
    if($select_act1->num_rows>0){
        while($row1=$select_act1->fetch_assoc()){
//            if($row1['nama']=='0'){
//                $jeniskel = 'Perempuan';
//            }
//            else {
//               $jeniskel = 'Laki-laki';
//            }
            echo "
                <tr>
                <td>".$no."</td>
                <td>".$row1['tgl']."</td>
                <td>".$row1['nama']."</td>
                <td>".$row1['instansi']."</td>
                <td>".$row1['asal']."</td>
                <td>".$row1['pesankesan']."</td>
                <td><a onclick='konfrimdel(".$row1['id'].")' href='javascript:;'><span class='glyphicon glyphicon-remove'></span></a></td>
                </tr>
            ";
            $no++;
        }
    }  
    else{
        echo "
            <tr><td colspan='10'><center>Tidak ada data</center></td></tr>
        ";        
    }    
//}

