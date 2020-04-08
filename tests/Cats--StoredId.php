<?php
require_once('../function.php');

$stored_id = 319275;

$id = Cats::StoredId($stored_id)->id;
$addr = Cats::StoredId($stored_id)->addr;
$img = Cats::StoredId($stored_id)->img;
$price = Cats::StoredId($stored_id)->price;
$sale = Cats::StoredId($stored_id)->sale;
$name = Cats::StoredId($stored_id)->name;
$hash = Cats::StoredId($stored_id)->hash;
$blockchein = Cats::StoredId($stored_id)->blockchein;
$stored = Cats::StoredId($stored_id)->stored;
$gender = Cats::StoredId($stored_id)->gender;
$series = Cats::StoredId($stored_id)->series;
$rarity = Cats::StoredId($stored_id)->rarity;
$count = Cats::StoredId($stored_id)->count;
$value = Cats::StoredId($stored_id)->value;