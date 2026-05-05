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

    <!-- Hero section / landing page -->
    <section id="hero-section">
        
        <article id="index-name-box">
            <div class="text title-text fadeIn" id="index-ramona">Ramona Lozon</div>
            <h3 class="text subtitle-text fadeIn">Junior Web Developer and Designer</h3>      

            <article class="nav-box">

                <div class="index-nav">
                    <a class="text subtitle-text hover-item fadeIn" href="#about-section">// Who am I?</a>
                    <a class="text subtitle-text hover-item fadeIn" href="#my-work">// My Work</a>
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
                    <a class="text subtitle-text hover-item fadeIn" href="#contact-section">Work With Me <span class="blink">&#8658;</span></a>
                </div>

            </article>
        </article>
    </section>

    <!-- case file list -->
    <section id="my-work">

            <div class="title-con">
                <h3 class="text title-text fadeIn">My Work</h3>
            </div>

        <article class="case-file-slug breakpoint-con fadeIn">

        <div class="breakpoint-group">
                <h3 class="text subtitle-text">
                    Case File Title
                </h3>

                <p class="text body-text">
                    A Short Description of the project that i worked on, in order to give context and some details in regards to what the project is, its scope, the client, and the intended userbase.
                </p>
            </div>

        </div class="breakpoint-item">
            <img class="work-image" src="{{ asset('images\placeholder-images-01.jpg') }}">
        </div>
        </article>

       <article class="case-file-slug breakpoint-con fadeIn">

        <div class="breakpoint-group">
                <h3 class="text subtitle-text">
                    Case File Title
                </h3>

                <p class="text body-text">
                    A Short Description of the project that i worked on, in order to give context and some details in regards to what the project is, its scope, the client, and the intended userbase.
                </p>
            </div>

        </div class="breakpoint-item">
            <img class="work-image" src="{{ asset('images\placeholder-images-01.jpg') }}">
        </div>

        </article>

       <article class="case-file-slug breakpoint-con fadeIn">

        <div class="breakpoint-group">
                <h3 class="text subtitle-text">
                    Case File Title
                </h3>

                <p class="text body-text">
                    A Short Description of the project that i worked on, in order to give context and some details in regards to what the project is, its scope, the client, and the intended userbase.
                </p>
            </div>

        </div class="breakpoint-item">
            <img class="work-image" src="{{ asset('images\placeholder-images-01.jpg') }}">
        </div>

        </article>

    </section>

    <!-- About Section -->
    <section>
                   <section id="about-section">

                <h3 class="text main-title" id="about">About</h3>

                <div id="info-and-resume">
                    
                    <img id="selfie" class="fadeIn" src="images/ramona_selfie.jpg" alt="a picture of me">
                    
                    <div id="about-con">
                        <h3 id="about-desk" class="text main-title">About</h3>
                            
                        <p id="about-text" class="text info_text fadeIn">
                                Hi! I'm Ramona
                                <br>I'm a Junior Front end develop and designer, I'm eager to make a splash in the industry and build connections.
                                <br>I'm a creative and passionate individual who loves all things nerdy, from Dungeons & Dragons and tabletop role-playing games to sci-fi, fantasy, and post-apocalyptic fiction. My dedication to art and design drives me to explore creativity in every medium, whether it's graphic design or hands-on projects. I support LGBTQ rights and volunteer as a graphic designer for a local group, Queer Intersections. With years of professional experience across various roles, I bring punctuality, professionalism, and a strong work ethic to everything I do.
                        </p>
                    </div>
                </div>
            </section>

            <!-- skills -->
             <section id="skills-section">
            <div>
                <h3 class="text main-title fadeIn" id="skills">skills</h3>
            </div>

            <!-- logo and branding section -->
            <!-- <h3 class="text info_text invisible" id="brand-design">logo and brand design</h3> -->
            <h3 class="text info_text fadeIn" id="brand-design">logo and brand design</h3>          
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
            <h3 class="text info_text fadeIn" id="codingSkillsTitle">coding</h3>
            <article class="skills-box">
            <h2>coding skills</h2>
                <div class="icon-box" id="codingSkills">
                    <div class="icon-card fadeIn">
                        <img src="images/html5.png" id="HTML5_logo" alt="HTML5 Logo">
                        <span class="text">HTML5</span>
                    </div>

                    <div class="icon-card fadeIn">
                        <img src="images/css-3.svg" id="CSS3_logo" alt="CSS3 Logo">
                        <span class="text">CSS</span>
                    </div>

                    <div class="icon-card fadeIn">
                        <img src="images/JavaScript-Logo.png" id="JS_logo" alt="Javascript logo">
                        <span class="text">Javascript</span>
                    </div>

                    <div class="icon-card fadeIn">
                        <img src="images/PHP-logo.png" id="PHP_logo" alt="PHP logo">
                        <span class="text">PHP</span>
                    </div>

                    <div class="icon-card fadeIn">
                        <img src="images/github-logo.png" id="GIT_logo" alt="Github logo">
                        <span class="text">Github</span>
                    </div>

                    <div class="icon-card fadeIn">
                        <img src="images/Sass_Logo_Color.svg" id="SASS_logo" alt="SASS logo">
                        <span class="text">SASS</span>
                    </div>

                    <div class="icon-card fadeIn">
                        <img src="images/greensock-logo.png" id="Greensock_logo" alt="Greensock logo">
                        <span class="text">Greensock</span>
                    </div>
                </div>
            </article>

            <!-- web design section -->
            <h3 class="text info_text fadeIn" id="webDesignTitle">Web Design</h3>
            <article class="skills-box">
                <div class="icon-box" id="webDesignSkills">
            <h2>web design skills</h2>

                    <div class="icon-card fadeIn">
                        <img src="images/Adobe_XD_Logo.png" id="xdLogo" alt="Adobe XD Logo">
                        <span class="text">Adobe XD</span>
                    </div>

                    <div class="icon-card fadeIn">
                        <img src="images/Figma-logo.png" id="figmaLogo" alt="Figma Logo">
                        <span class="text">Figma</span>
                    </div>
                </div>
            </article>

            <!-- video editing -->
            <h3 class="text info_text fadeIn" id="videoEditingTitle">Video Editing</h3>
            <article class="skills-box">
            <h2>Video Editing skills</h2>
                <div class="icon-box fadeIn" id="videoEditingSkills">
                    <div class="icon-card">
                        <img src="images/Adobe_Premiere_logo.png" id="premierLogo" alt="Adobe Premier Logo">
                        <span class="text">Adobe Premier</span>
                    </div>

                    <div class="icon-card fadeIn">
                        <img src="images/after-effects.svg" id="afterEffectsLogo2" alt="After Effects Logo">
                        <span class="text">Adobe After Effects</span>
                    </div>
                </div>
            </article>
        </section>

                                <section class="education-con">
                                        <h3 id="education" class="text main-title fadeIn">
                                    Education
                                </h3>
                        
                                    <ul id="education-text" class="text info_text fadeIn">
                                        <li>Interactive Media Design Progam, Fanshawe College</li>   
                                        <li>Certificate of Design, Fanshawe College</li>
                                    </ul>
                                </section>

    </section>

    <!-- contact section -->
       <div id="center-con">
            <article id="contact-section">
                <h3 class="text main-title" id="contactTitle">Contact</h3>
            <!--Buttons-->
            <form class="input-form fadeIn" id="contactForm" method="post" action="sendmail.php">

                <label class="label text body-text" for="name">Name</label>
                <input  class="form-box" 
                        type="text" 
                        name="name" 
                        id="name" 
                        placeholder="John Doe">

                <label class="label text body-text" for="org">Organization</label>
                <input  class="form-box" 
                        type="text" 
                        name="org" 
                        id="org" 
                        placeholder="website Inc.">

                <label class="label text body-text" for="email">Email</label>
                <input 
                        class="form-box" 
                        type="email" 
                        name="email" 
                        id="email" 
                        placeholder="hello@gmail.com">

                <label class="label text body-text" for="msg">Message</label>
                <textarea   class="form-box" 
                            name="msg" 
                            id="msg" 
                            placeholder="message">
                </textarea>
                <br>
                <br>
                
                <div class="text info_text" id="feedback"></div>

                <input  class="button" 
                        id="send-button" 
                        type="submit" 
                        value="Submit">
            </form>
        </article>

</main>
</body>
</html>