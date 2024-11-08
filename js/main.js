const menuIcon = document.querySelector('#menuIcon');
const navLinks = document.querySelector('#navLinks');

function toggleMenu() {
    console.log("drop-down menu clicked");
    navLinks.classList.toggle('hidden');
}

menuIcon.addEventListener('click', toggleMenu);


//greensock scrollto
(() => {

    gsap.registerPlugin(ScrollTrigger);
    gsap.registerPlugin(ScrollToPlugin);

    const navLinks = document.querySelectorAll("#navLinks nav ul li");

    function scrollLink(e) {    
            e.preventDefault(); 
            console.log(e.currentTarget.hash);
            let selectedLink = e.currentTarget.hash;
            gsap.to(window, {duration: 1, scrollTo:{y:`${selectedLink}`, offsetY:100 }});
    }

    navLinks.forEach((link) => {
        link.addEventListener("click", scrollLink);
    });
  
    gsap.to("#box3", 1, {scrollTrigger: "box3", x:"85vw", ease:Bounce.easeOut})

gsap.to("#box3", 3,
    {
        scrollTrigger:{
            trigger: "#box3",
            //onEnter onLeave onEnterBack onLeaveBack
            toggleActions: "restart pause reverse none",
            markers: true, 
            //animation box start, scroller start
            start: "top center",
            //animation box end, scroller end
            end: "bottom center"
        },
        x:300, ease:Bounce.easeOut
    }
)

})();