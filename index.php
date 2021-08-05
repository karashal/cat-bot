<?php

// For test. .gitignore.

use App\Main\Cat as Cat;
use App\Exception\CatException as CatException;

require_once __DIR__ . '/vendor/autoload.php';

try {
	$myFirstCat = new Cat('abbey', 8, 100);
	echo '<br>';
	echo $myFirstCat->condition() . '<br>';
	echo $myFirstCat->great() . '<br>';
	// echo $myFirstCat->sleep() . '<br>';
	echo $myFirstCat->makeSound() . '<br>';
	echo $myFirstCat->showEnergy() . '<br>';
	echo $myFirstCat->condition() . '<br>';
	// echo $myFirstCat->eat() . '<br>';
	echo $myFirstCat->jump() . '<br>';
	echo $myFirstCat->makeSound() . '<br>';
	echo $myFirstCat->condition() . '<br>';
} catch (CatException $e) {
	echo $e->getMessage() . '<br>';
}