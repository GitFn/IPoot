<?php
    error_reporting(0);
    ob_start();
    header('Content-type: text/html;charset=utf-8');
    header('Access-Control-Allow-Methods:GET');
    header("Access-Control-Allow-Origin: *");
    $conn = mysqli_connect("localhost","uesr", "passwd", "dbname", "3306");
    if($conn){
        mysqli_query($conn,'set names utf8mb4');
        date_default_timezone_set("PRC");
    }
    
?>