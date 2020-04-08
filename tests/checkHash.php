<?php
require_once('../function.php');
include('../config.php');

$hash = '0x5fd05f8198a150bda3ea284ebbec7c1fbadc9f3ccec393ea91da71d55b583244';

$type = checkHash::getCat($api,$hash)->type;
$img = checkHash::getCat($api,$hash)->img;
$catHash = checkHash::getCat($api,$hash)->hash;

$height = checkHash::getHash($api,$hash)->height;
$from = checkHash::getHash($api,$hash)->tags->tx.from;
$to = checkHash::getHash($api,$hash)->tags->tx.to;

/*
$from = checkHash::getHash($api,$hash)->from;
$to = checkHash::getHash($api,$hash)->data->list->to;
*/