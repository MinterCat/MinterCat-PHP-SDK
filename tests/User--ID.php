<?php
include_once('../function.php');

$id = 5;

$address = User::ID($id)->address;
$nick = User::ID($id)->nick;
$language = User::ID($id)->language;