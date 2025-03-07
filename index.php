<!DOCTYPE html>
<html lang="en">

<!-- edit later -->
<?php

//Creates a connection to the database. This code is 'included' into another file, as if it is pasted into the other file.
require_once('include/connect.php');

// require('');
// include('');
// include_once('');

// $connect = new mysqli('localhost','root','root','books');

// $query = 'SELECT projects.id AS project, projects.title,thumbnail, projects.project_brief, category.title AS category, GROUP_CONCAT(media.image_video) AS media_files FROM projects JOIN media ON projects.id = media.project_id JOIN category ON category.id = projects.category_id GROUP BY projects.id
// ';

$stmt = $connect->prepare("SELECT projects.id AS project, projects.title,thumbnail, projects.project_brief, category.title AS category, GROUP_CONCAT(media.image_video) AS media_files FROM projects JOIN media ON projects.id = media.project_id JOIN category ON category.id = projects.category_id GROUP BY projects.id");

$stmt->execute();




?>





<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/m-logo.svg"  rel="icon" type="image/x-icon">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Poppins:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <!-- <script defer src="js/thirdparty.js"></script> -->
    <script defer src="js/contact-form.js"></script>
    <script defer src="js/scroll-trig.js"></script>
    <script defer src="js/scrollto.js"></script>
    <script type="module" src="js/main.js"></script>
    <title>Madzen</title>
</head>

<body>
    <main class="svg-container">
    <h1 class="hidden">Welcome, To ME!!!! all Me aka Mari</h1>

    <header id="header-con">
        <h1 class="hidden">Welcome, To ME!!!! all Me aka Mari</h1>
  <div class="grid-con">
    <!-- Logo Section -->
        <div class="col-span-full m-col-start-1 m-col-end-6 top">
          <img src="images/madzen-logo-aqua.svg" alt="logo" class="logo">
        </div>

               <!-- Navigation Menu -->
          <nav id="main-nav" class="col-span-full m-col-start-4 m-col-end-11">
     
              <button class="button"></button>
                 <div class="burger-con">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a class="project-scroll" href="#p">Projects</a></li>
                        <li><a href="about.html">About</a></li>
                        
                    </ul>
                  </div>
           </nav>
        
 

        <div class="col-span-full m-col-start-1 m-col-end-7" id="text1">
            
            <h2 class="header-hello">Hi my name is AMARI BUCK </h2>
        </div>

        <div class="col-span-full m-col-start-1 m-col-end-7" >
            <!-- <h2 class="header-text-blue" id="typewriter">Motion designer</h2> -->
            <h3 class="text typewriter"><span class="blinkCursor">_</span></h3>
        </div>

        <div class="col-span-full m-col-start-1 m-col-end-7 left-align recent" id="whitey">
            <p>So, if my work has left you wondering, "Who is this guy?" let me introduce myself and give you the lowdown. And just so you know, the picture to the right is indeed me—no catfish here, I promise!</p>
        </div>

        <img src="images/kiku-bk-less.png" alt="earbuds" class="desk main-image col-span-full m-col-start-7 m-col-end-13">

        <a class="btn-scroll" href="#contact-hero-form">
        <div class="button col-span-full m-col-start-1 m-col-end-4 l-col-start-1 l-col-end-4" id="get-in-touch2">
            <p>Get In Touch</p>
        </div>
        </a>
  

    </div>
    </header>



    <!-- Main Project Section the best work i have to showcase -->
    <section>
        <h2 class="hidden"> yea imma just repeat this lol</h2>
        <div class="grid-con">
        <h3 class="col-span-full top-header" id="p2">Demo Reel</h3>

        <div class="first-blue col-start-1 col-end-4 m-col-start-1 m-col-end-7 trigger3"></div>
        </div>


        <div class="grid-con">

        
            <section id="player-container" class="col-span-full player-container trigger1">
               
              <video controls preload="metadata" poster="images/placeholder.png">
                <source src="video/final.3.mp4" type="video/mp4" />
                <source src="video/video.webm" type="video/webm" />
                <p>Your browser does not support the video tag.</p>
              </video>
              <div class="video-controls hidden" id="video-controls">
                <button id="play-button"><i class="fa fa-play-circle-o"></i></button>
                <button id="pause-button">
                  <i class="fa fa-pause-circle-o"></i>
                </button>
                <button id="stop-button"><i class="fa fa-stop-circle-o"></i></button>
                <i class="fa fa-volume-up"></i>
                <input
                  type="range"
                  id="change-vol"
                  step="0.05"
                  min="0"
                  max="1"
                  value="1"
                />
               
                <button id="full-screen"><i class="fa fa-arrows-alt"></i></button>
            
              
                <input type="range" id="video-progress" min="0" max="100" value="0" step="1" />
           
            </section>
          </div>
          <div class="grid-con">
          <div class="sec-blue col-start-2 col-end-5 m-col-start-6 m-col-end-13 l-col-start-6 l-col-end-13 trigger4"></div>
          </div>

    </section>


   

     <!-- Projects display section-->
    <section>
        <h2 class="hidden"> yea imma just repeat this lol</h2>
        
