<?php
require_once('../include/connect-live.php');
$query = 'DELETE FROM projects WHERE projects.id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$stmt = null;
header('Location: project_list.php');
?>