<?php // include "plugins/session_admin.php";?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <meta charset="UTF-8">
    <title>Buku Tamu Pameran Inovasi Kepemimpinan BPSDMD Prov. Jateng</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row header">
                <div class="col-md-1">
                    <br>
                    <img id="logojateng" src="assets/img/logo_jawa_tengah_icon.ico" width="90" alt="">
                </div>
                <div class="col-md-10" align="left">
                    <h1 style="color: #ac2925"><b>BPSDMD Provinsi Jawa Tengah</b></h1>
                    <h2 style="color: #204d74">Selamat Datang di Stand Pameran Inovasi Kepemimpinan</h2>
                </div>
                <div class="col-md-1">
                    <img src="assets/img/pik.png" alt="" style="float: right; width: 140px"/>
                </div>                
            </div>
            <!--<hr>-->
            <!--<hr>-->
                <!--Data buku tamu-->
                <div class="row">
                    <div class="col-md-12 alert-danger">
                        <h2>Grafik pengunjung</h2><a href="./">Kembali</a>
                        <div id="grafik-asal"></div>
                    </div>                    
                </div>
                <br>
<!--                <a href="logout.php" class="btn btn-default"><span class="glyphicon glyphicon-log-out"></span> Keluar</a>-->
        </div>
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/highcharts.js" type="text/javascript"></script>
    <script> 
    $(document).ready(function() {
        //load grafik
        $.ajax({
            url: 'viewgrafik.php',
            type: 'POST', // Send post data
            data: 'type=fetch',
            async: false,
            success: function(s){
                eval(s);
            }
        });        
    })
    </script>    
    </body>
</html>