<?php
require_once('../function.php');

$img = 901;

$name = Cats::Img($img)->name;
$gender = Cats::Img($img)->gender;
$series = Cats::Img($img)->series;
$rarity = Cats::Img($img)->rarity;
$count = Cats::Img($img)->count;
$value = Cats::Img($img)->value;
$color = Cats::Img($img)->color;
$webp = Cats::Img($img)->webp;
$png = Cats::Img($img)->png;