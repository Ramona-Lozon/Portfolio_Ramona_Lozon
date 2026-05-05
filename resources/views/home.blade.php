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
    <script src="https://unpkg.com/thpace"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
    <script>gsap.registerPlugin(ScrollTrigger);</script>
    <script type="module">import { fadeIn } from "./js/modules/fadeIn.js";fadeIn();</script>
</head>

<body data-page="home">

<main>
    <section id="hero-section">
        
        <article id="index-name-box">
            <div class="text title-text fadeIn" id="index-ramona">Ramona Lozon</div>
            <h3 class="text subtitle-text fadeIn">Junior Web Developer and Designer</h3>      


        <article class="nav-box">

            <div class="index-nav">
                <a class="text subtitle-text hover-item fadeIn" href="{{ route('about') }}">// Who am I?</a>
                <a class="text subtitle-text hover-item fadeIn" href="{{ route('work') }}">// My Work</a>
            </div>
            
            <div id="socials-box">
                <div id="linkedin-box">
                    <a id="linked-in" href="https://www.linkedin.com/in/ramona-lozon-21536a321/"></a>
                </div>
                <div id="github-box">
                    <a id="git" href="https://github.com/Ramona-Lozon"></a>
                </div>
                <div id="insta-box">
                    <a id="insta" href="https://www.instagram.com/lozonramona?igsh=eThzZTRoMnl4bzhn"></a>
                </div>
            </div>

            <div class="index-nav">
                <a class="text subtitle-text hover-item fadeIn" href="{{ route('contact') }}">Work With Me <span class="blink">&#8658;</span></a>
            </div>

        </article>
    </article>
    </section>
</main>


</body>
</html>