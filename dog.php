<?php

require_once 'class-dog.php';

$toby = new Dog('toby', 3, 100);
$toby->lineBreak();
echo $toby->greet();
$toby->lineBreak();