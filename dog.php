<?php

require_once 'classes/class-dog.php';

$toby = new Dog('toby', 3, 100);
$toby->lineBreak();
echo $toby->greet();
$toby->lineBreak();