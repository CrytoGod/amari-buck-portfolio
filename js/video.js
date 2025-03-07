export function videoCon() {
  console.log("bingo");

  const playerCon = document.querySelector(".player-container");
  const player = document.querySelector("video");
  const videoControls = document.querySelector("#video-controls");
  const playButton = document.querySelector("#play-button");
  const pauseButton = document.querySelector("#pause-button");
  const stopButton = document.querySelector("#stop-button");
  const volumeSlider = document.querySelector("#change-vol");
  const progressSlider = document.querySelector("#video-progress");
  const fullScreen = document.querySelector("#full-screen");

  // Remove default video controls
  player.controls = false;
  videoControls.classList.remove("hidden");

  // Initialize controls based on video state
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

  // Update play/pause button based on video state
  function updatePlayPauseButton() {
    if (player.paused) {
      playButton.classList.remove("hidden");
      pauseButton.classList.add("hidden");
    } else {
      playButton.classList.add("hidden");
      pauseButton.classList.remove("hidden");
    }
  }

  // Play the video
  function playVideo() {
    player.play();
    updatePlayPauseButton();
  }

  // Pause the video
  function pauseVideo() {
    player.pause();
    updatePlayPauseButton();
  }

  // Stop the video
  function stopVideo() {
    player.pause();
    player.currentTime = 0;
    updatePlayPauseButton();
  }

  // Change the volume based on the volume slider
  function changeVolume() {
    player.volume = volumeSlider.value;
  }

  // Toggle full screen mode
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

  // Hide controls when not in use
  function hideControls() {
    if (player.paused || document.fullscreenElement) {
      return;
    }
    videoControls.classList.add("hide");
  }

  // Show controls when hovering or when needed
  function showControls() {
    videoControls.classList.remove("hide");
  }

  // Synchronize slider with video progress
  function updateProgress() {
    progressSlider.value = Math.floor(player.currentTime);
  }

  // Seek video when slider is moved
  function seekVideo() {
    player.currentTime = progressSlider.value;
  }

  // Event listeners for control buttons and interactions
  playButton.addEventListener("click", playVideo);
  pauseButton.addEventListener("click", pauseVideo);
  stopButton.addEventListener("click", stopVideo);
  volumeSlider.addEventListener("change", changeVolume);
  progressSlider.addEventListener("input", seekVideo);
  fullScreen.addEventListener("click", toggleFullScreen);

  // Mouse enter/leave for video controls
  videoControls.addEventListener("mouseenter", showControls);
  videoControls.addEventListener("mouseleave", hideControls);
  player.addEventListener("mouseenter", showControls);
  player.addEventListener("mouseleave", hideControls);

  // Update play/pause button on play/pause events
  player.addEventListener("play", updatePlayPauseButton);
  player.addEventListener("pause", updatePlayPauseButton);

  // Update progress bar while video is playing
  player.addEventListener("timeupdate", updateProgress);

  // Adjust controls visibility when entering/exiting fullscreen
  document.addEventListener("fullscreenchange", () => {
    if (document.fullscreenElement) {
      playerCon.addEventListener("mouseenter", showControls);
      playerCon.addEventListener("mouseleave", hideControls);
    } else {
      playerCon.removeEventListener("mouseenter", showControls);
      playerCon.removeEventListener("mouseleave", hideControls);
    }
  });

  // Initialize controls when video metadata is loaded
  player.addEventListener("loadedmetadata", initializeControls);

  // Initialize controls on page load
  initializeControls();
}
