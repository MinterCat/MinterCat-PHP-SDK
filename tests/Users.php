<?php
require_once('../function.php');

$count = count(Users());

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json; charset=utf-8');
echo json_encode(Users(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);