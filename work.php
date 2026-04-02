<?php

use Portfolio_Ramona_Lozon\database;

spl_autoload_register(function ($class) {
    $class = str_replace('Portfolio_Ramona_Lozon\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for mac & windows
    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';
    $filepath = str_replace('/', DIRECTORY_SEPARATOR, $filepath); #only required for windows

    require_once $filepath;
});

ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramona Lozon</title>
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
    <script>gsap.registerPlugin(ScrollTrigger);</script>
    <script type="module">import { fadeIn } from "./js/modules/fadeIn.js";fadeIn();</script>
    <script type="module" src="js/main.js"></script>
</head>

<body data-page="work">
    
<header>
    <nav>
        <div class="logo-con"><img id="logo" img src="images/logo-colour-noText.svg" alt="logo">
            <div class="menu-con">
                <ul class="hamburger-dropdown">
            <li class="hover-item"><a class="button" href="index.html">Home</a></li>
            <li class="hover-item"><a class="button" href="about.html">About</a></li>
            <li class="hover-item"><a class="button" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
<section id="work-intro-section">
    <div><h3 class="text main-title" id="work-intro-title fadeIn">Take a look at my work!</h3></div>
</section>

<section id="case-files-section">
    <?php
    $db = new database;
    $db = new Portfolio_Ramona_Lozon\database;
    $results = $db->query('SELECT * FROM case_file;');
    $results = $db->query('SELECT case_file.id, case_file.project, media.Hero FROM case_file JOIN media ON media.id = case_file.id');

foreach ($results as $project): ?>

    <div class="case-file-hero">

        <h3 class="case-file-title text main-title fadeIn"><?= $project['project'] ?></h3>

        <a class="case-file-hero-image fadeIn" href="case_file.php?id=<?= $project['id'] ?>">
            <img src="images/<?= $project['Hero'] ?>" alt="case file">
        </a>
    </div>

<?php endforeach; ?>
</section>
</main>
<footer></footer>
</body>
</html>