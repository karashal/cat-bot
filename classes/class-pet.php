<?php

abstract class Pet
{
	protected $name;
	protected $age;
	protected $energy;

	public function __construct($name, $age, $energy)
	{
		$this->name   = $name;
		$this->age    = $age;
		$this->energy = $energy;
	}

	abstract public function __destruct();
	abstract public function __toString();
}