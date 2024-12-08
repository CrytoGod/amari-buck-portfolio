<?php
//connecting to the portfolio database
require_once('include/connect.php');



//gather elements from the submitted form

$fname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];



// check form items for errors

$fname = trim($fname);

$email = trim($email);
$phone = trim($phone);
$comments = trim($comments);



// inserts new row in the contacts table

$query ="INSERT INTO contact(id, fname, email, phone, comments) VALUES (NULL, '".$fname."','".$email."','".$phone."','".$comments."')" ;

mysqli_query($connect, $query);

header('Location: index.php');


//format an email and email it to myself

























?>