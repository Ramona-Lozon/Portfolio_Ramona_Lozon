<?php

require_once('connect.php');

///gather the form content
$name = $_POST['name'];
$org = $_POST['organization'];
$email = $_POST['email'];
$msg = $_POST['message'];

$errors = [];

//validate and clean these values

$name = trim($name);
$organization = trim($organization);
$email = trim($email);
$message = trim($message);

if(empty($lname)) {
    $errors['name'] = 'field cant be empty';
}

if(empty($organization)) {
    $errors['org'] = 'field cant be empty';
}

if(empty($message)) {
    $errors['comments'] = 'field cant be empty';
}

if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

if(empty($errors)) {

    //insert these values as a new row in the contacts table

    $query = "INSERT INTO contacts (name, organization, email, comments) VALUES('.$name.','.$organization.','.$email.','.$message.')";
//create table with names
//should inset these values into database
    if(mysqli_query($connect, $query)) {

//format and send these values in an email

$to = 'lozonramona@gmail.com';
$subject = 'Message from your Portfolio site!';

$message = "You have received a new contact form submission:\n\n";
$message .= "Name: ".$name."\n";
$message .= "Organization: ".$organization."\n";
$message .= "Email: ".$email."\n\n";
$message .= "Message" .$message;
//build out rest of message body...

mail($to,$subject,$message);

header('Location: index.php');
//this sends the user to index

}else{
    for($i=0; $i < count($errors); $i++) {
        echo $errors[$i].'<br>';
    }
}
}?>