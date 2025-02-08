<html>
<?php
require_once('include/connect.php');

$query = "SELECT projects.id AS project, projects.title, projects.project_brief, projects.done_by, projects.market_analyise, projects.brand_strategy, projects.design_process, projects.challenges, projects.conclusion_and_learnings,projects.links_to_other_projects, projects.thumbnail, GROUP_CONCAT(media.image_video) AS media FROM projects JOIN media ON projects.id = media.project_id WHERE projects.id = :id GROUP BY projects.id";


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
    
    <title>Mazen Project Info</title>
</head>
<body>
<header id="header-con">
        <h1 class="hidden">Welcome, To ME!!!! all Me aka Mari</h1>
        <div class="grade mob"></div>
  <div class="grid-con">
    <!-- Logo Section -->
    <div class="grade desktop col-span-full m-col-start-1 m-col-end-13"></div>
        <div class="col-span-full m-col-start-1 m-col-end-6 top">
          <img src="images/madzen-logo-aqua-copy.svg" alt="logo" class="logo">

               <!-- Navigation Menu -->
          <nav id="main-nav-2" class="col-span-full m-col-start-4 m-col-end-11">
     
              <button class="button"></button>
                 <div class="burger-con">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#about">About</a></li>
                        
                    </ul>
                  </div>
           </nav>
        </div>
    
</header>
<main>

<section>

    <div class="grid-con">
        <h2 class="col-span-full detail-main">This One Caught Your Eye?</h2>
    </div>

        <div class="grid-con">
            <p class="col-span-full p-main" id="pm">Let my visuals nourish your mind and enjoy the creative ambiance. Allow me to guide you through my process step by step, 
                providing all the details for this project below.</p>

            </div>



<div class="grid-con">
    <?php echo '<div class="lower-header col-span-full"> <p>' . $row['title'] . '</p> </div>'; ?>
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

    
                    <div class="col-span-full l-col-start-8 l-col-end-13 main-image"> 
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


</div>   



    <footer class="footer">
      <div class="grid-con">
        <nav id="footer-nav" class="col-start-1 col-end-3 m-col-start-1 m-col-end-4">
          <div>
            <ul>
              <li><a href="#contact">CONTACT</a></li>
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