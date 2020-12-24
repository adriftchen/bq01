<?php
session_start();
unset($_SESSION['login']);

//沒include，直接用header
//header()前不可echo東西
header('location:../index.php?do=login');

?>