(() => {
  gsap.registerPlugin(ScrollToPlugin);

  const navLinks = document.querySelectorAll(".page-link");

  function scrollLink(e) {
      e.preventDefault();  // Prevent the default anchor jump behavior

      let selectedLink = e.currentTarget.querySelector("a").getAttribute("href");
      console.log(selectedLink); // Logs the selected anchor (e.g., "#case-files-section")

      // Use GSAP to scroll to the selected section
      gsap.to(window, {
          duration: 1,
          scrollTo: { y: selectedLink, offsetY: 100 }  // Scroll to the section, with offset
      });
  }

  navLinks.forEach((link) => {
      link.addEventListener("click", scrollLink);
  });
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

    (() => {

        gsap.to("#videoEditingSkills", 3,
            {
                scrollTrigger:{
                    trigger: "#videoEditingSkills",
                    toggleActions: "play reverse play reverse",
                    markers: false, 
                    start: "top 80%",
                    end: "bottom 30%"
                },
                autoAlpha:1, 
            });
        
        })();

// about me lightbox
(() => {

    const lightBox = document.querySelector("#lightbox");
    const lightBoxTrigger = document.querySelector("#learnMore");
    const closeBtn = document.querySelectorAll('#close-button');
    
    function openLightbox() {
        console.log('open lightbox')
        lightBox.classList.add('active')
      }
      
      function closeLightbox() {
        console.log('close lightbox')
        lightBox.classList.remove('active')
      }
    
    if (lightBoxTrigger) {lightBoxTrigger.addEventListener('click', openLightbox);}
    if (closeBtn){closeBtn.forEach(Btn => {
    Btn.addEventListener('click', closeLightbox);
    });
  }
    })();


//togglemenu
(() => {
  const menuIcon = document.querySelector('#menuIcon');
  const navLinks = document.querySelector('#navLinks');
  const hamburger = document.querySelector('.hamburger-menu');
  const pageLinks = document.querySelectorAll('.page-link');

  function toggleMenu() {
    console.log("drop-down menu clicked");

    if (window.innerWidth > 1200) {
      return;
    }

    if (navLinks.classList.contains('active')) {
      navLinks.classList.remove('active');
      setTimeout(() => {
        navLinks.style.display = 'none';
      }, 300);
    } else {
      navLinks.style.display = 'flex';
      setTimeout(() => {
        navLinks.classList.add('active');
      }, 10);
    }
    hamburger.classList.toggle('active');
  }

  function closeMenu() {
    if (window.innerWidth > 1200) {
      return;
    }

    if (navLinks.classList.contains('active')) {
      navLinks.classList.remove('active');
      hamburger.classList.remove('active');
    }
  }

  function handleResize() {
    if (window.innerWidth > 1200) {
      navLinks.classList.add('active');
      navLinks.style.visibility = 'visible';
      navLinks.style.display = 'flex';
    } else {
      navLinks.style.display = '';
      navLinks.style.visibility = '';
      navLinks.classList.remove('active');
    }
  }

  window.addEventListener('resize', handleResize);
  handleResize();
  menuIcon.addEventListener('click', toggleMenu);
  pageLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });
})();
