<?php

require_once('includes/connect.php');

///gather the form content
$name = $_POST['name'];
$org = $_POST['org'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$errors = [];

//validate and clean these values

$name = trim($name);
$org = trim($org);
$email = trim($email);
$msg = trim($msg);

if(empty($name)) {
    $errors['name'] = 'field cant be empty';
}

if(empty($org)) {
    $errors['org'] = 'field cant be empty';
}

if(empty($msg)) {
    $errors['msg'] = 'field cant be empty';
}

if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

if(empty($errors)) {

    //insert these values as a new row in the contacts table

    $query = "INSERT INTO contacts (name, org, email, msg) VALUES('.$name.','.$org.','.$email.','.$msg.')";
//create table with names
//should inset these values into database
    if(mysqli_query($connect, $query)) {

//format and send these values in an email

$to = 'lozonramona@gmail.com';
$subject = 'Message from your Portfolio site!';

$message = "You have received a new contact form submission:\n\n";
$message .= "Name: ".$name."\n";
$message .= "Org: ".$org."\n";
$message .= "Email: ".$email."\n\n";
$message .= "Message" .$msg;

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