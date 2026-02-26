<?php
require_once('includes/connect.php');
use Portfolio_Ramona_Lozon\Database;
$db = new Database();
$id = $_GET['id'] ?? null;

if (!$id) {
    die('no project id provided.');
}

$results = $db->query(
    'SELECT case_file.id, case_file.project, case_file.proposition, case_file.deliverables, case_file.outcome, media.Hero, media.prop_ex, media.prop_caption, media.work_ex, media.work_caption, media.product_ex, media.product_caption FROM case_file JOIN media ON media.id = case_file.id WHERE case_file.id = :id',
    ['id' => $id]
);

$row = $results[0] ?? null;

if (!$row) {
    die('Project not found');
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
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="module" src="js/main.js"></script>
</head>

<body data-page="caseFile">

<header>
    <nav>
        <div class="logo-con"><img id="logo" img src="images/logo-colour-noText.svg" alt="logo">
            <div class="menu-con">
                <ul class="hamburger-dropdown">
            <li class="hover-item"><a class="button" href="index.html">Home</a></li>
            <li class="hover-item"><a class="button" href="work.php">Work</a></li>
            <li class="hover-item"><a class="button" href="about.html">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <div>
        <h3 class="text main-title" id="cf-main-title">
            <?= htmlspecialchars($row['project']) ?>
        </h3>
    </div>
    
    <div>
        <p class="case-file-text" id="cf-prop">
            <?= htmlspecialchars($row['proposition']) ?>
        </p>
    </div>

    <div class="case-file-image" id="cf-prop-ex">
        <img src="images/<?= htmlspecialchars($row['prop_ex']) ?>" alt="proposition image">
    </div>

    <div>
        <p class="case-file-text" id="cf-prop-caption">
            <?= htmlspecialchars($row['prop_caption']) ?>
        </p>
    </div>'
    
    <div>
        <p class="case-file-text" id="cf-deliverables">
            <?= htmlspecialchars($row['deliverables']) ?>
        </p>
    </div>

    <div class="case-file-image" id="cf-work-ex">
        <img src="images/<?= htmlspecialchars($row['work_ex']) ?>" alt="work image">
    </div>

    <div>
        <p class="case-file-text" id="cf-work-caption">
            <?= htmlspecialchars($row['work_caption']) ?>
        </p>
    </div>

    '<div class="case-file-image" id="cf-media-image">
        <img src="images/<?= htmlspecialchars($row['prop_ex']) ?>" alt="Media Image" class="responsive-image">
    </div>

    <div>
        <p class="case-file-text" id="cf-prod-caption">
            <?= htmlspecialchars($row['product_caption']) ?>
        </p>
    </div>

    <div>
        <p class="case-file-text" id="cf-outcome">
            <?= htmlspecialchars($row['outcome']) ?>
        </p>
    </div>
</main>

</body>
</html>