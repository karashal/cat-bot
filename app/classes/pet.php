<?php

namespace App;

abstract class Pet
{
	protected $name;
	protected $age;
	protected $energy;
	protected $min;
	protected $max;

	public function __construct(string $name, int $age, int $energy, int $min = 1, int $max = 100)
	{
		$this->name   = $name;
		$this->age    = $age;
		$this->energy = $energy;
		$this->min    = $min;
		$this->max    = $max;

		if ($this->limitEnergy() == true) {
			die('EnergyError: Min energy - 1. Max energy - 100!');
		}
	}

	abstract public function __destruct();

	private function limitEnergy()
	{
		return (($this->energy > $this->max) || ($this->energy <= $this->min)) ? true : false;
	}
}