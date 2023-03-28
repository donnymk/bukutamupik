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
       
            <form id="data">
                <div class="row alert alert-info">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required="required">                    
                        </div>
                        <div class="form-group">
                            <label>Jenis kelamin</label>
                            <br>
                            <label>
                                <input name="jeniskel" value="1" id="RadioGroup1_1" required="" type="radio">
                                Laki-laki&nbsp;
                            </label>
                            <label>
                                <input name="jeniskel" value="0" id="RadioGroup1_1" required="" type="radio">
                                Perempuan&nbsp;
                            </label>                   
                        </div>
                        <div class="form-group">
                            <label>Instansi / alamat</label>
                            <input type="text" name="instansi" id="instansi" class="form-control" placeholder="Instansi atau alamat" required="required">             
                        </div>
                        <div class="form-group">
                            <label>Asal</label>
                            <br>
                            <label>
                                <input name="asal" value="Kementerian/Lembaga" id="RadioGroup1_1" required="" type="radio">
                                Kementerian/Lembaga&nbsp;
                            </label>
                            <label>
                                <input name="asal" value="Provinsi" id="RadioGroup1_1" required="" type="radio">
                                Provinsi&nbsp;
                            </label>
                            <label>
                                <input name="asal" value="Kabupaten/Kota" id="RadioGroup1_1" required="" type="radio">
                                Kabupaten/Kota&nbsp;
                            </label>
                            <label>
                                <input name="asal" value="Masyarakat" id="RadioGroup1_1" required="" type="radio">
                                Masyarakat&nbsp;
                            </label>                            
                        </div>                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pesan & Kesan</label>
                            <textarea name="pesankesan" id="pesankesan" class="form-control" required="required"></textarea>      
                        </div>
                        <div class="form-group" style="text-align:right">
                            <br>
                            <button type="submit" id="simpan" class="btn btn-lg btn-danger">Simpan</button>
                        </div>                        
                    </div>
                </div>
            </form>
            <!--<hr>-->
                <!--Data buku tamu-->
                <div class="row">
                    <div class="col-md-12 alert-info">
                        <h2>Pengunjung</h2><a href="grafik.php">Grafik pengunjung</a>
                        <table class="table table-striped">
                            <thead>
                            <th>No.</th><th>Waktu</th><th>Nama</th><th>Instansi / Alamat</th><th>Asal</th><th>Pesan & Kesan</th><th></th>
                            </thead>
                            <tbody id="isitabel">
                            </tbody>
                        </table>                        
                    </div>                    
                </div>
                <br>
<!--                <a href="logout.php" class="btn btn-default"><span class="glyphicon glyphicon-log-out"></span> Keluar</a>-->
        </div>
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/sweetalert.min.js" type="text/javascript"></script>
    <script> 
    //fungsi untuk muat isi tabel
    function muattabel(){
        $.ajax({
            url: 'tabeltamu.php',
            type: 'POST', // Send post data
            //data: 'type=curmonth',
            async: false,
            success: function(s){
                $('#isitabel').html(s);
            }
        });                    
    }
    function konfrimdel(id){
        var konfrim = confirm('Hapus?');
        if(konfrim==true){
            $.ajax({
                url: 'deletetamu.php',
                type: 'POST',
                data: 'id='+id,
                async: false,
                //cache: false,
                //contentType: false,
                //processData: false,
                success: function success(s) {
                    if(s=='ok'){
                        alert('Hapus berhasil');
                        muattabel();                        
                    }
                    else{
                        alert('Hapus gagal');                    }
                }
            });
        }
    }
    $(document).ready(function() {
        
        //aksi jika tombol simpan diklik
        $("#data").submit(function(e){
            e.preventDefault();
             //grab all form data
            var formData = new FormData(this);
            $.ajax({
                url: 'process.php',
                type: 'POST', // Send post data
                data: formData,
                //async: false,
                contentType: false,
                processData: false,                
                success: function(s){
                    if(s=='ok'){
                        swal("Terima Kasih", "", "success");
                        $('#nama').val('');
                        $('#instansi').val('');
                        $('#pesankesan').val('');
                        $('input[name="jeniskel"]').prop('checked', false);
                        $('input[name="asal"]').prop('checked', false);
                        muattabel();
                    }
                    else{
                        alert("Gagal disimpan");
                    }

                    //location.reload();
                }
            });
        });        
        
        muattabel();
    })
    </script>    
    </body>
</html>