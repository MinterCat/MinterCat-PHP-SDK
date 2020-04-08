<?php
require_once('../function.php');

$Language = Language('Russian');

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json; charset=utf-8');
echo json_encode($Language, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);