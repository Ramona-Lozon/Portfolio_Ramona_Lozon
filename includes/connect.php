<?php
$host     = 'localhost';
$dbname   = 'portolio_case_file';
$username = 'root';
$password = '';

$connect = new mysqli('localhost','root','','portfolio_case_file');

if(!$connect) {
    die(json_encode(['status' => 'error', 'message' => 'Connection failed: ' . mysqli_connect_error()]));
}
?>