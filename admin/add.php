<?php

require_once 'auth.php';

spl_autoload_register(function ($class) {
    $class = str_replace('Portfolio_Ramona_Lozon\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows
    
    require_once $filepath;
});

use Portfolio_Ramona_Lozon\database;
$database = new database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$hero = $_POST['hero'];
if ($hero == null || $hero == '') {
    echo "Hero image is required!";
    exit(1);
}

$project = $_POST['project'];
if ($project == null || $project == '') {
    echo "Project is required!";
    exit(1);
}

$proposition = $_POST['proposition'];
if ($proposition == null || $proposition == '') {
    echo "proposition is required!";
    exit(1);
}

$prop_ex = $_POST['prop_ex'];
if ($prop_ex == null || $prop_ex == '') {
    echo "proposition is required!";
    exit(1);
}

$prop_caption = $_POST['prop_caption'];
if ($prop_caption == null || $prop_caption == '') {
    echo "proposition is required!";
    exit(1);
}

$deliverables = $_POST['deliverables'];
if ($deliverables == null || $deliverables == '') {
    echo "deliverables is required!";
    exit(1);
}

$work_ex = $_POST['work_ex'];
if ($work_ex == null || $work_ex == '') {
    echo "proposition is required!";
    exit(1);
}

$work_caption = $_POST['work_caption'];
if ($work_caption == null || $work_caption == '') {
    echo "proposition is required!";
    exit(1);
}

$product_ex = $_POST['product_ex'];
if ($product_ex == null || $product_ex == '') {
    echo "proposition is required!";
    exit(1);
}

$product_caption = $_POST['product_caption'];
if ($product_caption == null || $product_caption == '') {
    echo "proposition is required!";
    exit(1);
}

$outcome = $_POST['outcome'];
if ($outcome == null || $outcome == '') {
    echo "Outcome is required!";
    exit(1);
}
 $database->execute('INSERT INTO case_file 
 (project, proposition, deliverables, outcome) 
VALUES (:project, :proposition, :deliverables, :outcome)',
        [
            'project'      => $project,
            'proposition'  => $proposition,
            'deliverables' => $deliverables,
            'outcome'      => $outcome
        ]
    );

    // insert into media table
    $database->execute('INSERT INTO media 
    (Hero, prop_ex, prop_caption, work_ex, work_caption, product_ex, product_caption) 
VALUES (:hero, :prop_ex, :prop_caption, :work_ex, :work_caption, :product_ex, :product_caption)',
        [
            'hero'            => $hero,
            'prop_ex'         => $prop_ex,
            'prop_caption'    => $prop_caption,
            'work_ex'         => $work_ex,
            'work_caption'    => $work_caption,
            'product_ex'      => $product_ex,
            'product_caption' => $product_caption
        ]
    );

header('location: add.php');
exit;
}
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
                    <li class="hover-item"><a class="button" href="edit.php">Edit</a></li>
                </ul>
        </div>
        </div>
    </nav>
</header>

<body data-page="dashboard">

<h3 class="text main-title"> Add to Case Files </h3>

<div><p class="text info_text">Add more entries to the Work page here, the form fill boxes are arranged in the order 
that they will appear on the page. when adding image files, apply the image name exactly 
and upload the image to the images folder from the file manager</p></div>

 <form class="input-form" id="addForm" method="POST" action="dashboard.php">

                <input  class="form-box" 
                        type="text" 
                        name="hero" 
                        id="heroImage" 
                        placeholder="Hero Image">
                <br>
                <br>
                <input  class="form-box" 
                        type="text" 
                        name="project" 
                        id="projectBox" 
                        placeholder="project">
                <br>
                <br>
                <input  class="form-box" 
                        type="text" 
                        name="proposition" 
                        id="propBox" 
                        placeholder="proposition">
                <br>
                <br>
                <input  class="form-box" 
                        type="text" 
                        name="prop_ex" 
                        id="propImage" 
                        placeholder="Proposition Image">
                <br>
                <br>
                <input  class="form-box" 
                        type="text" 
                        name="prop_caption" 
                        id="propCaption" 
                        placeholder="Proposition Image Caption">
                <br>
                <br>
                <input 
                        class="form-box" 
                        type="text" 
                        name="deliverables" 
                        id="delivBox" 
                        placeholder="deliverables">
                <br>
                <br>
                <input  class="form-box" 
                        type="text" 
                        name="work_ex" 
                        id="workImage" 
                        placeholder="Work Image">
                <br>
                <br>
                <input  class="form-box" 
                        type="text" 
                        name="work_caption" 
                        id="workCaption" 
                        placeholder="Work Image Caption">
                <br>
                <br>
                <input  class="form-box" 
                        type="text" 
                        name="product_ex" 
                        id="prodImage" 
                        placeholder="Product Image">
                <br>
                <br>
                <input  class="form-box" 
                        type="text" 
                        name="product_caption" 
                        id="prodCaption" 
                        placeholder="Product Iamge Caption">
                <br>
                <br>
                <input 
                        class="form-box" 
                        type="text" 
                        name="outcome" 
                        id="outcome" 
                        placeholder="outcome">

                <div id="feedback"></div>

                <input  class="button" 
                        id="send-button" 
                        type="submit" 
                        value="Submit">
            </form>

</body>
</html>