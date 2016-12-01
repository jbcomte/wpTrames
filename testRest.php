<?php

header('Content-Type: application/json');

$return = array('data' => 'ok !', 'code' => 200);

echo json_encode($return);
?>