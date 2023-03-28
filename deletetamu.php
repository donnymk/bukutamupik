<?php
include 'plugins/config.php';

$id=$_POST['id'];

    $delete = "DELETE FROM tamu WHERE id='".$id."'";
    $delete_act = mysqli_query($con, $delete);
    if($delete_act){
        echo 'ok';
    }
    else{
        echo 'gagal';
    }


