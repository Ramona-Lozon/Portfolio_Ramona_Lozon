<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

        <script type="importmap">
      {
        "imports": {
          "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
        }
      }
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramona Lozon</title>

    <script>window.case_file = @json($case_file);</script>

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

<div class="container">
    <case-file :id="{{ $id }}"></case-file>
</div>

</main>
<footer></footer>
</body>
</html>