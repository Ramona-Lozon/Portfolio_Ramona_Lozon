<?php
require_once('includes/connect.php');
use Portfolio_Ramona_Lozon\Database;

$db = new Database();
$mediaItems = $db->query('SELECT id, Hero FROM media ORDER BY id ASC');
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
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="module" src="js/main.js"></script>
</head>

<body data-page="home">
    
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

<header>
    <nav>
        <div id="logo"><img src="images/logo-colour-noText.svg" alt="logo">
        <ul class="hamburger-dropdown">

        </ul>
    </div>
    </nav>
</header>

<section id="case-files-section">
    <h2>My Work</h2>
    <?php foreach ($mediaItems as $item): ?>
        <div class="case-file-hero">
            <a href="case_file.php?id=<?= $item['id'] ?>">
                <img src="images/<?= htmlspecialchars($item['Hero']) ?>" alt="case file">
            </a>
        </div>
    <?php endforeach; ?>
</section>

            <!-- skills -->
             <section id="skills-section">
            <div>
                <h3 class="text underline main-title invisible" id="skills">skills</h3>
            </div>

            <!-- logo and branding section -->
            <!-- <h3 class="text info_text invisible" id="brand-design">logo and brand design</h3> -->
            <h3 class="text info_text" id="brand-design">logo and brand design</h3>          
            <article class="skills-box">
            <h2>logo and branding skills</h2>
                <div class="icon-box" id="brandingSkills">
                    <div class="icon-card">
                        <img src="images/adobe-illustrator-logo.png" id="illustratorLogo" alt="Adobe illustrator Logo">
                        <span class="text">Adobe Illustrator</span>
                    </div>
                    
                    <div class="icon-card">
                        <img src="images/adobe_photoshop_logo.png" id="photoshopLogo" alt="Adobe Photoshop Logo">
                        <span class="text">Adobe Photoshop</span>
                    </div>

                    <div class="icon-card">
                        <img src="images/Adobe_After_Effects_logo.png" id="afterEffectsLogo" alt="Adobe After Effects Logo">
                        <span class="text">Adobe After Effects</span>
                    </div>

                    <div class="icon-card">
                        <img src="images/Cinema-4D-Logo.png" id="cinema4dLogo" alt="Cinema4d Logo">
                        <span class="text">Cinema 4D</span>
                    </div>

                    </div>
            </article>

            <!-- coding section -->
            <h3 class="text info_text" id="codingSkillsTitle">coding</h3>
            <article class="skills-box">
            <h2>coding skills</h2>
                <div class="icon-box" id="codingSkills">
                    <div class="icon-card">
                        <img src="images/html5.png" id="HTML5_logo" alt="HTML5 Logo">
                        <span class="text">HTML5</span>
                    </div>

                    <div class="icon-card">
                        <img src="images/css-3.svg" id="CSS3_logo" alt="CSS3 Logo">
                        <span class="text">CSS</span>
                    </div>

                    <div class="icon-card">
                        <img src="images/JavaScript-Logo.png" id="JS_logo" alt="Javascript logo">
                        <span class="text">Javascript</span>
                    </div>

                    <div class="icon-card">
                        <img src="images/PHP-logo.png" id="PHP_logo" alt="PHP logo">
                        <span class="text">PHP</span>
                    </div>

                    <div class="icon-card">
                        <img src="images/github-logo.png" id="GIT_logo" alt="Github logo">
                        <span class="text">Github</span>
                    </div>

                    <div class="icon-card">
                        <img src="images/Sass_Logo_Color.svg" id="SASS_logo" alt="SASS logo">
                        <span class="text">SASS</span>
                    </div>

                    <div class="icon-card">
                        <img src="images/greensock-logo.png" id="Greensock_logo" alt="Greensock logo">
                        <span class="text">Greensock</span>
                    </div>
                </div>
            </article>

            <!-- web design section -->
            <h3 class="text info_text" id="webDesignTitle">Web Design</h3>
            <article class="skills-box">
                <div class="icon-box" id="webDesignSkills">
            <h2>web design skills</h2>

                    <div class="icon-card">
                        <img src="images/Adobe_XD_Logo.png" id="xdLogo" alt="Adobe XD Logo">
                        <span class="text">Adobe XD</span>
                    </div>

                    <div class="icon-card">
                        <img src="images/Figma-logo.png" id="figmaLogo" alt="Figma Logo">
                        <span class="text">Figma</span>
                    </div>
                </div>
            </article>

            <!-- video editing -->
            <h3 class="text info_text" id="videoEditingTitle">Video Editing</h3>
            <article class="skills-box">
            <h2>Video Editing skills</h2>
                <div class="icon-box" id="videoEditingSkills">
                    <div class="icon-card">
                        <img src="images/Adobe_Premiere_logo.png" id="premierLogo" alt="Adobe Premier Logo">
                        <span class="text">Adobe Premier</span>
                    </div>

                    <div class="icon-card">
                        <img src="images/after-effects.svg" id="afterEffectsLogo2" alt="After Effects Logo">
                        <span class="text">Adobe After Effects</span>
                    </div>
                </div>
            </article>
        </section>

        <footer>
    <div class="top-button">
        <span class="page-link"><a class="top-link" href="#top">Top &uArr;</a></span>
    </div>
</footer>
</body>
</html>