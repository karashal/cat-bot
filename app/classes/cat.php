<?php

namespace App\Main;

require_once __DIR__ . '/cat-exception.php';

use App\Exception\ShortNameException;
use App\Exception\LongNameException;
use App\Exception\MinimumAgeException;
use App\Exception\MaximumAgeException;
use App\Exception\MinimumEnergyException;
use App\Exception\MaximumEnergyException;

final class Cat
{
	private $name;
	private $age;
	private $energy;
	private $min = 0;
	private $max = 100;

	public function __construct(string $name, int $age, int $energy)
	{
		$this->name   = $name;
		$this->age    = $age;
		$this->energy = $energy;

		$this->checkName();
		$this->checkAge();
		$this->checkEnergy();

		echo $this->showEnergy();
	}

	public function __destruct()
	{
		echo $this->showEnergy();
	}

	public function __toString() : string
	{
		return 'This is a cat.';
	}

	// Information about the cat.
	public function great() : string
	{
		return 'Hi, my name is ' . $this->formattingName() . '! I\'m ' . $this->age . ' years old. ' . $this->showEnergy();
	}

	// Show energy.
	public function showEnergy() : string
	{
		return 'My energy at the moment: ' . $this->energy . '.';
	}

	// Cat's condition.
	public function condition() : string
	{
		if ($this->energy <= 30) {
			return 'I\'m tired.';
		} elseif ($this->energy >= 50) {
			return 'I\'m full of strength!';
		} elseif ($this->energy > 30) {
			return 'I\'m in shape.';
		}
	}

	// These methods consume energy.
	// The cat makes a sound.
	public function makeSound() : string
	{
		$this->energy -= 10;
		return 'Meow-meow!';
	}

	// The cat is jumping.
	public function jump() : string
	{
		$this->energy -= 20;
		return $this->formattingName() . ' jumping.';
	}

	// These methods replenish energy.
	// The cat is eating.
	public function eat() : string
	{
		$this->energy += 30;
		return 'Thanks! I have eaten.';
	}

	// The cat is sleeping.
	public function sleep() : string
	{
		$this->energy += 50;
		return 'Yes, I slept.';
	}

	// The cat name formatting.
	private function formattingName() : string
	{
		return ucfirst(strtolower($this->name));
	}

	// Exceptions System.
	// Checking the name for correctness.
	private function checkName()
	{
		if (strlen($this->name) <= 0) {
			throw new ShortNameException;
		}

		if (strlen($this->name) > 20) {
			throw new LongNameException;
		}
	}

	// Checking the age for correctness.
	private function checkAge()
	{
		if ($this->age <= 0) {
			throw new MinimumAgeException;
		}

		if ($this->age > 38) {
			throw new MaximumAgeException;
		}
	}

	// Checking the energy for correctness.
	private function checkEnergy()
	{
		if ($this->energy <= $this->min) {
			throw new MinimumEnergyException;
		}

		if ($this->energy > $this->max) {
			throw new MaximumEnergyException;
		}
	}
}