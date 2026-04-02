<?php
ini_set('display_errors', 0);
error_reporting(E_ALL);     
header('Content-Type: application/json');
spl_autoload_register(function ($class) {
    $class = str_replace('Portfolio_Ramona_Lozon\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $filepath = __DIR__ . '/../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath);
    require_once $filepath;
});

$name  = trim($_POST['name'] ?? '');
$org   = trim($_POST['org'] ?? '');
$email = trim($_POST['email'] ?? '');
$msg   = trim($_POST['msg'] ?? '');

$errors = [];
if(empty($name))  $errors['name']  = 'Name field cannot be empty';
if(empty($org))   $errors['org']   = 'Organization field cannot be empty';
if(empty($msg))   $errors['msg']   = 'Message field cannot be empty';
if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'You must provide a valid email';
}

if(empty($errors)) {
    $db = new \Portfolio_Ramona_Lozon\database();
    $db->execute(
        "INSERT INTO contacts (name, org, email, msg) VALUES (:name, :org, :email, :msg)",
        [
            'name' => $name,
            'org' => $org,
            'email' => $email,
            'msg' => $msg
        ]
    );
    $to = 'lozonramona@gmail.com';
    $subject = 'Message from your Portfolio site!';
    $message = "You have received a new contact form submission:\n\n";
    $message .= "Name: " . $name . "\n";
    $message .= "Org: " . $org . "\n";
    $message .= "Email: " . $email . "\n\n";
    $message .= "Message: " . $msg;
    $headers = "lozonramona@gmail.com.com\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    mail($to, $subject, $message, $headers);
    // temporary for local testing
echo json_encode(['status' => 'success', 'message' => 'Message sent successfully!']);
exit;
} else {
    echo json_encode(['status' => 'error', 'message' => implode(', ', $errors)]);
}
?>