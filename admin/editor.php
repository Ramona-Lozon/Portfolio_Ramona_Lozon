
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
    <h1>Edit Project #<?= $id ?></h1>
    
    <div>
    <a class="button" href="dashboard.php">Back</a>
    </div>

    <form method="POST" action="../includes/scripts/edit.php?id=<?= $id ?>">
        <label>
            Project Name: 
            <input  type="text" 
                    name="project" 
                    value="<?= $row['project'] ?>" required>
        </label>
    <br>
        <label>
            Proposition: 
            <textarea   name="proposition" 
                        required><?= $row['proposition'] ?>
            </textarea>
        </label>
    <br>
        <label>
            Deliverables: 
            <textarea   name="deliverables" 
                        required><?= $row['deliverables'] ?>
            </textarea>
        </label>
    <br>
        <label>Outcome: 
            <textarea   name="outcome" 
                        required><?= $row['outcome'] ?>
            </textarea>
        </label>
        <br>
        <hr>
        <label>
            Hero Image filename: 
            <input  type="text" 
                    name="hero" 
                    value="<?= $row['Hero'] ?>" required>
        </label>
    <br>
        <label>
            Proposition Image filename: 
            <input  type="text" 
                    name="prop_ex" 
                    value="<?= $row['prop_ex'] ?>" required>
        </label>
    <br>
        <label>
            Proposition Caption: 
            <textarea   name="prop_caption" 
                        required><?= $row['prop_caption'] ?>
            </textarea>
        </label>
    <br>
        <label>
            Work Image filename: 
            <input  type="text" 
                    name="work_ex" 
                    value="<?= $row['work_ex'] ?>" required>
        </label>
    <br>
        <label>
            Work Caption: 
            <input  type="text" 
                    name="work_caption" 
                    value="<?= $row['work_caption'] ?>" required>
        </label>
    <br>
        <label>
            Product Image filename: 
            <input  type="text" 
                    name="product_ex" 
                    value="<?= $row['product_ex'] ?>" required>
        </label>
    <br>
        <label>Product Caption: 
            <input  type="text" 
                    name="product_caption" 
                    value="<?= $row['product_caption'] ?>" required>
        </label>
    <br>
        <button type="submit">
            Save Changes
        </button>
    </form>

</main>
</body>
</html>