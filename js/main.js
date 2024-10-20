(function() {
// Variables
const words = ["Motion designer", "Web developer"];
let wordIndex = 0;
let charIndex = 0;

const delay = 200; // Typing speed
const eraseDelay = 100; // Erasing speed
const newWordDelay = 2000; // Delay between words
const typewriter = document.getElementById("typewriter"); // Ensure this element is accessed correctly

// Function to type the current word
function typeWord() {
    if (charIndex < words[wordIndex].length) {
        typewriter.textContent += words[wordIndex].charAt(charIndex);
        charIndex++;
        setTimeout(typeWord, delay);
    } else {
        setTimeout(eraseWord, newWordDelay); // Pause before erasing
    }
}

// Function to erase the current word
function eraseWord() {
    if (charIndex > 0) {
        typewriter.textContent = words[wordIndex].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(eraseWord, eraseDelay);
    } else {
        wordIndex = (wordIndex + 1) % words.length; // Move to the next word
        setTimeout(typeWord, delay); // Start typing the next word
    }
}

// Start the typing effect on page load
document.addEventListener("DOMContentLoaded", function() {
    setTimeout(typeWord, delay); // Start typing effect
});
})();

(function() {
    // Variables
    const selectElement = document.getElementById('help');

    // Functions
    function handleSelectionChange() {
        const selectedOption = selectElement.options[selectElement.selectedIndex].text;
        displaySelectedOption(selectedOption);
    }

    function displaySelectedOption(option) {
        // Clear previous result
        const existingResult = document.getElementById('result');
        if (existingResult) {
            existingResult.remove();
        }

        // Create and display the new result
        const resultDiv = document.createElement('div');
        resultDiv.id = 'result';
        resultDiv.innerHTML = `You selected: ${option}`;
        document.body.appendChild(resultDiv); // Append the result to the body
    }

    // Event Listeners
    function addEventListeners() {
        selectElement.addEventListener('change', handleSelectionChange);
    }

    // Initialize the script
    function init() {
        addEventListeners();
    }

    // Call the init function to start everything
    init();

})();

// menubar
(function () {
    "use strict";
  
    console.log("fired");
  
    let button = document.querySelector("#hamburger");
    let nav = document.querySelector(".nav-bar"); // Use class selector
  
    function hamburgerMenu() {
      nav.classList.toggle("active"); // Toggle nav display
      button.classList.toggle("rotated"); // Optional rotation effect
    }
  
    button.addEventListener("click", hamburgerMenu, false);
  })();

  (function () {
    const productCards = Array.from({ length: 9 }, (_, i) => `Card ${i + 1}`);

    const rows = document.querySelectorAll('.row');

    rows.forEach((row, index) => {
        for (let j = 0; j < 3; j++) {
            const cardIndex = index * 3 + j;
            const card = document.createElement('div');
            card.classList.add('card');
            card.textContent = productCards[cardIndex];
            row.appendChild(card);
        }

        // Set overflow properties
        row.style.overflowX = 'auto';
        row.style.scrollBehavior = 'smooth';

        // Auto-scroll logic
        let scrollAmount = 1; // Adjust scroll speed
        const intervalTime = 50; // Adjust interval for smoother or faster scroll
        let direction = (index === 1) ? -1 : 1; // Set middle row (index 1) to scroll left, others to scroll right

        setInterval(() => {
            row.scrollBy({ left: scrollAmount * direction, behavior: 'smooth' });

            // Reverse direction at the edges for continuous scroll
            if (direction === 1 && row.scrollLeft + row.clientWidth >= row.scrollWidth) {
                direction = -1; // Reverse to scroll left
            } else if (direction === -1 && row.scrollLeft <= 0) {
                direction = 1; // Reverse to scroll right
            }
        }, intervalTime);
    });
})();



