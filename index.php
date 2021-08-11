<?php

use App\Main\Cat as Cat;
use App\Exception\CatException as CatException;

require_once __DIR__ . '/vendor/autoload.php';

try {
	$myFirstCat = new Cat('abbey', 8, 100);
	echo '<br>';
	echo $myFirstCat->makeSound() . '<br>';
	echo $myFirstCat->condition() . '<br>';
	echo $myFirstCat->jump() . '<br>';
} catch (CatException $e) {
	echo $e->getMessage() . '<br>';
}