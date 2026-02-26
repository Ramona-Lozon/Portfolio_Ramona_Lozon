<?php

//loads the auth page to check if user is logged in
require_once 'auth.php';
require_once '../includes/connect';
use Portfolio_Ramona_Lozon\Database;
//create a new instance of the database and calls it $database
$database - new Database();
//error handling
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
}
