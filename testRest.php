<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date dans le passé
header('Content-Type: application/json');

$return = array('data' => 'Hello '.$_POST['firstname'], 'code' => 200);

echo json_encode($return);
?>