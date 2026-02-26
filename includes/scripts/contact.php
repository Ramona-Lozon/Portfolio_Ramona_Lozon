<?php

session_start();

// var_dump($_POST);

spl_autoload_register(function ($class) {
    $class = str_replace('Portfolio\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/../../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows
    
    require_once $filepath;
});

use Portfolio\Database;

$title = $_POST['title'];

if ($title == null || $title == '') {
    echo "Title is required!";
    exit(1);
}

$description = $_POST['description'];

if (empty($description)) {
    echo 'Description is required!';
    exit(1);
}


$categoryId = $_POST['category_id'];
// do additional validation to confirm category exists, etc.

$database = new Database();
$database->query('INSERT INTO projects 
    (title, description, category_id) 
    VALUES (:title, :description, :categoryId);',
    [
        'title' => $title,
        'description' => $description,
        'categoryId' => $categoryId
    ]
);
$_SESSION['message'] = 'hello';

header('Location: /portfolio/contact.php');