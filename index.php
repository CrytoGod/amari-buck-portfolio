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

$query = 'SELECT projects.id AS project, done_by, brand_strategy, image_video FROM projects, media WHERE projects.id = media.id';

$results = mysqli_query($connect, $query);

?>


<?php

while($row = mysqli_fetch_array($results)) {

echo '<section>

<div class="max-w-md mb-4 mx-auto bg-white rounded-md shadow-md overflow-hidden md:max-w-2xl">
<div class="md:flex">
<div class="md:shrink-0">
<a href="details.php?id=';

echo $row['project']; // remember ['book']; is book.id

echo '"><img class="h-48 w-full object-cover md:h-full md:w-48" src="
images/';


echo $row['image'];



echo '" alt="Book Cover Art"></a>
</div>
<div class="p-8">
<div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">';


echo $row['title'];

echo '</div>
<a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">';


echo $row['name'];


echo '</a>
</div>
</div>
</div>
</section>';

}


?>







<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/Madzen-browser-icon.ico"  rel="icon" type="image/x-icon">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    
    <title>Madzen</title>
</head>

<body>
    <h1 class="hidden">Welcome, To ME!!!! all Me aka Mari</h1>

    <header id="main-header">
    <div class="grid-con">
       <!-- Desktop Logo -->
       <div class="col-start-1 col-end-2 l-col-start-1 l-col-end-2 logo">
        <a href="index.html">
            <img src="images/madzen-logo-aqua.svg" alt="Madzen Logo">
        </a>
    </div>

    <!-- Mobile Menu Button -->
    <div class="menu-button col-start-4 col-end-5" id="hamburger">
        <div class="mini-box"></div>
        <div class="mini-box"></div>
        <div class="mini-box"></div>
        <div class="mini-box"></div>
    </div>

    <!-- Navigation Menu -->
    <nav class="nav-bar col-span-full l-col-start-9 l-col-end-13" id="nav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>

        <div class="col-span-full l-col-start-1 l-col-end-13" id="text1">
            <h2 class="header-text-wt">HI There</h2>
            <h2 class="header-text-wt">My Name Is AMARI BUCK and I am a</h2>
        </div>

        <div class="col-span-full l-col-start-1 l-col-end-13" id="typewriter">
            <h2 class="header-text-blu">Motion designer</h2>
        </div>

        <div class="col-span-full l-col-end-13 left-align" id="whitey">
            <p>Welcome to my creative realm where 2D digital art, graphic design, and motion design intersect. With expertise in each discipline, I craft captivating visuals that push boundaries and captivate audiences. From intricate storytelling in digital art to sculpting brands in graphic design, and animating visions into dynamic realities with motion design, I specialize in turning ideas into digital masterpieces that inspire and defy expectations. What? don't believe me check out my works.</p>
        </div>

        <div class="button col-span-full l-col-start-1 l-col-end-4" id="main-button"> 
            <p>Start Viewing</p>
        </div>

    </div>
    </header>

    <!-- Main Project Section the best work i have to showcase -->
    <section>
        <h2 class="hidden"> yea imma just repeat this lol</h2>
        <div >
            <div class="grid-con">
                <div class="center-align col-span-full" id="trn"> <h2>My Projects</h2> </div>
                
                
                <div class="lower-header col-start-1 col-end-3"> <h3>Project Name</h3> </div>

                
                    <div class="video-player col-span-full l-col-start-1 l-col-end-7"></div>
                    <div class="main-media col-start-1 col-end-3 l-col-start-8 l-col-end-13"></div>
                

                <div class="lower-header col-start-3 col-end-5 l-col-start-1 l-col-end-3"> <h3>Project Brief</h3> </div>
                
                <div class="col-span-full" id="recent"> <p>For my recent project at Serenity Cove Couples Resort, I created the "Enchanted Evenings Experience," which transformed the resort with 
                    themed environments like Starlit Gardens and Whispering Waterfalls to provide couples with unforgettable romantic getaways.</p>
                </div>

                <div class="button col-span-full l-col-start-1 l-col-end-4">
                        <p>Start Viewing</p>
                </div>
                
                
                
            </div>

        </div>
    </section>

    <!-- Experience section -->
    <section class="grid-con">
        <h2 class="col-start-1 col-end-4"> I've Gratuated </h2>
        <!-- image goes here future and good lucking figuring out how to put a box behind a box -->
        <div class="image-size-1 col-span-full l-col-start-2 l-col-end-8"></div>
        <h2 class="col-start-1 col-end-3 l-col-start-8 l-col-end-11"> My Skills: </h2>
    </section>

     <!-- Projects display section-->
    <section>
        <h2 class="hidden"> yea imma just repeat this lol</h2>
        <div class="banner desk"></div>
        <div class="grid-con">
            <h3 class="col-span-full">Portfolio Projects</h3>
        
        </div>
            <div id="portfolio-cards ">
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
            </div>
        

        <div class="grid-con">  
              <h3 class="lower-header col-start-1 col-end-4"> Like what you see!</h3>
            <p class="col-span-full l-col-start-1 l-col-end-8">Feel free to reach out! I'm eager to collaborate and bring your visions to life. Let's create something amazing together!</p>

            <div class="button col-span-full l-col-start-9 l-col-end-13">
                <p>Lets Link Up</p>
            </div>
        </div>
    </section>

     <!-- About me section -->
    <section class="grid-con">
        <h2 class=" col-span-full"> About Me</h2>

        <p class="col-span-full l-col-start-1 l-col-end-7">So, if my work has left you wondering, "Who is this guy?" 
            let me introduce myself and give you the lowdown. And just so you know, the picture to the right is indeed me no catfish here, I promise!</p>
    
        <div class="about-me-img col-span-full l-col-start-7 l-col-end-13"></div>

        <a href="index.html"> <img src="images/file.png" alt="Madzen Logo" class="desk abt-img l-col-start-1 l-col-end-7"></a>

        <p class="col-span-full l-col-start-7 l-col-end-13">Hey there, I'm Amari, a proud graduate of the College of Fanshawe. Art has always been my passion, with drawing being my sanctuary since childhood. As I grew, my artistic journey naturally evolved into design, a realm seemingly different yet deeply intertwined with my creative spirit. Falling head over heels for this craft, I embraced it wholeheartedly, adding it to my arsenal of skills. I'm all about pushing boundaries and constantly honing my craft, striving to put my best foot forward with every project. I firmly believe in the endless possibilities that creativity holds, and I'm thrilled to embark on this journey with you. Let's turn your ideas into tangible realities, showing you that it's not just a fantasy but a promise waiting to be fulfilled.</p>
        
        <p class="col-span-full l-col-start-7 l-col-end-13 move-up">I embrace change and value your feedback above all else, your satisfaction is my priority. I'm dedicated to catering to your specific needs, standing firmly by my convictions and promises. Consistency and reliability are my hallmarks, guided by the principle of the 5 Ps: 
            proper preparation prevents poor performance. When you choose to collaborate with me, you can expect nothing short of exceptional results that leave a lasting impression.</p>

        <h3 class="col-span-full l-col-start-1 l-col-end-9">Don't delay, come join me! What are you waiting for?</h3>

        <div class="button col-span-full l-col-start-9 l-col-end-13">
            <p>LETS GO</p>
        </div>
    
        </section>

     <!-- Contact section -->
    <section class="grid-con">
        <h2 class=" col-span-full l-col-start-1 l-col-end-4"> Contact Me</h2>
        <h3 class="col-span-full l-col-start-1 l-col-end-4">This Is Where the Magic Happens</h3>
        <p class="col-span-full l-col-start-1 l-col-end-4">Let's turn the impossible into reality! Rest assured, I'll be in touch within 2 business days or even sooner ;)
            Simply fill out the information below, and let's make magic happen together.
            </p>
        
        <div class="box-contact desk l-col-start-9 l-col-end-13"></div>

        <h3 class=" col-start-1 col-end-3">Lets Link Up</h3>

        <form class="contact-form col-span-full l-col-start-1 l-col-end-7">
            <ul>
                <li>
                    <input type="text" name="first-name last-name" placeholder="First Name and Last Name" class="form-input">
                   
                </li>
                <li>
                    <input type="email" name="email" placeholder="Email" class="form-input">
                </li>
                <li>
                    <input type="tel" name="phone" placeholder="Phone" class="form-input">
                </li>
                <li class="form-group">
                    <label for="help" class="floating-label">How can I help?</label>
                    <select id="help" name="help" class="form-select">
                        <option value="" disabled selected></option>
                        <option value="design">Design</option>
                        <option value="web">Web</option>
                    </select>
                </li>
            </ul>
        </form>

        

    </section>

    <footer class="footer">

    </footer>







    <script src="js/main.js"></script>
   
</body>



</html>