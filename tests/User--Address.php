<?php
require_once('../function.php');

$address = 'Mxedf04c009d83ac3b695eab5392692a0d5a686ae3';

$id = User::Address($address)->id;
$nick = User::Address($address)->nick;
$language = User::Address($address)->language;