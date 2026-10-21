// export function fadeIn() {
//     gsap.utils.toArray(".fadeIn").forEach(element => {
//         gsap.to(element, {
//             opacity: 1,
//             duration: 1,
//             scrollTrigger: {
//                 trigger: element,
//                 markers: true,
//                 start: "top 70%",
//                 end: "bottom 5%"
//             },
//             autoAlpha: 1,
//         });
//     });
// }

import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function fadeIn(scope) {
  const ctx = gsap.context(() => {
    gsap.utils.toArray('.fade-item, .fade-static').forEach((element) => {
      gsap.fromTo(
        element, 
        {opacity: 0, duration: 1, y: 10},
        {opacity: 1, y:0,
        scrollTrigger: {
          trigger: element,
          start: 'top 85%',
          markers: true,
        },
      });
    });
  }, scope);

  //ScrollTrigger.refresh();
  return ctx; // lets you clean up later
}