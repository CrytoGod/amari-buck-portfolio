(function() {
// Variables
const words = ["Motion designer", "Web developer"];
let wordIndex = 0;
let charIndex = 0;

const delay = 200; // Typing speed
const eraseDelay = 200; // Erasing speed
const newWordDelay = 8000; // Delay between words
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

// video
(() => {
    const playerCon = document.querySelector(".player-container");
    const player = document.querySelector("video");
    const videoControls = document.querySelector("#video-controls");
    const playButton = document.querySelector("#play-button");
    const pauseButton = document.querySelector("#pause-button");
    const stopButton = document.querySelector("#stop-button");
    const volumeSlider = document.querySelector("#change-vol");
    const progressSlider = document.querySelector("#video-progress");
    const fullScreen = document.querySelector("#full-screen");
  
    player.controls = false;
    videoControls.classList.remove("hidden");
  
    function initializeControls() {
      if (player.paused) {
        playButton.classList.remove("hidden");
        pauseButton.classList.add("hidden");
      } else {
        playButton.classList.add("hidden");
        pauseButton.classList.remove("hidden");
      }
      progressSlider.value = 0;
      progressSlider.max = Math.floor(player.duration || 100);
    }
  
    function updatePlayPauseButton() {
      if (player.paused) {
        playButton.classList.remove("hidden");
        pauseButton.classList.add("hidden");
      } else {
        playButton.classList.add("hidden");
        pauseButton.classList.remove("hidden");
      }
    }
  
    function playVideo() {
      player.play();
      updatePlayPauseButton();
    }
  
    function pauseVideo() {
      player.pause();
      updatePlayPauseButton();
    }
  
    function stopVideo() {
      player.pause();
      player.currentTime = 0;
      updatePlayPauseButton();
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
      if (player.paused || document.fullscreenElement) {
        return;
      }
      videoControls.classList.add("hidden");
    }
  
    function showControls() {
      videoControls.classList.remove("hidden");
    }
  
    // Synchronize slider with video progress
    function updateProgress() {
      progressSlider.value = Math.floor(player.currentTime);
    }
  
    // Seek video when slider is moved
    function seekVideo() {
      player.currentTime = progressSlider.value;
    }
  
    // Event listeners
    playButton.addEventListener("click", playVideo);
    pauseButton.addEventListener("click", pauseVideo);
    stopButton.addEventListener("click", stopVideo);
    volumeSlider.addEventListener("change", changeVolume);
    progressSlider.addEventListener("input", seekVideo);
    fullScreen.addEventListener("click", toggleFullScreen);
  
    videoControls.addEventListener("mouseenter", showControls);
    videoControls.addEventListener("mouseleave", hideControls);
    player.addEventListener("mouseenter", showControls);
    player.addEventListener("mouseleave", hideControls);
    player.addEventListener("play", updatePlayPauseButton);
    player.addEventListener("pause", updatePlayPauseButton);
    player.addEventListener("timeupdate", updateProgress);
  
    document.addEventListener("fullscreenchange", () => {
      if (document.fullscreenElement) {
        playerCon.addEventListener("mouseenter", showControls);
        playerCon.addEventListener("mouseleave", hideControls);
      } else {
        playerCon.removeEventListener("mouseenter", showControls);
        playerCon.removeEventListener("mouseleave", hideControls);
      }
    });
  
    player.addEventListener("loadedmetadata", initializeControls);
  
    initializeControls();
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
(() => {
    (function(){
      "use strict";	
      console.log("fired");
    
      let button = document.querySelector("#button");
      let burgerCon = document.querySelector("#burger-con");
    
      function hamburgerMenu() {
        burgerCon.classList.toggle("slide-toggle");
        button.classList.toggle("expanded");
      };
    
      // let hamburgerMenu = () => {
      // 	burgerCon.classList.toggle("slide-toggle");
      // 	button.classList.toggle("expanded");
      // };
    
      button.addEventListener("click", hamburgerMenu, false);		
    })();
    
  })();

// productCards

// svg



