// video
export  function videoCon() {
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
  }
  
  
