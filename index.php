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

$query = 'SELECT projects.id AS project, projects.title,thumbnail, projects.project_brief, category.title AS category, GROUP_CONCAT(media.image_video) AS media_files FROM projects JOIN media ON projects.id = media.project_id JOIN category ON category.id = projects.category_id GROUP BY projects.id
';

$results = mysqli_query($connect, $query);


?>





<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/Madzen-browser-icon.ico"  rel="icon" type="image/x-icon">
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
    
    <title>Madzen</title>
</head>

<body>
    <h1 class="hidden">Welcome, To ME!!!! all Me aka Mari</h1>

    <header id="header-con">
        <h1 class="hidden">Welcome, To ME!!!! all Me aka Mari</h1>
  <div class="grid-con">
    <!-- Logo Section -->
        <div class="col-span-full m-col-start-1 m-col-end-6 top">
          <img src="images/madzen-logo-aqua.svg" alt="logo" class="logo">

               <!-- Navigation Menu -->
          <nav id="main-nav" class="col-span-full m-col-start-4 m-col-end-11">
     
              <button class="button"></button>
                 <div class="burger-con">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#p">Projects</a></li>
                        <li><a href="#about">About</a></li>
                        
                    </ul>
                  </div>
           </nav>
        </div>
 

        <div class="col-span-full m-col-start-1 m-col-end-7" id="text1">
            
            <h2 class="header-hello">Hi my name is AMARI BUCK </h2>
        </div>

        <div class="col-span-full m-col-start-1 m-col-end-7" id="typewriter">
            <h2 class="header-text-blue">Motion designer</h2>
        </div>

        <div class="col-span-full m-col-start-1 m-col-end-7 left-align" id="whitey">
            <p>I specialize in creating engaging motion graphics and designing user-friendly, accessible websites that combine simplicity with effectiveness.</p>
        </div>

        <div class="col-span-full m-col-start-9 m-col-end-13 l-col-start-9 l-col-end-13" id="main-image"> 
            <img sizes="100vw"
            srcset="images/mobile-hero.png 412w,
            images/tablet-hero.png 768w,
            images/desk-hero.png 1200w"
            src="images/desk-hero.png"alt="main">
        </div>

    </div>
    </header>



    <!-- Main Project Section the best work i have to showcase -->
    <section>
        <h2 class="hidden"> yea imma just repeat this lol</h2>
        <div class="grid-con">
        <div class="first-blue col-start-1 col-end-4 m-col-start-1 m-col-end-7"></div>
        </div>


        <div class="grid-con">
            <section id="player-container" class="col-span-full player-container">
               
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
          <div class="sec-blue col-start-2 col-end-5 m-col-start-6 m-col-end-13 l-col-start-6 l-col-end-13"></div>
          </div>

        <div >
            <div class="grid-con">

             
                <div class="top-header col-start-1 col-end-3"> <h3>Kiku</h3> </div>

                
                                    <section id="player-container-2" class="col-span-full l-col-start-1 l-col-end-8 player-container">
                                    
                                    <video controls preload="metadata" poster="images/placeholder.jpg">
                                        <source src="video/kiku-video.mp4" type="video/mp4" />
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
                                    
                                    
                                        <input type="range" id="video-progress" min="0" max="100" value="0" step="1" class="col-span-full"/>
                                
                                    </section>
                
                    
                                    <div class="col-span-full l-col-start-8 l-col-end-13 main-image"> 
                                        <img src="images/kiku.png" alt="main">
                                    </div>
                

                <div class="lower-header col-span-full"> <p>Project Brief</p> </div>
                
                <div class="col-span-full recent"> <p>For my recent project at Serenity Cove Couples Resort, I created the "Enchanted Evenings Experience," which transformed the resort with 
                    themed environments like Starlit Gardens and Whispering Waterfalls to provide couples with unforgettable romantic getaways.</p>
                </div>

                <div class="button col-span-full l-col-start-1 l-col-end-4">
                        <p>Start Viewing</p>
                </div>
                
                
                
            </div>

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

        if ($results && mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_array($results)) {
                // Increase the $cell counter
                if ($cell == 3) {
                    $cell = 1; // Reset to the first column if it reaches 3
                } else {
                    $cell++;
                }

                // Depending on the $cell value, decide which column the card will go to
                if ($cell == 1) {
                    // Left column
                    echo '
                        <div class="cards col-span-full l-col-start-1 l-col-span-2">
                            <img src="images/' . $row['thumbnail'] . '" alt="main">
                            <h3>' . $row['title'] . '</h3>
                            <h3>' . $row['category'] . '</h3>
                            <div class="button-mini">
                                <a href="detail.php?id=' . $row['project'] . '"><p>view project</p></a>
                            </div>
                        </div>';
                } else if ($cell == 2) {
                    // Middle column
                    echo '
                        <div class="cards col-span-full l-col-start-5 l-col-span-2">
                            <img src="images/' . $row['thumbnail'] . '" alt="main">
                            <h3>' . $row['title'] . '</h3>
                            <h3>' . $row['category'] . '</h3>
                            <div class="button-mini">
                                <a href="detail.php?id=' . $row['project'] . '"><p>view project</p></a>
                            </div>
                        </div>';
                } else {
                    // Right column
                    echo '
                        <div class="cards col-span-full l-col-start-9 l-col-span-2">
                            <img src="images/' . $row['thumbnail'] . '" alt="main">
                            <h3>' . $row['title'] . '</h3>
                            <h3>' . $row['category'] . '</h3>
                            <div class="button-mini">
                                <a href="detail.php?id=' . $row['project'] . '"><p>view project</p></a>
                            </div>
                        </div>';
                }
            }
        } else {
            echo "No projects found.";
        }
        ?>
    </div>
