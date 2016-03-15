<?php

//bootstrap file
require_once 'bootstrap.php';

//change memory limit
//ini_set('memory_limit', '-1');

//autoloader
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});

$curr = (new Currency())->getCurrency();

//render html
echo View::render('layout', [
    'usernameWidget' => new UsernameWidget($conn),
    'curCurrency' => $curr,
    'currencyWidget' => new CurrencyWidget($curr, $conn),
    'priceWidget' => new PriceWidget($curr, $conn)

]);
