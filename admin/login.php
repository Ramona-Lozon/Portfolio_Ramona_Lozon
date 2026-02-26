<?php
session_start();
//loads connect file
require_once '../includes/connect.php';
// get the portfolio class from the class folder which has the database
use Portfolio_Ramona_Lozon\Database;

//make a new instance of database
$db = new Database();
$error = '';

//login function

//ask if user submitted a form instead of a get request
//did that form get submitted using a login button using isset
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
//store username and password that were submitted on this page
    $username = $_POST['username'];
    $password = $_POST['password'];
//this will define results as a username fetched from the database    
//find spot in database to store the username and password
// :username, ['username'=> $username] prevents sql injection 
    $results = $db->query('SELECT * FROM users WHERE username = :username', ['username' => $username]);
//see if the password matches the one in the databse
// password_verify will be able to de-hash stored password 

// if username and varified password were found
    if ($results && password_verify($password, $results[0]['password'])) {
//if both are found store them in a session
    $_SESSION['user_id'] = $results[0]['id'];
    $_SESSION['username'] = $results[0]['username'];
//send user who started session to the dashboard
// header() sends them there
    header('Location dashboard.php');
//exit stops the code from running or looping
    exit;} 
//if the login function failed, display error    
    else {$error = 'Wrong username or password';
    }
}
//end of login function

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
                    <li class="hover-item"><a class="button" href="home.html">Home</a></li>
                    <li class="hover-item"><a class="button" href="work.php">Work</a></li>
                    <li class="hover-item"><a class="button" href="about.html">About</a></li>
                    <li class="hover-item"><a class="button" href="contact.html">Contact</a></li>
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

    <hr>
</main>
</body>
</html>