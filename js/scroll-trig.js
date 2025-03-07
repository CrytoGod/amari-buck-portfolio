
    gsap.registerPlugin(ScrollTrigger);  
    console.log("Needed");

    gsap.from(".trigger1", {
        scrollTrigger: {
          trigger: ".trigger1",
          toggleActions: "play none",
          markers: true,
          start: "top 50%", 
          
          
        },
        opacity: 0,
        y: 100,
        duration: 1,
        ease: "power2.out"
      });


      gsap.from(".trigger2", {
        scrollTrigger: {
          trigger: ".trigger2",
          toggleActions: "play none",
          markers: true,
          start: "top 50%", 
          
          
        },
        opacity: 0,
        y: 100,
        duration: 1,
        ease: "power2.out"
      });


      gsap.from(".trigger3", {
        scrollTrigger: {
          trigger: ".trigger3",
          toggleActions: "play none",
          markers: true,
          start: "top 50%", 
          
          
        },
        opacity: 0,
        x: -100,
        duration: 1,
        ease: "power2.out"
      });

      gsap.from(".trigger4", {
        scrollTrigger: {
          trigger: ".trigger4",
          toggleActions: "play none",
          markers: true,
          start: "top 50%", 
          
          
        },
        opacity: 0,
        x: 100,
        duration: 1,
        ease: "power2.out"
      });
