import { createApp} from 'vue';
import linkedIn from './components/linkedIn.vue';
import insta from './components/insta.vue';
import github from './components/github.vue';
import CaseFile from './components/case_file.vue';
import CaseFileList from './components/case_file_list.vue';
import { navMenu } from "./modules/nav.js"; 
import { contactForm } from "./modules/contactForm.js";
import { indexAnimation } from "./modules/index-animation.js"; 
import { fadeIn } from "./modules/fadeIn.js";
import { videoPlayer } from "./modules/videoPlayer.js";


const page = document.body.dataset.page;

const app = createApp({});

app.component('case-file-list', CaseFileList);
app.component('case-file', CaseFile);
app.mount('#app');
    // Wait for Vue to render, then initialize GSAP
    function initializePageModules() {
        console.log('Initializing Page Modules...');
        fadeIn();
        if (window.gsap && window.gsap.ScrollTrigger) {
            gsap.ScrollTrigger.refresh();
        }
    }


if (page === 'home') {

    indexAnimation();
    const linkedInSVG = createApp(linkedIn);
    linkedInSVG.mount('#linked-in');
    const gitSVG = createApp(github);
    gitSVG.mount('#git');
    const instaSVG = createApp(insta);
    instaSVG.mount('#insta');

} else if (page === 'case_file') {
    navMenu();
    videoPlayer();
}

   // Watch for Vue rendering
    const observer = new MutationObserver(() => {
        const appElement = document.getElementById('app');
        if (appElement && appElement.children.length > 0) {
            observer.disconnect();
            initializePageModules();
        }
    });

    observer.observe(document.getElementById('app'), {
        childList: true,
        subtree: true,
    });

    // Timeout fallback
    setTimeout(() => {
        observer.disconnect();
        initializePageModules();
    }, 500);

// } else if (page === 'about') {
//     navMenu();
//     fadeIn();
// } else if (page === 'contact') {
//     navMenu();
//     contactForm();
//     fadeIn();
// } else if (page === 'work') {
//     navMenu();
//     fadeIn();

// } else if (page === 'login') {
//     navMenu();
// } else if (page === 'dashboard') {
//     navMenu();
// } else if (page === 'editor') {
//     navMenu();
// }