</div>


</div>


            <div class="grid-con">
                <div class="col-span-full top-header"><h3 id="my-skills">My Skills:</h3>
                    <img src="images/skills-icon-desk.svg" alt="skills" class="skills desktop">
                    <img src="images/skills-icons-mobile.svg" alt="skills" class="skills mob">
                </div>

            </div>

           <div id="zima-banner"><img src="images/banner-zima.png" alt="zima-banner"></div> 

        <div class="grid-con">  
              <h3 class="lower-header col-start-1 col-end-4 l-col-start-1 l-col-end-6"> Like what you see!</h3>
            <p class="col-span-full l-col-start-1 l-col-end-7 recent">Feel free to reach out! I'm eager to collaborate and bring your visions to life. Let's create something amazing together!</p>

            <div class="button col-span-full l-col-start-10 l-col-end-13" id="link-up">
                <p>Lets Link Up</p>
            </div>
        </div>
    </section>


    <div class="col-span-full m-col-start-1 m-col-end-5 me" ><img src="images/Subject.png" alt="me" id="about"></div>
    <div class="blue"></div> 
     <!-- About me section -->
    <section class="grid-con">


        <div class=" col-span-full m-col-start-6 m-col-end-13">
         
        <h2 class="white"> About Me</h2>

        <p class="white-2">So, if my work has left you wondering, "Who is this guy?" 
            let me introduce myself and give you the lowdown. And just so you know, the picture to the right is indeed me no catfish here, I promise!</p>
        </div>

     
        <img src="images/file.svg" alt="jp" class="desk abt-img col-span-full m-col-start-1 m-col-end-6">

        <p class="col-span-full m-col-start-6 m-col-end-13 recent" id="down" >Hey there, I'm Amari, a proud graduate of the College of Fanshawe. Art has always been my passion, with drawing being my sanctuary since childhood. As I grew, my artistic journey naturally evolved into design, a realm seemingly different yet deeply intertwined with my creative spirit. Falling head over heels for this craft, I embraced it wholeheartedly, adding it to my arsenal of skills. I'm all about pushing boundaries and constantly honing my craft, striving to put my best foot forward with every project. I firmly believe in the endless possibilities that creativity holds, and I'm thrilled to embark on this journey with you. Let's turn your ideas into tangible realities, showing you that it's not just a fantasy but a promise waiting to be fulfilled.</p>
        
        <p class="col-span-full m-col-start-6 m-col-end-13 move-up recent" id="space">I embrace change and value your feedback above all else, your satisfaction is my priority. I'm dedicated to catering to your specific needs, standing firmly by my convictions and promises. Consistency and reliability are my hallmarks, guided by the principle of the 5 Ps: 
            proper preparation prevents poor performance. When you choose to collaborate with me, you can expect nothing short of exceptional results that leave a lasting impression.</p>


        </section>


     <!-- Contact section -->
   <div class="blue-2">
    <section class="grid-con">
        <h2 class=" col-span-full l-col-start-1 l-col-end-6 wit"> Contact Me</h2>
        <h3 class="col-span-full l-col-start-1 l-col-end-6 lig">This Is Where the Magic Happens</h3>
        <p class="col-span-full l-col-start-1 l-col-end-6 wit-2">Let's turn the impossible into reality! Rest assured, I'll be in touch within 2 business days or even sooner ;)
            Simply fill out the information below, and let's make magic happen together.
            </p>
            <img src="images/mail.png" alt="mail" class=" l-col-start-6 l-col-end-13 desktop-2">
       

        <h3 class=" col-span-full lig-2">Lets Link Up</h3>

    </section>

    <div id="contact-hero-form" class="grid-con">
    <div class="col-span-full l-col-start-1 l-col-end-6">
        <form method="post" action="send_mail.php">
            <input name="fullname" type="text" placeholder="First & Last Name" required>
            <input name="email" type="email" required placeholder="Email">
            <input name="phone" type="text" required placeholder="Phone">
            <div class="custom-select col-span-full">
                <select id="help" name="help" class="form-select" required>
                    <option value="" disabled selected>How can I help</option>
                    <option value="design">Design</option>
                    <option value="web">Web</option>
                </select>
            </div>
    </div>   
    <div class="col-span-full l-col-start-6 l-col-end-12">       
        <textarea name="comments" placeholder="Enter your questions, comments, or concerns here..." required></textarea>
        <input name="submit" type="submit" value="Send" class="col-span-full l-col-start-6 l-col-end-12">
        </form>
    </div>  
