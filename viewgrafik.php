<?php

include 'plugins/config.php';

    $select = "SELECT asal, COUNT(*) as jumlah FROM tamu GROUP BY asal";
//    $select1 = "SELECT kelompok, COUNT(*) as jumlah FROM inovasi GROUP BY kelompok";
//    $select2 = "SELECT asal_peserta FROM inovasi WHERE asal_peserta<>'internal' GROUP BY asal_peserta";
//    $select3 = "SELECT COUNT(*) as jumlah FROM inovasi WHERE asal_peserta<>'internal' GROUP BY asal_peserta";
    
    
    $select_act = mysqli_query($con, $select);
//    $select_act1 = mysqli_query($con, $select1);
//    $select_nmkabkota = mysqli_query($con, $select2);
//    $select_jmlinov_kabkota = mysqli_query($con, $select3);
    
    if($select_act->num_rows>0){
        //--untuk merender grafik menggunakan library highcharts.js--
        echo"
        $('#grafik-asal').highcharts({
                chart: {
            backgroundColor: null
        },
            title: {
                text: false
            },
            series: [{
                type: 'pie',
                name: 'Jumlah pengunjung',
                data: [
        ";
        while($row=$select_act->fetch_assoc()){
            echo "
                {y: ".$row['jumlah'].", name: '".$row['asal']."'},
            ";
        }
        echo"
                ],
                //size: 150,
                showInLegend: true,
                dataLabels: {
                    color: '#761c19',
                    enabled: true,
                    format: '{point.y:.0f}' // no decimal
                }
            }]
        });
        ";
        //--untuk merender grafik menggunakan library highcharts.js--
    }
    else{
        echo "$('#grafik-asal').html('Tidak ada data.')";
    }