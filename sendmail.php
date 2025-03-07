<?php
header("Content-Type: application/json; charset=UTF-8");


require_once('include/connect.php'); // Ensure this contains the PDO connection as $connect

// Gather the form content
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
// $reason = $_POST['reason'];
$comment = $_POST['comments'];

$errors = [];

// Validate and clean these values
$fullname = trim($fullname);
$phone = trim($phone );
$email = trim($email);
// $reason = trim($reason);
$comment = trim($comment);

if (empty($fullname)) {
    $errors['fullname'] = 'full Name Name can\'t be empty';
}

if (empty($phone)) {
    $errors['phone'] = 'Phone Field can\'t be empty';
}

if (empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

// if (empty($reason)) {
//     $errors['reason'] = 'Reason field can\'t be empty';
// }

if (empty($comment)) {
    $errors['comments'] = 'Comment field can\'t be empty';
}

if (empty($errors)) {
        // Insert into the database
        $query = "INSERT INTO contact (fullname, phone, email, comment) VALUES (?, ?, ?, ?)";
        
        $stmt = $connect->prepare($query);
        $stmt->bindParam(1, $fullname, PDO::PARAM_STR);
        $stmt->bindParam(2, $phone, PDO::PARAM_STR);
        $stmt->bindParam(3, $email, PDO::PARAM_STR);
        $stmt->bindParam(4, $comment, PDO::PARAM_STR);

        if($stmt->execute()) {

        // Send email notification
        // $to = 'madzen@gmail.com';
        // $subject = 'Message from your Portfolio site!';
        // $message = "You have received a new contact form submission:\n\n";
        // $message .= "Name: " . $fullname . "\n";
        // $message .= "Phone: " . $phone . "\n";
        // $message .= "Email: " . $email . "\n\n";
        // $message .= "Message: " . $comment . "\n\n";

        // mail($to, $subject, $message);

    echo json_encode(array("message" => "Form submitted. Thank you for your interest!"));

    
        }   
        $stmt = null;
} else {
    echo json_encode(array("errors" => array_values($errors)));
}
?>
