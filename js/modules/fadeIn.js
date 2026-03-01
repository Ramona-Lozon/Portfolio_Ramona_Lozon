import { gsap } from "https://cdn.skypack.dev/gsap";
import { ScrollTrigger } from "https://cdn.skypack.dev/gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

export function fadeIn() {
    gsap.utils.toArray(".fadeIn").forEach(element => {
        gsap.to(element, {
            duration: 0.6,
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