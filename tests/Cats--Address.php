<?php
include_once('../function.php');

$address = 'Mxf37eda44a344e8c4ddad08548a6477163cef5515';

$id = Cats::Address($address)->id;
$stored_id = Cats::Address($address)->stored_id;
$img = Cats::Address($address)->img;
$price = Cats::Address($address)->price;
$sale = Cats::Address($address)->sale;
$name = Cats::Address($address)->name;
$hash = Cats::Address($address)->hash;
$blockchein = Cats::Address($address)->blockchein;
$stored = Cats::Address($address)->stored;