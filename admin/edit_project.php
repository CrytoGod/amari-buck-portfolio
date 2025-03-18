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

if (file_exists($target_file)) {
  echo 'Sorry, file already exists.';
  $uploadOk = 0;
}

$newname .= '.'.$filetype;


$target_file = '../images/'.$newname;

    


if(move_uploaded_file($_FILES['image_video']['tmp_name'], $target_file)) {


$query = "UPDATE projects SET title = ?, project_brief = ?,done_by = ?,market_analyise = ?,brand_strategy = ?,design_process = ?,challenges = ?,conclusion_and_learnings = ?,category_id = ?,thumbnail = ? WHERE id = ?";

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
$stmt->bindParam(11, $_POST['pk'], PDO::PARAM_INT);


$stmt->execute();
$stmt = null;





$query2 = "UPDATE media SET image_video = ? WHERE project_id = ?";

$stmt2 = $connect->prepare($query2);
$stmt2->bindParam(1, $newname, PDO::PARAM_STR);
$stmt2->bindParam(2, $_POST['pk'], PDO::PARAM_INT);


$stmt2->execute();
$stmt2 = null;







header('Location: project_list.php');
}

