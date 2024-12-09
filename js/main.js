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

  gsap.to("#case-files-section", .6,
      {
          scrollTrigger:{
              trigger: "#case-files-section",
              toggleActions: "play reverse play reverse",
              markers: false, 
              start: "top 80%",
              end: "bottom 20%"
          },
          autoAlpha:1,
      });
  
  })(); 

(() => {

  gsap.to("#demoReel", .6,
      {
          scrollTrigger:{
              trigger: "#demoReel",
              toggleActions: "play reverse play reverse",
              markers: false, 
              start: "top 80%",
              end: "bottom 20%"
          },
          autoAlpha:1,
          x: 25 
      });
  
  })(); 

(() => {

  gsap.to("#about", .6,
      {
          scrollTrigger:{
              trigger: "#about",
              toggleActions: "play reverse play reverse",
              markers: false, 
              start: "top 80%",
              end: "bottom 20%"
          },
          autoAlpha:1,
          x: 25 
      });
  
  })(); 

  (() => {

    gsap.to("#info-and-resume", .6,
        {
            scrollTrigger:{
                trigger: "#info-and-resume",
                toggleActions: "play reverse play reverse",
                markers: false, 
                start: "top 80%",
                end: "bottom 30%"
            },
            autoAlpha:1,
            x: 25 
        });
    
    })();

    (() => {

      gsap.to("#skills", .6,
          {
              scrollTrigger:{
                  trigger: "#skills",
                  toggleActions: "play reverse play reverse",
                  markers: false, 
                  start: "top 80%",
                  end: "bottom 20%"
              },
              autoAlpha:1,
              x: 25 
          });
      
      })();

(() => {

  gsap.to("#brand-design", .6,
      {
          scrollTrigger:{
              trigger: "#brand-design",
              toggleActions: "play reverse play reverse",
              markers: false, 
              start: "top 80%",
              end: "bottom 20%"
          },
          autoAlpha:1,
          x: 25  
      });
  
  })();  

(() => {

    gsap.to("#brandingSkills", .6,
        {
            scrollTrigger:{
                trigger: "#brandingSkills",
                toggleActions: "play reverse play reverse",
                markers: false, 
                start: "top 95%",
                end: "bottom 15%"
            },
            autoAlpha:1,
            x: 25  
        });
    
    })();

(() => {

  gsap.to("#codingSkillsTitle", .6,
    {
        scrollTrigger:{
            trigger: "#codingSkillsTitle",
            toggleActions: "play reverse play reverse",
            markers: false, 
                start: "top 95%",
                end: "bottom 15%"
        },
        autoAlpha:1,
        x: 25  
    });

})();

(() => {

gsap.to("#codingSkills", .6,
    {
        scrollTrigger:{
            trigger: "#codingSkills",
            toggleActions: "play reverse play reverse",
            markers: false, 
                start: "top 95%",
                end: "bottom 15%"
        },
        autoAlpha:1,
        x: 25  
    });

})();

(() => {

  gsap.to("#webDesignTitle", .6,
    {
        scrollTrigger:{
            trigger: "#webDesignTitle",
            toggleActions: "play reverse play reverse",
            markers: false, 
                start: "top 95%",
                end: "bottom 15%"
        },
        autoAlpha:1,
        x: 25 
    });

})();

