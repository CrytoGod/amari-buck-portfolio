<?php
//connecting to the portfolio database
require_once('include/connect.php');



//gather elements from the submitted form

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$comments = $_POST['comments'];



// check form items for errors

$fname = trim($fname);
$lname = trim($lname);
$email = trim($email);
$comments = trim($comments);



// inserts new row in the contacts table

$query ="INSERT INTO contacts(id, fname, lname, email, comments) VALUES (NULL, '".$fname."','".$lname."','".$email."','".$comments."')" ;

mysqli_query($connect, $query);

header('Location: contact.php');


//format an email and email it to myself

























?>