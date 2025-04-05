<html>
<?php
require_once('include/connect.php');

$query = "SELECT projects.id AS project, projects.title, projects.project_brief, projects.done_by, projects.market_analyise, projects.brand_strategy, projects.design_process, projects.challenges, projects.conclusion_and_learnings, projects.thumbnail, GROUP_CONCAT(media.image_video) AS media FROM projects JOIN media ON projects.id = media.project_id WHERE projects.id = :id GROUP BY projects.id";


$stmt = $connect->prepare($query);
$id = $_GET['id'];
$stmt->bindParam(':id', $id , PDO::PARAM_INT);

$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = null;
// $results = mysqli_query($connect,$query);

// $row = mysqli_fetch_assoc($results);

$image_array = explode(',', $row['media']);

// visual check
// echo '<pre style="color: red;">';
// print_r($image_array);
// echo '</pre>';

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
        
        </div>
    
</header>
<main>

<section>





<div class="grid-con">
    <?php echo '<div class="lower-header   col-span-full"> <p>' . $row['title'] . '</p> </div>'; ?>
    </div>


    <div class="grid-con">

             


<?php echo '
                    <section id="player-container-2" class="col-span-full l-col-start-1 l-col-end-8 player-container">
                    
                    <video controls preload="metadata" poster="images/placeholder.jpg">
                       <source src="video/'.$image_array[0].'" type="video/mp4" />
                        
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

    
                    <div class="col-span-full l-col-start-8 l-col-end-13 main-image2"> 
                        <img src="images/'.$image_array[1].'" alt="main">
                    </div> ' ; ?>

</div>

</section>
<div class="grid-con">
<div class="lower-header col-span-full"><p>Project Explaination</p></div>
<?php echo '<div class="col-span-full p-main-2"> <p>' . $row['project_brief'] . '</p> </div>'; ?>

<div class="lower-header col-span-full"><p>Case Study</p></div>
<?php echo '<div class="col-span-full p-main-2"> <p> This project was done by: ' . $row['done_by'] . '</p> </div>'; ?>
</div>

<div class="grid-con">
<?php echo '<div class="col-span-full p-main-2"> <p> <span class=heavy> Market Analysis:</span> ' . $row['market_analyise'] . '</p> </div>'; ?>
</div>

<div class="grid-con">
<?php echo '<div class="col-span-full p-main-2"> <p> <span class=heavy> Brand Strategy:</span> ' . $row['brand_strategy'] . '</p> </div>'; ?>
</div>

<div class="grid-con">
<?php echo '<div class="col-span-full p-main-2"> <p> <span class=heavy> Design Process:</span> ' . $row['design_process'] . '</p> </div>'; ?>
</div>

<div class="grid-con">
<?php echo 
'
        <div class="col-span-full m-col-start-1 m-col-end-5 d-image"><img src="images/'.$image_array[2].'" alt="promo images" ></div>

        <div class="col-span-full m-col-start-5 m-col-end-9 d-image"><img src="images/'.$image_array[3].'" alt="promo images" ></div>
        <div class="col-span-full m-col-start-9 m-col-end-13 d-image"><img src="images/'.$image_array[4].'" alt="promo images" ></div>
'; 
?>
</div>

<div class="grid-con">
<?php echo '<div class="col-span-full p-main-2"> <p> <span class=heavy> Challenges:</span> ' . $row['challenges'] . '</p> </div>'; ?>
</div>

<div class="grid-con">
<?php echo '<div class="col-span-full p-main-2"> <p> <span class=heavy> Conclusion and learnings:</span> ' . $row['conclusion_and_learnings'] . '</p> </div>'; ?>
</div>

</main>

<div class="grid-con">

    <div class="lower-header col-span-full"><p>Check Out some of my other Projects!</p></div>

    <p class="col-span-full m-col-start-1 m-col-end-8 p-main">Let my visuals nourish your mind and enjoy the creative ambiance. Allow me to guide you through my process step by step, 
        providing all the details for this project below.</p>

<div id="portfolio-cards" class="col-span-full">
<div class="row">
<?php
$query2 = 'SELECT projects.id AS project, projects.title, thumbnail, projects.project_brief, category.title AS category, GROUP_CONCAT(media.image_video) AS media_files FROM projects JOIN media ON projects.id = media.project_id JOIN category ON category.id = projects.category_id GROUP BY projects.id';

$stmt2 = $connect->prepare($query2);
$stmt2->execute();

// Initialize $cell variable for column control
$cell = 0;

if ($stmt2->rowCount() > 0) {
    while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
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
        <a href='detail.php?id=" .($row['project']) . "' class='card-link'>
            <div class='cards'>
                <img src='images/" .($row['thumbnail']) . "' alt='main'>
                <h3>" .($row['title']) . "</h3>
                <h3>" .($row['category']) . "</h3>
                <div class='button-mini'>
                    <p>view project</p>
                </div>
            </div>
        </a>"; 
    }
} else {
    echo "No projects found.";
}
?>

</div>
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
                   
                    <li><a href="#projects">. PROJECTS</a></li>
                    <li><a href="#about">. ABOUT</a></li>
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





   
   
</body>
</html>