</div>

                    

                 
                  
                 
        

        

 

</div>   



    <footer class="footer">
      <div class="grid-con">
        <nav id="footer-nav" class="col-start-1 col-end-3 m-col-start-1 m-col-end-4">
          <div>
            <ul>
              <li><a href="#contact-hero-form">CONTACT</a></li>
              <li><a href="#p">PROJECTS</a></li>
              <li><a href="#about">ABOUT</a></li>
            </ul>
          </div>
        </nav>
        <nav id="footer-nav" class="col-start-3 col-end-5 m-col-start-4 m-col-end-7">
            <div>
              <ul>
                <li><a href="#">TERMS OF USE </a></li>
                <li><a href="#">PRIVACY POLICY </a></li>
                
              </ul>
            </div>
          </nav>
          <img src="images/contact-icon.svg" alt="icon" class="col-span-full l-col-start-2 l-col-end-8 icon">

          <p class="col-span-full l-col-start-1 l-col-end-9 wit-3">All prices and services on this website and in our reservation system are based on conditions at the time of publishing and are subject to change. Please 
            contact us to confirm services, availability and pricing. ©2024 Amari Buck. All Rights Reserved. Privacy policy  </p>

      </div>
      <img src="images/anime-japanese-character-removebg-preview.png" alt="jp" class="col-span-full jpp">
    </footer>






    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/thirdparty.js"></script>
   
</body>



</html>
