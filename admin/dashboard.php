<?php
require_once 'auth.php';
use Portfolio_Ramona_Lozon\database;

spl_autoload_register(function ($class) {
    $class = str_replace('Portfolio_Ramona_Lozon\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows
    
    require_once $filepath;
});

$db = new database();
$projects = $db->query('SELECT case_file.id, case_file.project, media.Hero FROM case_file JOIN media ON media.id = case_file.id ORDER BY case_file.id ASC');
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
                    <li class="hover-item"><a class="button" href="add.php">Add Files</a></li>
                    <li class="hover-item"><a class="button" href="../includes/scripts/logout.php">Log Out</a></li>
                </ul>
        </div>
        </div>
    </nav>
</header>

<body data-page="dashboard">
<main>
    <h2>Projects</h2>

    <!-- dashboard project array -->
        <section>
            <?php foreach ($projects as $project): ?>

                <div id="dash-project-id">
                    <h3 class="text main-title">Project ID: <?= $project['id'] ?></h3>
                </div>

                <div id="dash-project-title">
                    <h3 class="text main-title">Project: <?= $project['project'] ?></h3>
                </div>
                
                <div id="dash-project-hero">
                    <img src="../images/<?= $project['Hero'] ?>" alt="hero">
                </div>
                
                <div class="button" id="dash-edit-button">
                    <a href="editor.php?id=<?= $project['id'] ?>">Edit</a>
                </div>

                <div class="button" id="dash-delete-button">
                    <a href="../includes/scripts/delete.php?id=<?= $project['id'] ?>">Delete</a>
                </div>

            <?php endforeach; ?>
        </section>
    </main>
<footer></footer>    

</body>

</html>