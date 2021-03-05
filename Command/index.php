<?php

spl_autoload_register(function ($class) {
	include $class.'.php';
});

$lines = file("text.txt");
$buffer = file('buffer.txt');

$user = new User();

$user->copy($lines, 0,1);
$user->cut($lines, 1,1);
$user->paste($lines,0);

//$user->down(3);
//$user->up(2);