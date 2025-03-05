
// menubar
export  function mainMenu() {
(() => {
    (function () {
      "use strict";
      console.log("fired");
    
      // Select elements
      let button = document.querySelector(".button");
      let burgerCon = document.querySelector(".burger-con");
    
      // Function to toggle the menu
      function hamburgerMenu() {
        burgerCon.classList.toggle("slide-toggle");
        button.classList.toggle("expanded");
      }
    
      // Check if elements exist before adding event listeners
      if (button && burgerCon) {
        button.addEventListener("click", hamburgerMenu, false);
      }
    })();
      
    })();
}