<?php

abstract class Pet
{
	protected $name;
	protected $age;
	protected $energy;

	abstract public function __construct($name, $age, $energy);
	abstract public function __destruct();
	abstract public function __toString();
}