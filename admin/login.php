<?php
session_start();

spl_autoload_register(function ($class) {
    $class = str_replace('Portfolio_Ramona_Lozon\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows
    
    require_once $filepath;
});

use Portfolio_Ramona_Lozon\database;

//make a new instance of the database class
$database = new database();
$error = '';

//login function

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {

    $username = $_POST['username'];
    if ($username == null || $username == '') {
        echo "Username is Required";
        exit(1);
    }

    $password = $_POST['password'];
    if ($password == null || $password == '') {
        echo "Password is Required";
        exit(1);
    } 

    $results = $database->query('SELECT * FROM users WHERE 
    username = :username', ['username' => $username]);

    if ($results && password_verify($password, $results[0]['password'])) {
    $_SESSION['user_id'] = $results[0]['id'];
    $_SESSION['username'] = $results[0]['username'];
    header('Location: dashboard.php');
    exit;}    
    else {$error = 'Wrong username or password';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramona Lozon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/main.css">
    <script type="module" src="../js/main.js"></script>
</head>

<header>
    <nav>
        <div class="logo-con">
        <img id="logo" img src="../images/logo-colour-noText.svg" alt="logo">
        <div class="menu-con">
            <ul class="hamburger-dropdown">
                    <li class="hover-item"><a class="button" href="../index.html">Home</a></li>
                    <li class="hover-item"><a class="button" href="../work.php">Work</a></li>
                    <li class="hover-item"><a class="button" href="../about.html">About</a></li>
                    <li class="hover-item"><a class="button" href="../contact.html">Contact</a></li>
                </ul>
        </div>
        </div>
    </nav>
</header>

<body data-page="login">

<main class="cms-page">
    <h3 class="cms-title text">Admin Login</h3>

    <?php if ($error): ?>
        <p class="error-message">
            <?= htmlspecialchars($error) ?>
        </p>
    <?php endif; ?>

    <form method="POST" class="input-form-cms">
        <input  class="form-box-cms"
                type="text" 
                name="username" 
                placeholder="Username" required>

        <input  class="form-box-cms"
                type="password" 
                name="password" 
                placeholder="Password" required>

        <button class="button"
                type="submit" 
                name="login">
                Log In
        </button>
    </form>
</main>
</body>
</html>