(() => {

    gsap.to("#webDesignSkills", .6,
        {
            scrollTrigger:{
                trigger: "#webDesignSkills",
                toggleActions: "play reverse play reverse",
                markers: false, 
                start: "top 95%",
                end: "bottom 15%"
            },
            autoAlpha:1, 
            x: 25 
        });
    
    })();

    (() => {

      gsap.to("#videoEditingTitle", .6,
          {
              scrollTrigger:{
                  trigger: "#videoEditingTitle",
                  toggleActions: "play reverse play reverse",
                  markers: false, 
                start: "top 95%",
                end: "bottom 15%"
              },
              autoAlpha:1,
              x: 25 
          });
      
      })(); 

    (() => {

        gsap.to("#videoEditingSkills", .6,
            {
                scrollTrigger:{
                    trigger: "#videoEditingSkills",
                    toggleActions: "play reverse play reverse",
                    markers: false, 
                start: "top 95%",
                end: "bottom 15%"
                },
                autoAlpha:1,
                x: 25 
            });
        
        })();    

        (() => {

          gsap.to("#contactTitle", .6,
              {
                  scrollTrigger:{
                      trigger: "#contactTitle",
                      toggleActions: "play reverse play reverse",
                      markers: false, 
                  start: "top 95%",
                  end: "bottom 15%"
                  },
                  autoAlpha:1,
                  x: 25 
              });
          
          })();   

          (() => {

            gsap.to("#name", .6,
                {
                    scrollTrigger:{
                        trigger: "#name",
                        toggleActions: "play reverse play reverse",
                        markers: false, 
                    start: "top 95%",
                    end: "bottom 15%"
                    },
                    autoAlpha:1,
                    x: 25 
                });
            
            })(); 

            (() => {

              gsap.to("#org", .6,
                  {
                      scrollTrigger:{
                          trigger: "#org",
                          toggleActions: "play reverse play reverse",
                          markers: false, 
                      start: "top 95%",
                      end: "bottom 15%"
                      },
                      autoAlpha:1,
                      x: 25 
                  });
              
              })(); 

              (() => {

                gsap.to("#email", .6,
                    {
                        scrollTrigger:{
                            trigger: "#email",
                            toggleActions: "play reverse play reverse",
                            markers: false, 
                        start: "top 95%",
                        end: "bottom 15%"
                        },
                        autoAlpha:1,
                        x: 25 
                    });
                
                })(); 

                (() => {

                gsap.to("#msg", .6,
                  {
                      scrollTrigger:{
                          trigger: "#msg",
                          toggleActions: "play reverse play reverse",
                          markers: false, 
                      start: "top 95%",
                      end: "bottom 15%"
                      },
                      autoAlpha:1,
                      x: 25 
                  });
              
              })(); 

              (() => {

              gsap.to("#send-button", .6,
                {
                    scrollTrigger:{
                        trigger: "#send-button",
                        toggleActions: "play reverse play reverse",
                        markers: false, 
                    start: "top 95%",
                    end: "bottom 15%"
                    },
                    autoAlpha:1,
                    x: 25 
                });
            
            })(); 

  (() => {

    gsap.to("#cf-main-title", .6,
      {
          scrollTrigger:{
              trigger: "#cf-main-title",
              toggleActions: "play reverse play reverse",
              markers: false, 
          start: "top 95%",
          end: "bottom 1%"
          },
          autoAlpha:1,
          x: 25 
      });
  
  })();

  (() => {

    gsap.to("#cf-prop", .6,
      {
          scrollTrigger:{
              trigger: "#cf-prop",
              toggleActions: "play reverse play reverse",
              markers: false, 
          start: "top 95%",
          end: "bottom 15%"
          },
          autoAlpha:1,
          x: 25 
      });
  
  })();  

  (() => {

    gsap.to("#cf-prop-ex", .6,
      {
          scrollTrigger:{
              trigger: "#cf-prop-ex",
              toggleActions: "play reverse play reverse",
              markers: false, 
          start: "top 95%",
          end: "bottom 15%"
          },
          autoAlpha:1,
          x: 25 
      });
  
  })(); 

  (() => {

    gsap.to("#cf-prop-caption", .6,
      {
          scrollTrigger:{
              trigger: "#cf-prop-caption",
              toggleActions: "play reverse play reverse",
              markers: false, 
          start: "top 95%",
          end: "bottom 15%"
          },
          autoAlpha:1,
          x: 25 
      });
  
  })(); 

  (() => {

    gsap.to("#cf-deliverables", .6,
      {
          scrollTrigger:{
              trigger: "#cf-deliverables",
              toggleActions: "play reverse play reverse",
              markers: false, 
          start: "top 95%",
          end: "bottom 15%"
          },
          autoAlpha:1,
          x: 25 
      });
  
  })(); 

  (() => {

    gsap.to("#cf-work-ex", .6,
      {
          scrollTrigger:{
              trigger: "#cf-work-ex",
              toggleActions: "play reverse play reverse",
              markers: false, 
          start: "top 95%",
          end: "bottom 15%"
          },
          autoAlpha:1,
          x: 25 
      });
  
  })(); 

  (() => {

    gsap.to("#cf-work-caption", .6,
      {
          scrollTrigger:{
              trigger: "#cf-work-caption",
              toggleActions: "play reverse play reverse",
              markers: false, 
          start: "top 95%",
          end: "bottom 15%"
          },
          autoAlpha:1,
          x: 25 
      });
  
  })(); 

  (() => {

    gsap.to("#cf-media-3", .6,
      {
          scrollTrigger:{
              trigger: "#cf-media-3",
              toggleActions: "play reverse play reverse",
              markers: false, 
          start: "top 95%",
          end: "bottom 15%"
          },
          autoAlpha:1,
          x: 25 
      });
  
  })(); 

  (() => {

    gsap.to("#cf-media-image", .6,
      {
          scrollTrigger:{
              trigger: "#cf-media-image",
              toggleActions: "play reverse play reverse",
              markers: false, 
          start: "top 95%",
          end: "bottom 15%"
          },
          autoAlpha:1,
          x: 25 
      });
  
  })(); 

  (() => {

    gsap.to("#cf-prod-caption", .6,
      {
          scrollTrigger:{
              trigger: "#cf-product-caption",
              toggleActions: "play reverse play reverse",
              markers: false, 
          start: "top 95%",
          end: "bottom 15%"
          },
          autoAlpha:1,
          x: 25 
      });
  
  })(); 

  (() => {

    gsap.to("#cf-outcome", .6,
      {
          scrollTrigger:{
              trigger: "#cf-outcome",
              toggleActions: "play reverse play reverse",
              markers: false, 
          start: "top 95%",
          end: "bottom 15%"
          },
          autoAlpha:1,
          x: 25 
      });
  
  })(); 

  (() => {
  const lightBox = document.querySelector("#lightbox");
  const lightBoxTrigger = document.querySelector("#learnMore");
  
  function openLightbox() {
      console.log('open lightbox')
      lightBox.classList.add('active')
    }
    
    function closeLightbox() {
      console.log('close lightbox')
      lightBox.classList.remove('active')
    }

    
  if (lightBoxTrigger) {lightBoxTrigger.addEventListener('click', openLightbox);}
  if (lightBox) {lightBox.addEventListener('click', closeLightbox);}
  })();

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

