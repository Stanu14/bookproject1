<?php
session_start();
// unset($_SESSION['admin']);
session_unset();
header('location:login.php');










?>