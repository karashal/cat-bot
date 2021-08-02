<?php

// For test. .gitignore.

use App\Pet as Pet;

require_once 'vendor/autoload.php';

$toby = new Pet('toby', 8, 50);
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