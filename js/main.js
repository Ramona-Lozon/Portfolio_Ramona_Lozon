const menuIcon = document.querySelector('#menuIcon');
const navLinks = document.querySelector('#navLinks');

function toggleMenu() {
    console.log("drop-down menu clicked");
    navLinks.classList.toggle('hidden');
}

menuIcon.addEventListener('click', toggleMenu);


//greensock scrollto
(() => {

    gsap.registerPlugin(ScrollToPlugin)
  
    const navLinks = document.querySelectorAll("#navLinks ul li a")

    console.log(navLinks);

function scrollLink(e){
    console.log(e.currentTarget.hash);
    //prevent this default behaviour/jumping
    e.preventDefault();
    let selectedLink = e.currentTarget.hash;
    gsap.to(window, {duration: 1, scrollTo:{y: `${selectedLink}`, offsetY: 100}});
}

    navLinks.forEach((link) => {
        link.addEventListener("click", scrollLink);
    })
})();

//greensock animation    

(() => {

gsap.to("#codingSkills", 3,
    {
        scrollTrigger:{
            trigger: "#codingSkills",
            toggleActions: "play reverse play reset",
            markers: true, 
            start: "top 80%",
            end: "bottom 30%"
        },
        autoAlpha:1,
        duration: 0.02 
    });

})();