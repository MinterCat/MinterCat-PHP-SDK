<?php
include_once('../function.php');

$nick = 'ID5';

$id = User::Nick($nick)->id;
$address = User::Nick($nick)->address;
$language = User::Nick($nick)->language;