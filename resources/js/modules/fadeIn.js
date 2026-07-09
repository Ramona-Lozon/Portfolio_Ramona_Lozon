export function fadeIn() {
    gsap.utils.toArray(".fadeIn").forEach(element => {
        gsap.to(element, {
            opacity: 1,
            duration: 0.5,
            scrollTrigger: {
                trigger: element,
                toggleActions: "play reverse play reverse",
                markers: false,
                start: "top 80%",
                end: "bottom 20%"
            },
            autoAlpha: 1,
        });
    });
}