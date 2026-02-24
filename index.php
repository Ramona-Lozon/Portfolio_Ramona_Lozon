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

<?php require_once('includes/connect.php');
$query = 'SELECT media.id AS media, Hero FROM media ORDER BY media.id ASC';
$results = mysqli_query($connect,$query);?>

<body data-page="home">

<header>
    <nav>
        <div id="logo"><img src="images/logo-colour-noText.svg" alt="logo">
                    <!-- mobile hamburger menu -->
        <!-- <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div> -->

        <ul class="hamburger-dropdown">
            <li class="hover-item"><a class="button" href="work.php">Work</a></li>
            <li class="hover-item"><a class="button" href="about.html">About</a></li>
            <li class="hover-item"><a class="button" href="contact.html">Contact</a></li>
        </ul>
        </div>
    </nav>
</header>

<main>
    <section id="hero-section"><section>
</main>

</body>
</html>