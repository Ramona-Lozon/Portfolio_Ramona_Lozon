<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramona's Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="sass/main.css">
</head>

<?php
    require_once('includes/connect.php');
    $query = 'SELECT * FROM case_file,media WHERE media.id = case_file.id AND media.id ='.$_GET['id'];
    $results = mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($results);
?>

<body>

    <section class="g-con">
    <header class="c-span-full 1-c-start-1 l-c-span-4 m-c-span-full c-span-full">

        <section class="desktop-sticky" id="greeting-section">
            <div id="greeting-title">
            <img src="images/logo-small.png"><h3 class="text ramona-title">Ramona Lozon</h3></div>

<div class="text subheader" id="intro-message">
    <span>Designer and Developer<br><br>I design brands, and build websites</span>
                <div class="hamburger-menu" id="menuIcon">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
            </div>

            <nav class="navMenu" id="navLinks">
            <ul class="nav-links">
                
                <!-- html link -->
            <!-- <li><a class="button" href="C:\Users\Ramona\Documents\GitHub\Portfolio_Ramona_Lozon\index.html">Home</a></li> -->

                <!-- localhost php link -->
            <li><a class="button" href="http://localhost/Portfolio_Ramona_Lozon/index.php">Home</a></li>
                </ul>
            </div>
    
                <div>
                    <ul class="icon-list">
                        <li class="icon" id="insta-icon">
                            <a href="https://www.instagram.com/lozonramona/">
                            <?xml version="1.0" encoding="UTF-8"?>
                                <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                  <defs>
                                    <style>
                                      .insta-1 {
                                        fill: #f9a45d;
                                      }
                                
                                      .insta-2 {
                                        stroke-width: 7px;
                                      }
                                
                                      .insta-2, .insta-3 {
                                        fill: none;
                                        stroke: #f9a45d;
                                        stroke-miterlimit: 10;
                                      }
                                
                                      .insta-4 {
                                        fill: #03252f;
                                      }
                                
                                      .insta-3 {
                                        stroke-width: 4px;
                                      }
                                    </style>
                                  </defs>
                                  <g>
                                    <path id="insta-fill" class="insta-4" d="M27.63,6.91h44.75c11.43,0,20.71,9.28,20.71,20.71v44.75c0,11.43-9.28,20.71-20.71,20.71H27.62c-11.43,0-20.71-9.28-20.71-20.71V27.63c0-11.43,9.28-20.71,20.71-20.71Z"/>
                                    <path class="insta-1 insta-line" d="M72.37,8.41c10.6,0,19.21,8.62,19.21,19.21v44.75c0,10.6-8.62,19.21-19.21,19.21H27.63c-10.6,0-19.21-8.62-19.21-19.21V27.63c0-10.6,8.62-19.21,19.21-19.21h44.75M72.37,5.41H27.63C15.36,5.41,5.41,15.36,5.41,27.63v44.75c0,12.27,9.95,22.21,22.21,22.21h44.75c12.27,0,22.21-9.95,22.21-22.21V27.63c0-12.27-9.95-22.21-22.21-22.21h0Z"/>
                                  </g>
                                  <rect class="insta-3 insta-line" x="35.32" y="35.32" width="29.37" height="29.37" rx="14.68" ry="14.68"/>
                                  <rect class="insta-2 insta-line" x="70.72" y="24.48" width="6" height="6" rx="3" ry="3"/></svg>
                                </a>
                            </li>
    
                        <li class="icon" id="git-icon">
                            <a href="https://github.com/Ramona-Lozon">
                                <?xml version="1.0" encoding="UTF-8"?>
                                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                    <defs>
                                        <style>
                                        .git-1 {
                                            fill: #03252f;
                                            fill-rule: evenodd;
                                        }
    
                                        .git-2 {
                                            fill: #f9a45d;
                                        }
                                        </style>
                                    </defs>
                                    <path id="git-fill" class="git-1" d="M64.54,96.5c-.24,0-.95,0-.95-.96,0-.54,0-1.48.02-2.73.02-2.54.06-6.38.06-10.79,0-3.73-.92-6.29-1.96-8,9.69-1.57,20.97-6.47,20.97-25.41,0-5.22-1.62-9.77-4.81-13.53.69-2.23,1.62-7.13-.8-13.25l-.26-.66-.68-.22c-.13-.04-.64-.18-1.53-.18-1.91,0-6.05.67-12.63,5.04-3.85-.99-7.96-1.51-11.94-1.51-4.03,0-8.04.51-11.94,1.51-6.57-4.37-10.72-5.04-12.63-5.04-.89,0-1.39.14-1.53.18l-.68.22-.26.66c-2.42,6.13-1.49,11.04-.79,13.27-3.19,3.85-4.81,8.39-4.81,13.52,0,19.08,11.24,23.92,20.91,25.43-.65,1.09-1.25,2.53-1.59,4.4-1.04.41-2.58.86-4.24.86-3.08,0-5.55-1.56-7.34-4.63-.1-.19-3.03-5.42-8.72-5.79h-.03c-1.03,0-3.19.19-3.7,1.85-.57,1.85,1.56,3.29,2.46,3.91l.11.07.12.05s2.74,1.38,4.64,6.34c.07.23,2.5,7.43,12.63,7.43h0c1.17,0,2.41-.1,3.69-.3.01,2.01.03,3.88.05,5.27.01.94.02,1.66.02,2.05,0,.96-.71.96-.95.96-.15,0-.31-.02-.49-.05C15.66,89.92,2.69,71.76,2.69,51.22,2.69,24.91,23.93,3.5,50.04,3.5c12.6,0,24.45,4.93,33.38,13.88,9,9.02,13.93,21.04,13.9,33.83,0,20.54-12.97,38.71-32.29,45.24-.17.03-.34.05-.48.05Z"/>
                                    <path id="git-line" class="git-2" d="M50.04,5c12.2,0,23.67,4.77,32.31,13.44,8.71,8.74,13.49,20.38,13.46,32.77,0,19.7-12.32,37.14-30.72,43.63,0-.52,0-1.2.02-2.02.02-2.54.06-6.38.06-10.81,0-2.87-.51-5.13-1.23-6.88,9.75-2.01,20.23-7.73,20.23-26.53,0-5.3-1.56-9.96-4.65-13.88.69-2.68,1.27-7.56-1.05-13.46l-.52-1.33-1.36-.43c-.3-.09-.94-.25-1.98-.25-2.46,0-6.66.88-12.9,4.92-3.78-.91-7.78-1.39-11.67-1.39-3.93,0-7.84.47-11.66,1.39-6.24-4.05-10.44-4.93-12.9-4.93-1.03,0-1.68.16-1.98.25l-1.36.43-.52,1.33c-2.33,5.91-1.74,10.8-1.05,13.48-3.05,3.96-4.66,8.72-4.66,13.86,0,19.89,12.22,25.01,20.18,26.59-.26.67-.48,1.37-.66,2.11-.83.26-1.86.49-2.95.49-2.54,0-4.51-1.27-6.04-3.88-.37-.66-3.68-6.14-9.93-6.55h-.1s-.1,0-.1,0c-2.65,0-4.5,1.06-5.06,2.91-.89,2.91,2.08,4.93,3.06,5.59l.12.13.28.11c.32.19,2.34,1.48,3.88,5.5.4,1.11,3.46,8.42,14.04,8.42.71,0,1.45-.03,2.21-.1.01,1.38.03,2.63.04,3.6,0,.52.01.96.02,1.33-18.4-6.48-30.72-23.93-30.72-43.62C4.19,25.73,24.76,5,50.04,5M50.04,2C23.03,2,1.19,24,1.19,51.22c0,21.76,13.99,40.17,33.41,46.69.31.06.6.09.87.09,1.78,0,2.45-1.32,2.45-2.45s-.08-5.05-.08-9.13c-1.94.42-3.66.6-5.19.6-9.15,0-11.23-6.47-11.23-6.47-2.18-5.7-5.42-7.17-5.42-7.17-4.45-3.02.32-3.02.32-3.02,4.93.33,7.52,5.05,7.52,5.05,2.44,4.2,5.73,5.38,8.64,5.38,2.29,0,4.35-.73,5.6-1.31.4-3.18,1.7-5.38,3.07-6.6-10.84-1.14-22.24-5.38-22.24-24.28,0-5.38,1.94-9.78,5.01-13.2-.49-1.22-2.18-6.27.49-13.04,0,0,.35-.11,1.07-.11,1.76,0,5.76.66,12.35,5.16,3.98-1.08,8.09-1.63,12.21-1.63,4.12,0,8.33.57,12.21,1.63,6.6-4.51,10.59-5.16,12.35-5.16.72,0,1.07.11,1.07.11,2.67,6.76.97,11.82.48,13.04,3.16,3.42,5.02,7.82,5.02,13.2,0,18.9-11.4,23.06-22.32,24.28,1.78,1.55,3.32,4.48,3.32,9.13,0,6.6-.08,11.9-.08,13.53,0,1.14.67,2.46,2.45,2.46.26,0,.55-.03.87-.09,19.41-6.52,33.41-24.93,33.41-46.69.08-27.22-21.84-49.22-48.77-49.22h0Z"/>
                                    </svg>
                            </a>
                        </li>
    
                        <li class="icon" id="link-icon">
                            <a href="#contact">
                                <?xml version="1.0" encoding="UTF-8"?>
                                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                    <defs>
                                        <style>
                                        .link-1 {
                                            fill: #231f20;
                                        }
    
                                        .link-2 {
                                            fill: #f9a45d;
                                        }
    
                                        .link-3 {
                                            fill: #03252f;
                                        }
                                        </style>
                                    </defs>
                                    <rect class="link-3 link-fill" x="5.58" y="5.58" width="88.83" height="88.83" rx="10.53" ry="10.53"/>
                                    <path class="link-1 link-fill" d="M16.16,5.58c-5.82,0-10.58,4.76-10.58,10.58v67.68c0,5.82,4.76,10.58,10.58,10.58h67.68c5.82,0,10.58-4.76,10.58-10.58V16.16c0-5.82-4.76-10.58-10.58-10.58H16.16ZM16.16,9.81h67.68c3.53,0,6.35,2.82,6.35,6.35v67.68c0,3.53-2.82,6.35-6.35,6.35H16.16c-3.53,0-6.35-2.82-6.35-6.35V16.16c0-3.53,2.82-6.35,6.35-6.35ZM26.73,20.41c-2.32,0-4.4.69-5.94,1.99s-2.49,3.24-2.49,5.32c0,3.95,3.43,7.03,7.78,7.33,0,0,0,0,0,0,.21.07.43.11.64.11,4.81,0,8.44-3.37,8.44-7.45,0-.04,0-.07,0-.11-.22-4.02-3.8-7.2-8.43-7.2ZM26.73,24.59c2.94,0,4.11,1.32,4.23,3.18-.03,1.81-1.15,3.21-4.23,3.21s-4.25-1.5-4.25-3.27c0-.88.32-1.55,1-2.12.68-.57,1.76-1.01,3.26-1.01ZM20.39,37.31c-1.17,0-2.11.95-2.12,2.12v40.19c0,1.17.95,2.11,2.12,2.12h12.69c1.17,0,2.11-.95,2.12-2.12v-40.19c0-1.17-.95-2.11-2.12-2.12h-12.69ZM39.42,37.31c-1.17,0-2.11.95-2.12,2.12v40.19c0,1.17.95,2.11,2.12,2.12h12.69c1.17,0,2.11-.95,2.12-2.12v-21.15c0-1.75.48-3.5,1.32-4.64s1.91-1.83,3.93-1.79c2.08.04,3.19.75,4.02,1.87.83,1.12,1.3,2.8,1.3,4.56v21.15c0,1.17.95,2.11,2.12,2.12h12.69c1.17,0,2.11-.95,2.12-2.12v-22.71c0-6.26-1.86-11.23-5.04-14.58s-7.6-5.01-12.28-5.01-7.83,1.49-10.18,3.01v-.9c0-1.17-.95-2.11-2.12-2.12h-12.69ZM22.5,41.54h8.46v35.96h-8.46v-35.96ZM41.54,41.54h8.46v3.3c0,1.17.95,2.12,2.12,2.11.66,0,1.29-.31,1.69-.84,0,0,3.32-4.57,10.6-4.57,3.71,0,6.89,1.23,9.21,3.68,2.32,2.45,3.87,6.23,3.87,11.67v20.6h-8.46v-19.04c0-2.47-.59-5.02-2.14-7.09s-4.14-3.52-7.34-3.57c-3.22-.06-5.86,1.42-7.41,3.52s-2.15,4.68-2.15,7.15v19.04h-8.46v-35.96Z"/>
                                    <path id="link-line" class="link-2" d="M16.16,93.42c-5.28,0-9.58-4.3-9.58-9.58V16.16c0-5.28,4.3-9.58,9.58-9.58h67.68c5.28,0,9.58,4.3,9.58,9.58v67.68c0,5.28-4.3,9.58-9.58,9.58H16.16ZM16.16,8.81c-4.05,0-7.35,3.29-7.35,7.34v67.68c0,4.05,3.29,7.34,7.35,7.34h67.68c4.05,0,7.35-3.29,7.35-7.34V16.16c0-4.05-3.29-7.34-7.35-7.34H16.16ZM66.92,80.73c-.61,0-1.11-.5-1.12-1.12v-21.15c0-2-.55-3.88-1.5-5.16-1.14-1.53-2.63-2.24-4.81-2.27h-.17c-2.05,0-3.46.68-4.58,2.2-.95,1.29-1.52,3.25-1.52,5.24v21.15c0,.62-.5,1.12-1.12,1.12h-12.69c-.61,0-1.12-.5-1.12-1.12v-40.19c0-.62.5-1.12,1.12-1.12h12.69c.61,0,1.12.5,1.12,1.12v2.73l1.54-1c2.92-1.89,6.17-2.85,9.64-2.85,4.58,0,8.69,1.67,11.56,4.69,3.12,3.29,4.76,8.09,4.76,13.89v22.71c0,.62-.5,1.12-1.12,1.12h-12.69ZM59.54,48.79c2.7.05,5.1,1.2,6.56,3.17,1.6,2.15,1.94,4.72,1.94,6.5v20.04h10.46v-21.6c0-5.3-1.4-9.46-4.15-12.36-2.48-2.62-5.91-4-9.94-4-7.7,0-11.27,4.78-11.41,4.98-.2.26-.53.43-.88.43-.62,0-1.12-.5-1.12-1.11v-4.3h-10.46v37.96h10.46v-20.04c0-1.78.34-4.37,1.95-6.56,1.46-1.98,3.8-3.11,6.42-3.11h.16ZM20.39,80.73c-.61,0-1.12-.5-1.12-1.12v-40.19c0-.62.5-1.12,1.12-1.12h12.69c.61,0,1.11.5,1.11,1.12v40.19c0,.62-.5,1.12-1.11,1.12h-12.69ZM21.5,78.5h10.46v-37.96h-10.46v37.96ZM26.74,34.17c-.08,0-.16-.01-.23-.03l-.1-.07-.26-.02c-3.91-.27-6.85-3-6.85-6.33,0-1.75.78-3.41,2.13-4.55,1.37-1.15,3.2-1.76,5.3-1.76,4.05,0,7.24,2.69,7.43,6.25,0,3.67-3.26,6.5-7.42,6.51ZM26.73,23.59c-1.56,0-2.95.44-3.9,1.24-.91.77-1.36,1.71-1.36,2.88,0,1.97,1.38,4.27,5.25,4.27,4.67,0,5.22-2.94,5.23-4.2-.11-1.62-.93-4.2-5.23-4.2Z"/>
                                    </svg>
                                </a>
                            </li>
                        
                        <div class="hidden"><a target="_blank" href="https://icons8.com/icon/447/linkedin">LinkedIn</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a></div>
                    </ul>
                </div>
            </nav>

        </section>
