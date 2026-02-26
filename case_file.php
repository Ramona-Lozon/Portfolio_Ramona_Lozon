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

<?php
    require_once('includes/connect.php');
    $config = getConfig();
    $dsn = 'mysql:host=localhost;dbname=Portfolio_Ramona_Lozon;';
    $connection = new PDO($dsn, 'root', '');


    $id = $_GET['id'];
    $singlePStmt = $connection->prepare(
        'SELECT * FROM case_file, media WHERE media.id = case_file.id = :id;'
    );
    $singlePStmt->bindParam(':id', $id, PDO::PARAM_INT);
    $singlePStmt->execute();
    $singleProjectResult = $singlePStmt->fetch(PDO::FETCH_ASSOC);

    var_dump($singleProjectResult);

    $query = 'SELECT * FROM case_file,media WHERE media.id = case_file.id AND media.id ='.$_GET['id'];
    $results = mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($results);
?>

<body data-page="caseFile">

<header>
    <nav>
        <div id="logo"><img src="images/logo-small.png" alt="logo"></div>
        
        <div id="home-button">
            <a class="button" href="http://localhost/Portfolio_Ramona_Lozon/index.php">Home</a>
        </div>
    </nav>
</header>

<main class="centered l-c-start-5 l-c-end-13 m-c-span-full c-span-full">
<?php echo '<div><h3 class="text main-title" id="cf-main-title">'.$row['project'].'</h3></div>';?>
<?php echo '<div><p class="case-file-text" id="cf-prop">'.$row['proposition'].'</p></div>';?> 
<?php echo '<div class="case-file-image" id="cf-prop-ex"><img src="images/'.$row['prop_ex'].'" alt="Proposition image"></div>'?>
<?php echo '<div><p class="case-file-text" id="cf-prop-caption">'.$row['prop_caption'].'</p></div>';?>
<?php echo '<div><p class="case-file-text" id="cf-deliverables">'.$row['deliverables'].'</p></div>';?>
<?php echo '<div class="case-file-image" id="cf-work-ex"><img src="images/'.$row['work_ex'].'" alt="work image"></div>';?>
<?php echo '<div><p class="case-file-text" id="cf-work-caption">'.$row['work_caption'].'</p></div>';?>
<?php 
if ($row['id'] == 1 || $row['id'] == 2) {
    echo '<section class="" id="cf-media-3"><div id="player-container">
        <video class="video-player" controls preload="metadata" poster="images/logo-small.png">
            <source src="video/'.$row['product_ex'].'" type="video/mp4">
            <p>Your browser does not support the video tag.</p>
        </video>
        <div class="video-controls hidden" id="video-controls">
            <button id="play-button" class="play-button"><i class="fa fa-play-circle-o video-button"></i></button>
            <button id="pause-button" class="pause-button"><i class="fa fa-pause-circle-o video-button"></i></button>
            <button id="stop-button" class="stop-button"><i class="fa fa-stop-circle-o video-button"></i></button>
            <i class="fa fa-volume-up"></i>
            <input type="range" id="change-vol" step="0.05" min="0" max="1" value="1">
            <button id="full-screen"><i class="fa fa-arrows-alt"></i></button>
        </div>
    </div></section>';
} else if ($row['id'] == 3) {
    echo '<div class="case-file-image " id="cf-media-image">
        <img src="images/'.$row['product_ex'].'" alt="Media Image" class="responsive-image">
    </div>';}?>
<?php echo '<div><p class="case-file-text" id="cf-prod-caption">' .$row['product_caption'].'</p></div>'; ?>
<?php echo '<div><p class="case-file-text" id="cf-outcome">' .$row['outcome'].'</p></div>'; ?>

</main>
</body>
</html>