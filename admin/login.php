<?php
session_start();

require_once('../include/connect-live.php');
$query = 'SELECT * FROM users WHERE username = ? AND password =?';
$stmt = $connect->prepare($query);
$stmt->bindParam(1, $_POST['username'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['password'], PDO::PARAM_STR);
$stmt->execute();

//what can come back from the query?

//if sucessful, we should have one row

//if not sucessful, we should have no rows


if ($stmt->rowCount() == 1) {
//sucess stuff
$row =$stmt->fetch(PDO::FETCH_ASSOC);

$_SESSION['username'] = $row['username'];
header('location: project_list.php');

}else{
    header('location: login_form.php');
}



$stmt = null;
?>