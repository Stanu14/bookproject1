<?php
$con = mysqli_connect("localhost", "root", "", "project");

if (!$con) {
    error_log("Database connection failed: " . mysqli_connect_error());
}
?>