<?php
session_start();

spl_autoload_register(function ($class) {
    $class = str_replace('Portfolio_Ramona_Lozon\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows
    
    require_once $filepath;
});

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->execute(
        'UPDATE case_file SET project=:project, proposition=:proposition, deliverables=:deliverables, outcome=:outcome WHERE id=:id',
        ['project' => $_POST['project'], 'proposition' => $_POST['proposition'], 'deliverables' => $_POST['deliverables'], 'outcome' => $_POST['outcome'], 'id' => $id]
    );
    $db->execute(
        'UPDATE media SET Hero=:hero, prop_ex=:prop_ex, prop_caption=:prop_caption, work_ex=:work_ex, work_caption=:work_caption, product_ex=:product_ex, product_caption=:product_caption WHERE id=:id',
        ['hero' => $_POST['hero'], 'prop_ex' => $_POST['prop_ex'], 'prop_caption' => $_POST['prop_caption'], 'work_ex' => $_POST['work_ex'], 'work_caption' => $_POST['work_caption'], 'product_ex' => $_POST['product_ex'], 'product_caption' => $_POST['product_caption'], 'id' => $id]
    );
    header('Location: dashboard.php');
    exit;
}
$results = $db->query(
    'SELECT case_file.project, case_file.proposition, case_file.deliverables, case_file.outcome, media.Hero, media.prop_ex, media.prop_caption, media.work_ex, media.work_caption, media.product_ex, media.product_caption FROM case_file JOIN media ON media.id = case_file.id WHERE case_file.id = :id',
    ['id' => $id]
);
$row = $results[0] ?? null;
if (!$row) { die('Project not found.'); }
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
    <a href="dashboard.php">← Back</a>
    <form method="POST">
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