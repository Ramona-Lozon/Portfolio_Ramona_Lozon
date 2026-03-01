import { navMenu } from "./modules/nav.js"; 
import { contactForm } from "./modules/contactForm.js";
import { indexAnimation } from "./modules/index-animation.js"; 
import { fadeIn } from "./modules/fadeIn.js";

const page = document.body.dataset.page;

if (page === 'home') {
    indexAnimation();
    fadeIn();
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
} else if (page === 'login') {
    navMenu();
} else if (page === 'dashboard') {
    navMenu();
    contactForm();
}