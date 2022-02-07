<?php 
session_start() ;
unset($_SESSION['authenticated'] ) ;
unset($_SESSION['role'] ) ;
unset($_SESSION['username'] ) ;

header('Location: login.php');
?>