<div class="grid-con">
            <h3 class="col-span-full top-header" id="p">Portfolio Projects</h3>
     
            <div id="portfolio-cards" class="col-span-full">
    <div class="row">
    <?php
// Initialize $cell variable for column control
$cell = 0;

if ($stmt && $stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Increase the $cell counter
        if ($cell == 3) {
            $cell = 1; // Reset to the first column if it reaches 3
        } else {
            $cell++;
        }

        // Define column positions based on $cell value
        $columnClass = '';
        if ($cell == 1) {
            $columnClass = 'l-col-start-1 l-col-span-2';
        } elseif ($cell == 2) {
            $columnClass = 'l-col-start-5 l-col-span-2';
        } else {
            $columnClass = 'l-col-start-9 l-col-span-2';
        }

        echo "
            <div class='cards col-span-full $columnClass'>
                <img src='images/" .($row['thumbnail']) . "' alt='main'>
                <h3>" .($row['title']) . "</h3>
                <h3>" .($row['category']) . "</h3>
                <div class='button-mini'>
                    <a href='detail.php?id=" .($row['project']) . "'><p>view project</p></a>
                </div>
            </div>";
    }
} else {
    echo "No projects found.";
}
?>
    </div>
</div>


</div>





    <!-- Contact Section -->
    <div class="blue-2">
        <section class="grid-con">
            <h2 class="col-span-full wit">Contact Me</h2>
            <h3 class="col-span-full l-col-start-1 l-col-end-6 lig">This Is Where the Magic Happens</h3>
            <p class="col-span-full l-col-start-1 l-col-end-6 wit-2">
                Let's turn the impossible into reality! I'll be in touch within 2 business days.
            </p>
            <h3 class="col-span-full lig-2">Let's Link Up</h3>
        </section>

        <div id="contact-hero-form" class="grid-con trigger2">
            <div class="col-span-full l-col-start-1 l-col-end-7">
                <form id="contactForm">
                    <input name="fullname" type="text" placeholder="First & Last Name">
                    <input name="phone" type="text"  placeholder="Phone">
                    <input name="email" type="email"  placeholder="Email">
                    <!-- <div class="custom-select col-span-full">
                        <select id="help" name="reason" class="form-select" >
                            <option value="" disabled selected>How can I help</option>
                            <option value="design">Design</option>
                            <option value="web">Web</option>
                        </select>
                    </div> -->
            </div>   
            <div class="col-span-full l-col-start-7 l-col-end-13">       
                <textarea name="comments" placeholder="Enter your questions, comments, or concerns here..." ></textarea>
                <input name="submit" type="submit" value="Send">
				<section id="feedback"><p>*Please fill out all required sections</p></section>


                </form>
            </div>  
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="grid-con">
            <nav id="footer-nav" class="col-span-full">
                <ul>
                   
                    <li><a class="project-scroll" href="#p">. PROJECTS</a></li>
                    <li><a href="about.html">. ABOUT</a></li>
                    <li><a href="#">. TERMS OF USE</a></li>
                    <li><a href="#">. PRIVACY POLICY</a></li>
                </ul>
            </nav>

            <div id="footer-nav-2" class="col-span-full">
                <ul>
                    <li><a href="https://www.linkedin.com/in/amari-buck-ba1932323/" target="_blank"><img src="images/linkedin.svg" alt="LinkedIn" class="icon"></a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=61573489544363" target="_blank"><img src="images/facebook.svg" alt="facebook" class="icon"></a></li>
                    <li><a href="https://www.instagram.com/amarimadzen/" target="_blank"><img src="images/instagram.svg" alt="Instagram" class="icon"></a></li>
                </ul>
            </div>
            
            <p class="col-span-full wit-3">©2024 Amari Buck. All Rights Reserved.</p>
        </div>
    </footer>



    </main>  
</body>



</html>
