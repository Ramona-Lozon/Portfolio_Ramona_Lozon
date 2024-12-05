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

//greensock animations for fade in elements   

(() => {

    gsap.to("#brandingSkills", 3,
        {
            scrollTrigger:{
                trigger: "#brandingSkills",
                toggleActions: "play reverse play reverse",
                markers: false, 
                start: "top 80%",
                end: "bottom 30%"
            },
            autoAlpha:1, 
        });
    
    })();

(() => {

gsap.to("#codingSkills", 3,
    {
        scrollTrigger:{
            trigger: "#codingSkills",
            toggleActions: "play reverse play reverse",
            markers: false, 
            start: "top 80%",
            end: "bottom 30%"
        },
        autoAlpha:1, 
    });

})();

(() => {

    gsap.to("#webDesignSkills", 3,
        {
            scrollTrigger:{
                trigger: "#webDesignSkills",
                toggleActions: "play reverse play reverse",
                markers: false, 
                start: "top 80%",
                end: "bottom 30%"
            },
            autoAlpha:1, 
        });
    
    })();

