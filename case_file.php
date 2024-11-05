<html>
<?php


//connect to the running database server and the specific database
require_once('includes/connect.php');

//create a query to run in SQL
$query = 'SELECT * FROM case_file WHERE id=1';


//run the query to get back the content
$results = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($results);
?>

<div>
    <?php
        echo $row['project'];
    ?>
</div>

<div>
    <?php
        echo $row['proposition'];
    ?>
</div>

<div>
    <?php
        echo $row['deliverables'];
    ?>
</div>

<div>
    <?php
        echo $row['media_1'];
    ?>
</div>

<div>
    <?php
        echo $row['media_1_notes'];
    ?>
</div>

<div>
    <?php
        echo $row['media_2'];
    ?>
</div>

<div>
    <?php
        echo $row['media_2_notes'];
    ?>
</div>

<div>
    <?php
        echo $row['media_3'];
    ?>
</div>

<div>
    <?php
        echo $row['outcome'];
    ?>
</div>

</html>