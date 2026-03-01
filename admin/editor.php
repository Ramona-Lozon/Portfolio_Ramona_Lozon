
<?php
require_once 'auth.php';
use Portfolio_Ramona_Lozon\database;
spl_autoload_register(function ($class) {
    $class = str_replace('Portfolio_Ramona_Lozon\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows
    
    require_once $filepath;
});
require_once '../includes/scripts/edit.php';

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
                    <li class="hover-item"><a class="button" href="dashboard.php">Dashboard</a></li>
                    <li class="hover-item"><a class="button" href="../includes/scripts/logout.php">Log Out</a></li>
                </ul>
        </div>
        </div>
    </nav>
</header>

<body data-page="editor">

<main>
    <section class="dash-project-list">
    <h3 class="text main-title">Edit Project #<?= $id ?></h3>
    
    <form class="editor-form" method="POST" action="../includes/scripts/edit.php?id=<?= $id ?>">
        <label>
            <p class="text">Project Name:</p> 
            <input  
                class="form-box-dash"
                type="text" 
                name="project" 
                value="<?= $row['project'] ?>" required>
        </label>

        <label>
            <p class="text">Hero Image</p>
            <input  
                class="form-box-dash"
                type="text" 
                name="hero" 
                value="<?= $row['Hero'] ?>" required>
        </label>

        <label>
            <p class="text">Proposition:</p> 
            <textarea   
                class="form-box-dash"
                name="proposition" 
                required><?= $row['proposition'] ?>
            </textarea>
        </label>

        <label>
            <p class="text">Deliverables:</p>
            <textarea   
                class="form-box-dash"
                name="deliverables" 
                required><?= $row['deliverables'] ?>
            </textarea>
        </label>
    <br>
        <label>
            <p class="text">Outcome</p>
            <textarea   
                class="form-box-dash"
                name="outcome" 
                required><?= $row['outcome'] ?>
            </textarea>
        </label>

        <label>
            <p class="text">Proposition Image</p>
            <input  
                class="form-box-dash"
                    type="text" 
                    name="prop_ex" 
                    value="<?= $row['prop_ex'] ?>" required>
        </label>

        <label>
            <p class="text">Proposition Image Caption</p> 
            <textarea   
                class="form-box-dash"
                    name="prop_caption" 
                    required><?= $row['prop_caption'] ?>
            </textarea>
        </label>

        <label>
            <p class="text">Work Image</p> 
            <input  
                class="form-box-dash"
                    type="text" 
                    name="work_ex" 
                    value="<?= $row['work_ex'] ?>" required>
        </label>

        <label>
            <p class="text">Work Image Caption</p> 
            <input  
                class="form-box-dash"
                    type="text" 
                    name="work_caption" 
                    value="<?= $row['work_caption'] ?>" required>
        </label>

        <label>
            <p class="text">Product Image</p> 
            <input  
                class="form-box-dash"
                    type="text" 
                    name="product_ex" 
                    value="<?= $row['product_ex'] ?>" required>
        </label>

        <label>
            <p class="text">Product Image Caption</p>  
            <input  
                class="form-box-dash"
                    type="text" 
                    name="product_caption" 
                    value="<?= $row['product_caption'] ?>" required>
        </label>
    <br>
        <button class="button" type="submit">Save</button>
    </form>
</section>
    <footer></footer>
</main>
</body>
</html>