<?php

require_once 'auth.php';

spl_autoload_register(function ($class) {
    $class = str_replace('Portfolio_Ramona_Lozon\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows
    
    require_once $filepath;
});

use Portfolio_Ramona_Lozon\Database;
$database = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

$deliverables = $_POST['deliverables'];

if ($deliverables == null || $deliverables == '') {
    echo "deliverables is required!";
    exit(1);
}

$outcome = $_POST['outcome'];

if ($outcome == null || $outcome == '') {
    echo "Outcome is required!";
    exit(1);
}
$database->execute('INSERT INTO case_file
    (project, proposition, deliverables, outcome)
    VALUES (:project, :proposition, :deliverables, :outcome);',
    [
        'project' => $project,
        'proposition' => $proposition,
        'deliverables' => $deliverables, 
        'outcome' => $outcome
    ]
);

header('location: dashboard.php');
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
                    <li class="hover-item"><a class="button" href="../work.php">Work</a></li>
                    <li class="hover-item"><a class="button" href="../about.html">About</a></li>
                    <li class="hover-item"><a class="button" href="../contact.html">Contact</a></li>
                </ul>
        </div>
        </div>
    </nav>
</header>

<body data-page="dashboard">

 <form class="input-form" id="addForm" method="POST" action="dashboard.php">

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
                <input 
                        class="form-box" 
                        type="text" 
                        name="deliverables" 
                        id="delivBox" 
                        placeholder="deliverables">

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