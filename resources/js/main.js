
import linkedIn from './components/linkedIn.vue';
import insta from './components/insta.vue';
import github from './components/github.vue';
import { createApp } from 'vue';
import { navMenu } from "./modules/nav.js"; 
import { contactForm } from "./modules/contactForm.js";
import { indexAnimation } from "./modules/index-animation.js"; 
import { fadeIn } from "./modules/fadeIn.js";
import { videoPlayer } from "./modules/videoPlayer.js";


const page = document.body.dataset.page;

if (page === 'home') {
    indexAnimation();
    fadeIn();

    const linkedInSVG = createApp(linkedIn);
    linkedInSVG.mount('#linked-in');

    const gitSVG = createApp(github);
    gitSVG.mount('#git');

    const instaSVG = createApp(insta);
    instaSVG.mount('#insta');

} else if (page === 'about') {
    navMenu();
    fadeIn();
} else if (page === 'contact') {
    navMenu();
    contactForm();
    fadeIn();
} else if (page === 'work') {
    navMenu();
    fadeIn();
} else if (page === 'case_file') {
    navMenu();
    fadeIn();
    videoPlayer();
} else if (page === 'login') {
    navMenu();
} else if (page === 'dashboard') {
    navMenu();
} else if (page === 'editor') {
    navMenu();
}