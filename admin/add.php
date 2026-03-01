<?php

require_once 'auth.php';

spl_autoload_register(function ($class) {
    $class = str_replace('Portfolio_Ramona_Lozon\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows
    
    require_once $filepath;
});
require_once '../includes/scripts/add-case-file.php';
use Portfolio_Ramona_Lozon\database;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramona Lozon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/main.css">
    <script type="module" src="../js/main.js"></script>
</head>

<header>
    <nav>
        <div class="logo-con">
        <img id="logo" img src="../images/logo-colour-noText.svg" alt="logo">
        <div class="menu-con">
            <ul class="hamburger-dropdown">
                    <li class="hover-item"><a class="button" href="../index.html">Home</a></li>
                    <li class="hover-item"><a class="button" href="dashboard.php">Dashboard</a></li>
                    <li class="hover-item"><a class="button" href="../includes/scripts/logout.php">Log Out</a></li>
                </ul>
        </div>
        </div>
    </nav>
</header>

<body data-page="dashboard">

<section class="dash-project-list">
<h3 class="text main-title"> Add to Case Files </h3>

<div class="add-text"><p class="text info_text">Add more entries to the Work page here, the form fill boxes are arranged in the order 
that they will appear on the page. when adding image files, apply the image name exactly 
and upload the image to the images folder from the file manager</p></div>

 <form class="input-form" id="addForm" method="POST" action="../includes/scripts/add-case-file.php">

                <input  class="form-box-dash"
                        type="text" 
                        name="hero" 
                        id="heroImage" 
                        placeholder="Hero Image">
                <br>
                <br>
                <input  class="form-box-dash" 
                        type="text" 
                        name="project" 
                        id="projectBox" 
                        placeholder="project">
                <br>
                <br>
                <input  class="form-box-dash" 
                        type="text" 
                        name="proposition" 
                        id="propBox" 
                        placeholder="proposition">
                <br>
                <br>
                <input  class="form-box-dash"
                        type="text" 
                        name="prop_ex" 
                        id="propImage" 
                        placeholder="Proposition Image">
                <br>
                <br>
                <input  class="form-box-dash" 
                        type="text" 
                        name="prop_caption" 
                        id="propCaption" 
                        placeholder="Proposition Image Caption">
                <br>
                <br>
                <input 
                        class="form-box-dash" 
                        type="text" 
                        name="deliverables" 
                        id="delivBox" 
                        placeholder="deliverables">
                <br>
                <br>
                <input  class="form-box-dash" 
                        type="text" 
                        name="work_ex" 
                        id="workImage" 
                        placeholder="Work Image">
                <br>
                <br>
                <input  class="form-box-dash"
                        type="text" 
                        name="work_caption" 
                        id="workCaption" 
                        placeholder="Work Image Caption">
                <br>
                <br>
                <input  class="form-box-dash" 
                        type="text" 
                        name="product_ex" 
                        id="prodImage" 
                        placeholder="Product Image">
                <br>
                <br>
                <input  class="form-box-dash" 
                        type="text" 
                        name="product_caption" 
                        id="prodCaption" 
                        placeholder="Product Iamge Caption">
                <br>
                <br>
                <input 
                        class="form-box-dash" 
                        type="text" 
                        name="outcome" 
                        id="outcome" 
                        placeholder="outcome">

                <div id="feedback"></div>

                <input  class="form-box-dash"
                        id="send-button" 
                        type="submit" 
                        value="Submit">
            </form>

            <footer></footer>
</body>
</html>