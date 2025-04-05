export function moveProducts() {
    (function () {
      function isPage(page) {
        return window.location.pathname.includes(page);
      }
  
      function enableAutoSlide() {
        const row = document.querySelector(".row");
        if (!row) return;
  
        let direction = 1;
        const scrollStep = 2; // Speed of scroll
        let autoScroll, userInteracted = false;
        let lastScrollLeft = row.scrollLeft;
        let resumeTimeout;
  
        function startAutoScroll() {
          if (userInteracted) return; // Prevent auto-scroll if user is interacting
  
          function scrollStepFunction() {
            if (!userInteracted) {
              row.scrollLeft += scrollStep * direction;
  
              // Reverse direction when hitting boundaries
              if (row.scrollLeft <= 0 || row.scrollLeft >= row.scrollWidth - row.clientWidth) {
                direction *= -1;
              }
  
              autoScroll = requestAnimationFrame(scrollStepFunction);
            }
          }
  
          autoScroll = requestAnimationFrame(scrollStepFunction);
        }
  
        function stopAutoScrollTemporarily() {
          cancelAnimationFrame(autoScroll);
          userInteracted = true;
          clearTimeout(resumeTimeout);
  
          // Resume auto-scrolling after 10s of inactivity
          resumeTimeout = setTimeout(() => {
            userInteracted = false;
            startAutoScroll();
          }, 10000);
        }
  
        function handleScroll() {
          if (userInteracted) {
            clearTimeout(resumeTimeout);
            resumeTimeout = setTimeout(() => {
              userInteracted = false;
              startAutoScroll();
            }, 10000);
          }
        }
  
        // Allow user to scroll freely
        row.style.overflowX = "auto";
  
        // Event listeners
        row.addEventListener("touchstart", stopAutoScrollTemporarily, { passive: true });
        row.addEventListener("wheel", stopAutoScrollTemporarily, { passive: true });
        row.addEventListener("mousedown", stopAutoScrollTemporarily);
        row.addEventListener("scroll", handleScroll, { passive: true });
  
        startAutoScroll();
      }
  
      if (document.querySelector(".row") || isPage("index.php") || isPage("detail.php")) {
        enableAutoSlide();
      }
    })();
  }
  