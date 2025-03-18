<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['username'])) {
  header('location: login_form.php');
}

require_once('../include/connect.php');
$query = 'SELECT * FROM projects WHERE projects.id = :projectId';
$stmt = $connect->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);


$query2 = 'SELECT * FROM media WHERE project_id = :projectId';
$stmt2 = $connect->prepare($query2);
$stmt2->bindParam(':projectId', $projectId, PDO::PARAM_INT);



$stmt->execute();
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);




?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">

</head>
<body>



<!-- $query = "UPDATE projects SET title = ?,project_breif = ?,done_by = ?,market_analyise = ?,brand_strategy = ?,design_process = ?,challenges = ?,conclusion_and_learnings = ?,category_id = ?,thumbnail = ? WHERE id = ?"; -->
 
<form action="edit_project.php" method="POST">
<input name="pk" type="hidden" value="<?php echo $row['id']; ?>">
    <label for="title">project title: </label>
    <input name="title" type="text" value="<?php echo $row['title']; ?>" required><br><br>

    <label for="image_video">Project video: </label>
    <input name="image_video" type="file" required><br><br>

    <label for="project_brief">Project Breif: </label>
    <textarea name="project_brief" required><?php echo $row['project_brief']; ?></textarea><br><br>

    <label for="done_by">Done By: </label>
    <textarea name="done_by" required><?php echo $row['done_by']; ?></textarea><br><br>

    <label for="market_analyise">Market Analysis: </label>
    <textarea name="market_analyise" required><?php echo $row['market_analyise']; ?></textarea><br><br>

    <label for="brand_strategy">Brand Strategy: </label>
    <textarea name="brand_strategy" required><?php echo $row['brand_strategy']; ?></textarea><br><br>

    <label for="design_process">Design Process: </label>
    <textarea name="design_process" required><?php echo $row['design_process']; ?></textarea><br><br>

    <label for="challenges">Challenges: </label>
    <textarea name="challenges" required><?php echo $row['challenges']; ?></textarea><br><br>

    <label for="conclusion_and_learnings">Conclusion and Learnings: </label>
    <textarea name="conclusion_and_learnings" required><?php echo $row['conclusion_and_learnings']; ?></textarea><br><br>

    <label for="category_id">Category ID: </label>
    <input name="category_id" type="text" required value="<?php echo $row['category_id']; ?>"><br><br>

    <label for="thumbnail">Thumbnail: </label>
    <input name="thumbnail" type="file" required><br><br>



    <input name="submit" type="submit" value="Edit">
</form>
<?php
$stmt = null;
?>
</body>
</html>
