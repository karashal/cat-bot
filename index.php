<?php

// For test. .gitignore.

use App\Pet as Pet;
use App\PetException as PetException;

require_once 'vendor/autoload.php';

try {
	$toby = new Pet('toby', 8, 0);
	echo '<br>';
	echo $toby->condition() . '<br>';
	echo $toby->about() . '<br>';
	// echo $toby->sleep() . '<br>';
	echo $toby->makeSound() . '<br>';
	echo $toby->showEnergy() . '<br>';
	echo $toby->condition() . '<br>';
	// echo $toby->eat() . '<br>';
	echo $toby->jump() . '<br>';
	echo $toby->makeSound() . '<br>';
	echo $toby->condition() . '<br>';
} catch (PetException $e) {
	echo $e->getMessage() . '<br>';
}