<?php
include_once('../function.php');

$estimateCoinSell = Coin()->estimateCoinSell;
$estimateCoinBuy = Coin()->estimateCoinBuy;

$name = Coin()->symbol->name;
$symbol = Coin()->symbol->symbol;
$volume = Coin()->symbol->volume;
$crr = Coin()->symbol->crr;
$reserve_balance = Coin()->symbol->reserve_balance;
$max_supply = Coin()->symbol->max_supply;
