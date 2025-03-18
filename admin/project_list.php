<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if(!isset($_SESSION['username'])) {
  header('location: login_form.php');
}

require_once('../include/connect.php');
$stmt = $connect->prepare('SELECT id,title FROM projects ORDER BY title ASC');
$stmt->execute();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Main Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">

</head>
<body>

<?php

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

  echo  '<p class="project-list">'.
  $row['title'].
  '<a href="edit_project_form.php?id='.$row['id'].'">edit</a>'.

  '<a href="delete_project.php?id='.$row['id'].'">delete</a></p>';
}

$stmt = null;

?>
<br><br><br>
<h3>Add a New Project</h3>


<form action="add_project.php" method="post" enctype="multipart/form-data">
    <label for="title">project title: </label>
    <input name="title" type="text" required><br><br>

    <label for="image_video">Project Image: </label>
    <input name="image_video" type="file" required><br><br>

    <label for="done_by">Done By: </label>
    <input name="done_by" type="text" required><br><br>

    <label for="project_brief">Project Brief: </label>
    <textarea name="project_brief" required></textarea><br><br>

    <label for="market_analyise">Market Analysis: </label>
    <textarea name="market_analyise" required></textarea><br><br>

    <label for="brand_strategy">Brand Strategy: </label>
    <textarea name="brand_strategy" required></textarea><br><br>

    <label for="design_process">Design Process: </label>
    <textarea name="design_process" required></textarea><br><br>

    <label for="challenges">Challenges: </label>
    <textarea name="challenges" required></textarea><br><br>

    <label for="conclusion_and_learnings">Conclusion and Learnings: </label>
    <textarea name="conclusion_and_learnings" required></textarea><br><br>

    <label for="category_id">Category ID: </label>
    <input name="category_id" type="text" required><br><br>
    
    <label for="image_video">Project Image: </label>
    <input name="image_video" type="file" required><br><br>



    <input name="submit" type="submit" value="Add">
</form>
<br><br><br>
<a href="logout.php">log out</a>
</body>
</html>