</header>

<main class="centered l-c-start-5 l-c-end-13 m-c-span-full c-span-full">
<?php echo '<div><h3 class="text main-title">'.$row['project'].'</h3></div>';?>
<?php echo '<div><p class="case-file-text">'.$row['proposition'].'</p></div>';?> 
<?php echo '<div class="case-file-image"><img src="images/'.$row['prop_ex'].'" alt="Proposition image"></div>'?>
<?php echo '<div><p class="case-file-text">'.$row['prop_caption'].'</p></div>';?>
<?php echo '<div><p class="case-file-text">'.$row['deliverables'].'</p></div>';?>
<?php echo '<div class="case-file-image"><img src="images/'.$row['work_ex'].'" alt="work image"></div>';?>
<?php echo '<div><p class="case-file-text">'.$row['work_caption'].'</p></div>';?>
<?php 
if ($row['id'] == 1 || $row['id'] == 2) {
    // Show video for row ID 1 and 2
    echo '<section id="player-container">
        <video class="video-player" controls preload="metadata" poster="images/placeholder.jpg">
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
    </section>';
} else if ($row['id'] == 3) {
    // Show image for row ID 3
    echo '<div class="case-file-image">
        <img src="images/'.$row['product_ex'].'" alt="Media Image" class="responsive-image">
    </div>';}?>
<?php echo '<div><p class="case-file-text">' .$row['product_caption'].'</p></div>'; ?>
<?php echo '<div><p class="case-file-text">' .$row['outcome'].'</p></div>'; ?>

<!-- <div><h3 class="text main-title" id="top">8Track Earbuds Site</h3></div>
<div><p class="case-file-text">This was a school project done at Fanshawe where the goal was to make a website promoting a brand of earbuds that we design. </p></div>
<div class="case-file-image"><img src="images/earbuds-sketches.png" alt="Proposition image"></div>
<div><p class="case-file-text">The first part of the design process was sketching out the earbuds and designing a logo and some branding options.</p></div>
<div><p class="case-file-text">we had to design and build the headphones ourselves, create all the branding and design the website.

    we used Cinema4D to make the headphones, and the adobe suite to make the advertising materials. The site was built using HTML/CSS+SASS and Javascript. the model viewer framework and Greensock library to animate the different features on the site. </p></div>
<div class="case-file-image"><img src="images/Earbuds-Retro-poster2.png" alt="work image"></div>
<div><p class="case-file-text">after the earbuds were modeled we were tasked with creating branding and promotional images for our product.</p></div>
<section id="player-container">
        <video class="video-player" controls preload="metadata" poster="images/placeholder.jpg">
            <source src="video/Lozon_ramona_earbuds_ad.mp4" type="video/mp4">
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
    </section>
<div><p class="case-file-text">This is a small video ad I made, the original animation was made into a scrolling based animation on the website.</p></div>
<div><p class="case-file-text">the site itself turned out great, the features all function quite well and give the site appeal. find the repo here:

    <a class="button case-file-link" href="https://github.com/Ramona-Lozon/Earbuds_site_ramona_lozon">8Track Earbuds</a></p></div> -->

    <div>
        <span class="page-link desk-top-button"><a class="top-link" href="#top">Top &uArr;</a></span>
    </div>
</main>
</section>

<footer>
    <div class="footer-icons">
        <ul class="icon-list">
            <li class="icon" id="insta-icon">
                <a href="https://www.instagram.com/lozonramona/">
                <?xml version="1.0" encoding="UTF-8"?>
                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                      <defs>
                        <style>
                          .insta-1 {
                            fill: #f9a45d;
                          }
                    
                          .insta-2 {
                            stroke-width: 7px;
                          }
                    
                          .insta-2, .insta-3 {
                            fill: none;
                            stroke: #f9a45d;
                            stroke-miterlimit: 10;
                          }
                    
                          .insta-4 {
                            fill: #03252f;
                          }
                    
                          .insta-3 {
                            stroke-width: 4px;
                          }
                        </style>
                      </defs>
                      <g>
                        <path id="insta-fill" class="insta-4" d="M27.63,6.91h44.75c11.43,0,20.71,9.28,20.71,20.71v44.75c0,11.43-9.28,20.71-20.71,20.71H27.62c-11.43,0-20.71-9.28-20.71-20.71V27.63c0-11.43,9.28-20.71,20.71-20.71Z"/>
                        <path class="insta-1 insta-line" d="M72.37,8.41c10.6,0,19.21,8.62,19.21,19.21v44.75c0,10.6-8.62,19.21-19.21,19.21H27.63c-10.6,0-19.21-8.62-19.21-19.21V27.63c0-10.6,8.62-19.21,19.21-19.21h44.75M72.37,5.41H27.63C15.36,5.41,5.41,15.36,5.41,27.63v44.75c0,12.27,9.95,22.21,22.21,22.21h44.75c12.27,0,22.21-9.95,22.21-22.21V27.63c0-12.27-9.95-22.21-22.21-22.21h0Z"/>
                      </g>
                      <rect class="insta-3 insta-line" x="35.32" y="35.32" width="29.37" height="29.37" rx="14.68" ry="14.68"/>
                      <rect class="insta-2 insta-line" x="70.72" y="24.48" width="6" height="6" rx="3" ry="3"/></svg>
                    </a>
                </li>

            <li class="icon" id="git-icon">
                <a href="https://github.com/Ramona-Lozon">
                    <?xml version="1.0" encoding="UTF-8"?>
                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <defs>
                            <style>
                            .git-1 {
                                fill: #03252f;
                                fill-rule: evenodd;
                            }

                            .git-2 {
                                fill: #f9a45d;
                            }
                            </style>
                        </defs>
                        <path id="git-fill" class="git-1" d="M64.54,96.5c-.24,0-.95,0-.95-.96,0-.54,0-1.48.02-2.73.02-2.54.06-6.38.06-10.79,0-3.73-.92-6.29-1.96-8,9.69-1.57,20.97-6.47,20.97-25.41,0-5.22-1.62-9.77-4.81-13.53.69-2.23,1.62-7.13-.8-13.25l-.26-.66-.68-.22c-.13-.04-.64-.18-1.53-.18-1.91,0-6.05.67-12.63,5.04-3.85-.99-7.96-1.51-11.94-1.51-4.03,0-8.04.51-11.94,1.51-6.57-4.37-10.72-5.04-12.63-5.04-.89,0-1.39.14-1.53.18l-.68.22-.26.66c-2.42,6.13-1.49,11.04-.79,13.27-3.19,3.85-4.81,8.39-4.81,13.52,0,19.08,11.24,23.92,20.91,25.43-.65,1.09-1.25,2.53-1.59,4.4-1.04.41-2.58.86-4.24.86-3.08,0-5.55-1.56-7.34-4.63-.1-.19-3.03-5.42-8.72-5.79h-.03c-1.03,0-3.19.19-3.7,1.85-.57,1.85,1.56,3.29,2.46,3.91l.11.07.12.05s2.74,1.38,4.64,6.34c.07.23,2.5,7.43,12.63,7.43h0c1.17,0,2.41-.1,3.69-.3.01,2.01.03,3.88.05,5.27.01.94.02,1.66.02,2.05,0,.96-.71.96-.95.96-.15,0-.31-.02-.49-.05C15.66,89.92,2.69,71.76,2.69,51.22,2.69,24.91,23.93,3.5,50.04,3.5c12.6,0,24.45,4.93,33.38,13.88,9,9.02,13.93,21.04,13.9,33.83,0,20.54-12.97,38.71-32.29,45.24-.17.03-.34.05-.48.05Z"/>
                        <path id="git-line" class="git-2" d="M50.04,5c12.2,0,23.67,4.77,32.31,13.44,8.71,8.74,13.49,20.38,13.46,32.77,0,19.7-12.32,37.14-30.72,43.63,0-.52,0-1.2.02-2.02.02-2.54.06-6.38.06-10.81,0-2.87-.51-5.13-1.23-6.88,9.75-2.01,20.23-7.73,20.23-26.53,0-5.3-1.56-9.96-4.65-13.88.69-2.68,1.27-7.56-1.05-13.46l-.52-1.33-1.36-.43c-.3-.09-.94-.25-1.98-.25-2.46,0-6.66.88-12.9,4.92-3.78-.91-7.78-1.39-11.67-1.39-3.93,0-7.84.47-11.66,1.39-6.24-4.05-10.44-4.93-12.9-4.93-1.03,0-1.68.16-1.98.25l-1.36.43-.52,1.33c-2.33,5.91-1.74,10.8-1.05,13.48-3.05,3.96-4.66,8.72-4.66,13.86,0,19.89,12.22,25.01,20.18,26.59-.26.67-.48,1.37-.66,2.11-.83.26-1.86.49-2.95.49-2.54,0-4.51-1.27-6.04-3.88-.37-.66-3.68-6.14-9.93-6.55h-.1s-.1,0-.1,0c-2.65,0-4.5,1.06-5.06,2.91-.89,2.91,2.08,4.93,3.06,5.59l.12.13.28.11c.32.19,2.34,1.48,3.88,5.5.4,1.11,3.46,8.42,14.04,8.42.71,0,1.45-.03,2.21-.1.01,1.38.03,2.63.04,3.6,0,.52.01.96.02,1.33-18.4-6.48-30.72-23.93-30.72-43.62C4.19,25.73,24.76,5,50.04,5M50.04,2C23.03,2,1.19,24,1.19,51.22c0,21.76,13.99,40.17,33.41,46.69.31.06.6.09.87.09,1.78,0,2.45-1.32,2.45-2.45s-.08-5.05-.08-9.13c-1.94.42-3.66.6-5.19.6-9.15,0-11.23-6.47-11.23-6.47-2.18-5.7-5.42-7.17-5.42-7.17-4.45-3.02.32-3.02.32-3.02,4.93.33,7.52,5.05,7.52,5.05,2.44,4.2,5.73,5.38,8.64,5.38,2.29,0,4.35-.73,5.6-1.31.4-3.18,1.7-5.38,3.07-6.6-10.84-1.14-22.24-5.38-22.24-24.28,0-5.38,1.94-9.78,5.01-13.2-.49-1.22-2.18-6.27.49-13.04,0,0,.35-.11,1.07-.11,1.76,0,5.76.66,12.35,5.16,3.98-1.08,8.09-1.63,12.21-1.63,4.12,0,8.33.57,12.21,1.63,6.6-4.51,10.59-5.16,12.35-5.16.72,0,1.07.11,1.07.11,2.67,6.76.97,11.82.48,13.04,3.16,3.42,5.02,7.82,5.02,13.2,0,18.9-11.4,23.06-22.32,24.28,1.78,1.55,3.32,4.48,3.32,9.13,0,6.6-.08,11.9-.08,13.53,0,1.14.67,2.46,2.45,2.46.26,0,.55-.03.87-.09,19.41-6.52,33.41-24.93,33.41-46.69.08-27.22-21.84-49.22-48.77-49.22h0Z"/>
                        </svg>
                </a>
            </li>

            <li class="icon" id="link-icon">
                <a href="#contact">
                    <?xml version="1.0" encoding="UTF-8"?>
                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <defs>
                            <style>
                            .link-1 {
                                fill: #231f20;
                            }

                            .link-2 {
                                fill: #f9a45d;
                            }

                            .link-3 {
                                fill: #03252f;
                            }
                            </style>
                        </defs>
                        <rect class="link-3 link-fill" x="5.58" y="5.58" width="88.83" height="88.83" rx="10.53" ry="10.53"/>
                        <path class="link-1 link-fill" d="M16.16,5.58c-5.82,0-10.58,4.76-10.58,10.58v67.68c0,5.82,4.76,10.58,10.58,10.58h67.68c5.82,0,10.58-4.76,10.58-10.58V16.16c0-5.82-4.76-10.58-10.58-10.58H16.16ZM16.16,9.81h67.68c3.53,0,6.35,2.82,6.35,6.35v67.68c0,3.53-2.82,6.35-6.35,6.35H16.16c-3.53,0-6.35-2.82-6.35-6.35V16.16c0-3.53,2.82-6.35,6.35-6.35ZM26.73,20.41c-2.32,0-4.4.69-5.94,1.99s-2.49,3.24-2.49,5.32c0,3.95,3.43,7.03,7.78,7.33,0,0,0,0,0,0,.21.07.43.11.64.11,4.81,0,8.44-3.37,8.44-7.45,0-.04,0-.07,0-.11-.22-4.02-3.8-7.2-8.43-7.2ZM26.73,24.59c2.94,0,4.11,1.32,4.23,3.18-.03,1.81-1.15,3.21-4.23,3.21s-4.25-1.5-4.25-3.27c0-.88.32-1.55,1-2.12.68-.57,1.76-1.01,3.26-1.01ZM20.39,37.31c-1.17,0-2.11.95-2.12,2.12v40.19c0,1.17.95,2.11,2.12,2.12h12.69c1.17,0,2.11-.95,2.12-2.12v-40.19c0-1.17-.95-2.11-2.12-2.12h-12.69ZM39.42,37.31c-1.17,0-2.11.95-2.12,2.12v40.19c0,1.17.95,2.11,2.12,2.12h12.69c1.17,0,2.11-.95,2.12-2.12v-21.15c0-1.75.48-3.5,1.32-4.64s1.91-1.83,3.93-1.79c2.08.04,3.19.75,4.02,1.87.83,1.12,1.3,2.8,1.3,4.56v21.15c0,1.17.95,2.11,2.12,2.12h12.69c1.17,0,2.11-.95,2.12-2.12v-22.71c0-6.26-1.86-11.23-5.04-14.58s-7.6-5.01-12.28-5.01-7.83,1.49-10.18,3.01v-.9c0-1.17-.95-2.11-2.12-2.12h-12.69ZM22.5,41.54h8.46v35.96h-8.46v-35.96ZM41.54,41.54h8.46v3.3c0,1.17.95,2.12,2.12,2.11.66,0,1.29-.31,1.69-.84,0,0,3.32-4.57,10.6-4.57,3.71,0,6.89,1.23,9.21,3.68,2.32,2.45,3.87,6.23,3.87,11.67v20.6h-8.46v-19.04c0-2.47-.59-5.02-2.14-7.09s-4.14-3.52-7.34-3.57c-3.22-.06-5.86,1.42-7.41,3.52s-2.15,4.68-2.15,7.15v19.04h-8.46v-35.96Z"/>
                        <path id="link-line" class="link-2" d="M16.16,93.42c-5.28,0-9.58-4.3-9.58-9.58V16.16c0-5.28,4.3-9.58,9.58-9.58h67.68c5.28,0,9.58,4.3,9.58,9.58v67.68c0,5.28-4.3,9.58-9.58,9.58H16.16ZM16.16,8.81c-4.05,0-7.35,3.29-7.35,7.34v67.68c0,4.05,3.29,7.34,7.35,7.34h67.68c4.05,0,7.35-3.29,7.35-7.34V16.16c0-4.05-3.29-7.34-7.35-7.34H16.16ZM66.92,80.73c-.61,0-1.11-.5-1.12-1.12v-21.15c0-2-.55-3.88-1.5-5.16-1.14-1.53-2.63-2.24-4.81-2.27h-.17c-2.05,0-3.46.68-4.58,2.2-.95,1.29-1.52,3.25-1.52,5.24v21.15c0,.62-.5,1.12-1.12,1.12h-12.69c-.61,0-1.12-.5-1.12-1.12v-40.19c0-.62.5-1.12,1.12-1.12h12.69c.61,0,1.12.5,1.12,1.12v2.73l1.54-1c2.92-1.89,6.17-2.85,9.64-2.85,4.58,0,8.69,1.67,11.56,4.69,3.12,3.29,4.76,8.09,4.76,13.89v22.71c0,.62-.5,1.12-1.12,1.12h-12.69ZM59.54,48.79c2.7.05,5.1,1.2,6.56,3.17,1.6,2.15,1.94,4.72,1.94,6.5v20.04h10.46v-21.6c0-5.3-1.4-9.46-4.15-12.36-2.48-2.62-5.91-4-9.94-4-7.7,0-11.27,4.78-11.41,4.98-.2.26-.53.43-.88.43-.62,0-1.12-.5-1.12-1.11v-4.3h-10.46v37.96h10.46v-20.04c0-1.78.34-4.37,1.95-6.56,1.46-1.98,3.8-3.11,6.42-3.11h.16ZM20.39,80.73c-.61,0-1.12-.5-1.12-1.12v-40.19c0-.62.5-1.12,1.12-1.12h12.69c.61,0,1.11.5,1.11,1.12v40.19c0,.62-.5,1.12-1.11,1.12h-12.69ZM21.5,78.5h10.46v-37.96h-10.46v37.96ZM26.74,34.17c-.08,0-.16-.01-.23-.03l-.1-.07-.26-.02c-3.91-.27-6.85-3-6.85-6.33,0-1.75.78-3.41,2.13-4.55,1.37-1.15,3.2-1.76,5.3-1.76,4.05,0,7.24,2.69,7.43,6.25,0,3.67-3.26,6.5-7.42,6.51ZM26.73,23.59c-1.56,0-2.95.44-3.9,1.24-.91.77-1.36,1.71-1.36,2.88,0,1.97,1.38,4.27,5.25,4.27,4.67,0,5.22-2.94,5.23-4.2-.11-1.62-.93-4.2-5.23-4.2Z"/>
                        </svg>
                    </a>
                </li>
            
            <div class="hidden"><a target="_blank" href="https://icons8.com/icon/447/linkedin">LinkedIn</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a></div>
        </ul>
    </div>
    <div class="top-button">
        <span class="page-link"><a class="top-link" href="#top">Top &uArr;</a></span>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>