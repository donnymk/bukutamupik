<?php
session_save_path('/tmp');
session_start();
if(session_destroy()) // Menghapus Sessions
{
header("Location: login.php"); // Langsung mengarah ke Home index.php
}
?>