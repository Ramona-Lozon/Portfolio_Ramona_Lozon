<!DOCTYPE html>
<html lang="en">

<!-- head and opening tags -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramona's Design</title>
    <link rel="stylesheet" href="css/main.css.map">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css">
</head>

<?php
//connect to the running database server and the specific database
require_once('includes/connect.php');

//create a query to run in SQL
$query = 'SELECT * FROM case_file,media WHERE media.id = case_file.id AND media.id ='.$_GET['id'];
//$query = 'SELECT * FROM employees,jobs WHERE job_id = jobs.id AND employees.id ='.$_GET['id'];

//run the query to get back the content
$results = mysqli_query($connect,$query);
$row = mysqli_fetch_assoc($results);
//print_r($results);

?>

<body>

<main>

<?php echo '<div>'.$row['project'].'</div>';?> 

<?php echo '<div>'.$row['proposition'].'</div>';?> 

<?php echo '<div><img src="images/'.$row['prop_ex'].'"></div>';?> 

<?php echo '<div>'.$row['prop_caption'].'</div>';?> 

<?php echo '<div>'.$row['deliverables'].'</div>';?> 

<?php echo '<div><img src="images/'.$row['work_ex'].'"></div>';?> 

<?php echo '<div>'.$row['work_caption'].'</div>';?> 

<?php echo '<div>' .$row['outcome'].'</div>'; ?> 

<?php echo '<div><img src="images/'.$row['product_ex'].'"></div>';?> 

<?php echo '<div>' .$row['prop_caption'].'</div>'; ?> 

<!-- closing tags -->
</main>
<script src="js/main.js"></script>
</body>
</html>