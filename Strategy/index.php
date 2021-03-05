<?php

spl_autoload_register(function ($class) {
	include $class.'.php';
});


$shop = new Shop(100, 899999999);
$qiwi = new Qiwi();
$qiwi->payWay($shop);
$yandex = new YandexMoney();
$yandex->payWay($shop);