(() => {

  const playerCon = document.querySelector('#player-container');
  const player = document.querySelector('video');
  const videoControls = document.querySelector('#video-controls');
  const playButton = document.querySelector('#play-button');
  const pauseButton = document.querySelector('#pause-button');
  const stopButton = document.querySelector('#stop-button');
  const volumeSlider = document.querySelector("#change-vol");
  const fullScreen = document.querySelector("#full-screen");
  
  player.controls = false;
  videoControls.classList.remove('hidden');

  function playVideo() {
      player.play();
  }
  
  function pauseVideo() {
      player.pause();
  }
  
  function stopVideo() {
      player.pause();
      player.currentTime = 1;
  }
  
  function changeVolume() {
      player.volume = volumeSlider.value;
  }
  
  function toggleFullScreen() {
      if (document.fullscreenElement) {
        document.exitFullscreen();
      } else if (document.webkitFullscreenElement) {
        document.webkitExitFullscreen();
      } else if (playerCon.webkitRequestFullscreen) {
          playerCon.webkitRequestFullscreen();
      } else {
          playerCon.requestFullscreen();
      }
  }
  
  function hideControls() {
      if (player.paused) {
        return;
      } 
      videoControls.classList.add('hide');
    }
    
    function showControls() {
      videoControls.classList.remove('hide');
    }
  
  playButton.addEventListener("click", playVideo);
  pauseButton.addEventListener("click", pauseVideo);
  stopButton.addEventListener("click", stopVideo);
  volumeSlider.addEventListener("change", changeVolume);
  
  fullScreen.addEventListener("click", toggleFullScreen);
  videoControls.addEventListener('mouseenter', showControls);
  videoControls.addEventListener('mouseleave', hideControls);
  player.addEventListener('mouseenter', showControls);
  player.addEventListener('mouseleave', hideControls);
  })();