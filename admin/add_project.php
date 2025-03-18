<?php
require_once('../include/connect.php');



$random = rand(10000,99999); 
$newname = 'image'.$random; 



$filetype = strtolower(pathinfo($_FILES['image_video']['name'], PATHINFO_EXTENSION));



if($filetype == 'jpeg') {
  $filetype = 'jpg'; 
}



if($filetype == 'exe') {
  exit('nice try'); 
}


$newname .= '.'.$filetype;
$target_file = '../images/'.$newname;



if(move_uploaded_file($_FILES['image_video']['tmp_name'], $target_file)) {



$query = "INSERT INTO projects (title, project_brief, done_by, market_analyise, brand_strategy, design_process, challenges, conclusion_and_learnings, category_id, thumbnail) VALUES (?,?,?,?,?,?,?,?,?,?)";
$stmt = $connect->prepare($query);
$stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['project_brief'], PDO::PARAM_STR);
$stmt->bindParam(3, $_POST['done_by'], PDO::PARAM_STR);
$stmt->bindParam(4, $_POST['market_analyise'], PDO::PARAM_STR);
$stmt->bindParam(5, $_POST['brand_strategy'], PDO::PARAM_STR);
$stmt->bindParam(6, $_POST['design_process'], PDO::PARAM_STR);
$stmt->bindParam(7, $_POST['challenges'], PDO::PARAM_STR);
$stmt->bindParam(8, $_POST['conclusion_and_learnings'], PDO::PARAM_STR);
$stmt->bindParam(9, $_POST['category_id'], PDO::PARAM_INT);
$stmt->bindParam(10, $newname, PDO::PARAM_STR);


$stmt->execute();


$last_id = $connect->lastInsertId();

$stmt = null;

$mediaquery = "INSERT INTO media (image_video, project_id) VALUE (?,?)";

$stmt2 = $connect->prepare($mediaquery);
$stmt2->bindParam(1, $newname, PDO::PARAM_STR);
$stmt2->bindParam(2, $last_id, PDO::PARAM_INT);

$stmt2->execute();
$stmt2 = null;

//Now, use the newly created id in a second query, to insert as a foreign key (project_id) into media, other tables where project_id is needed.

//new INSERT query for media table, with the filename and the foreign key
       
// Handle multimedia image uploads

    //    if (!empty($_FILES['images']['name'][0])) {
    //     $query2 = "INSERT INTO multimedia (project_id, media_name) VALUES (?, ?)";
    //     $stmt2 = $connect->prepare($query2);

    //     foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
    //         $file_name = $_FILES['images']['name'][$key];
    //         $filetype = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    //         if ($filetype == 'jpeg') {
    //             $filetype = 'jpg';
    //         }

    //         if ($filetype == 'exe') {
    //             continue; // Skip invalid files
    //         }

    //         $media_newname = 'media' . rand(10000, 99999) . '.' . $filetype;
    //         $media_target = '../images/' . $media_newname;

    //         if (move_uploaded_file($tmp_name, $media_target)) {
    //             $stmt2->execute([$last_id, $media_newname]);
    //         }
    //     }
    //     $stmt2 = null;
    // }

    header('Location: project_list.php');
}

?>