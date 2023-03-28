<?php 
//session_save_path('/tmp');
session_start();
include "plugins/config.php";

$username_login=$_POST['username'];
$password_login=$_POST['password'];


    // Mencegah MySQL injection
    $username = stripslashes($username_login);
    $password = stripslashes($password_login);
    $username = mysqli_real_escape_string($con, $username_login);
    $password = mysqli_real_escape_string($con, $password_login);

    // SQL query untuk memeriksa apakah username terdapat di database?
    $query_cek_username = mysqli_query($con,"SELECT pengguna, sandi FROM admin WHERE pengguna='$username_login'");

    if(mysqli_num_rows($query_cek_username)!=0){
        $cocok=mysqli_fetch_array($query_cek_username);
        $password_database=$cocok['sandi'];

        if ($password_database == crypt($password_login ,$password_database)){
            $_SESSION['admin'] = $username_login;
		    //$_SESSION['password'] = $password;
            echo '<script>
            window.location.assign("./")
            </script>';
        }
        else{
            echo '<script>
            alert("Username atau password salah.");
            window.location.assign("login.php")
            </script>';
        }
    }
    else{
        echo '<script>
            alert("Username atau password salah.");
            window.location.assign("login.php")
            </script>';
    }    

?>