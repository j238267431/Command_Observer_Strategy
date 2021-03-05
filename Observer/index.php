<?php

spl_autoload_register(function ($class) {
	include $class.'.php';
});

$candidate_1 = new Candidate("Василий", 'vas@mail.ru', 10);
$candidate_2 = new Candidate("Феофан", 'f@mail.ru', 2);
$candidate_3 = new Candidate("Петр", 'p@mail.ru', 0);
$candidate_4 = new Candidate("Григорий", 'g@mail.ru', 15);

HandHunter::getInstance()->setNewVacancy('PHP developer, DC Company');
HandHunter::getInstance()->setNewVacancy('PHP developer, Key Moto Company' );