<?php

namespace App;

abstract class Pet
{
	protected $name;
	protected $age;
	protected $energy;

	public function __construct(string $name, int $age, int $energy)
	{
		$this->name   = $name;
		$this->age    = $age;
		$this->energy = $energy;
	}

	abstract public function __destruct();
}