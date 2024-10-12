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
