<?php

header('Content-Type: application/json');

$return = array('data' => 'Hello '.$_POST['firstname'], 'code' => 200);

echo json_encode($return);
?>