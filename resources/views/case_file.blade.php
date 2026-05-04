<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramona Lozon</title>
    @vite(['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'])
    <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
    <script>gsap.registerPlugin(ScrollTrigger);</script>
    <script type="module">import { fadeIn } from "./js/modules/fadeIn.js";fadeIn();</script>
</head>

<body data-page="case_file">

<header>
    <nav>
        <div class="logo-con"><img id="logo" img src="images/logo-colour-noText.svg" alt="logo">
            <div class="menu-con">
                <ul class="hamburger-dropdown">
                    <li class="hover-item"><a class="button" href="{{ route('home') }}">Home</a></li>
                    <li class="hover-item"><a class="button" href="{{ route('about') }}">About</a></li>
                    <li class="hover-item"><a class="button" href="{{ route('work') }}">Work</a></li>
                    <li class="hover-item"><a class="button" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <section id="case-file-section">
    <div>
        <h3 class="text main-title fadeIn" id="cf-main-title">
            Project Title
        </h3>
    </div>
    
    <div class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-prop">
            Proposition
        </p>
    </div>

    <div class="case-file-image fadeIn" id="cf-prop-ex">
        <img src="{{ asset('') }}" alt="proposition image">
    </div>

    <div class="case-file-text-con fadeIn">
        <div class="text info_text case-file-text" id="cf-prop-caption">
            Proposition Caption
    </div>
    </div>
    
    <div class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-deliverables">
            Deliverables
        </p>
    </div>

    <div class="case-file-image fadeIn" id="cf-work-ex">
        <img src="{{ asset('') }}" alt="work image">
    </div>

    <div class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-work-caption">
            Work Caption
        </p>
    </div>

<div class="case-file-image fadeIn" id="cf-media-image">
        <div id="player-container">
            <video muted class="video-player" controls preload="metadata" poster="images/logo.svg" id="video">
                <source src="video/<?= $product_ex ?>" type="video/mp4">
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
        </div>
</div>

    <div class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-prod-caption">
            Product Caption
        </p>
    </div>

    <div class="case-file-text-con fadeIn">
        <p class="text info_text case-file-text" id="cf-outcome">
            Outcome
        </p>
    </div>
    </section>
</main>
<footer></footer>
</body>
</html>