export  function srollT() {

(() => {
    gsap.registerPlugin(ScrollToPlugin);
  
    const navlinks = document.querySelectorAll(".project-scroll");
  
    function scrollLink(e) {
      console.log(e.currentTarget.hash);
      // prevent links from default behaviour/ jumping
      e.preventDefault();
      let selectedLink = e.currentTarget.hash;
      gsap.to(window, {
        duration: 1,
        scrollTo: { y: `${selectedLink}`, offsetY: 100, ease: "BounceOut" },
      });
    }
  
    navlinks.forEach((link) => {
      link.addEventListener("click", scrollLink);
    });
  })();
}