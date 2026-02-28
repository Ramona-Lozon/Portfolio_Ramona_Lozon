<?php
require_once 'auth.php';

spl_autoload_register(function ($class) {
    $class = str_replace('Portfolio_Ramona_Lozon\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows
    
    require_once $filepath;
});
use Portfolio_Ramona_Lozon\database;

$db = new database();
$id = $_GET['id'] ?? null;

if ($id) {
    $db->execute('DELETE FROM case_file WHERE id = :id', ['id' => $id]);
    $db->execute('DELETE FROM media WHERE id = :id', ['id' => $id]);
}

header('Location: dashboard.php');
exit;