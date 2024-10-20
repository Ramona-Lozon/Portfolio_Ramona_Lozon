const menuIcon = document.querySelector('#menuIcon');
const navLinks = document.querySelector('#navLinks');

function toggleMenu() {
    console.log("drop-down menu clicked");
    navLinks.classList.toggle('hidden');
}

menuIcon.addEventListener('click', toggleMenu);
