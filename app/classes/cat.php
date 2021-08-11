<?php

namespace App\Main;

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

	private $minEnergy = 0;
	private $maxEnergy = 100;

	private $operation;
	private $amountEnergy;

	public function __construct(string $name, int $age, int $energy)
	{
		$this->name   = $name;
		$this->age    = $age;
		$this->energy = $energy;

		// Data validation.
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
		$this->calculateEnergy($this->operation = '-', $this->amountEnergy = 10);
		return 'Meow-meow!';
	}

	// The cat is jumping.
	public function jump() : string
	{
		$this->calculateEnergy($this->operation = '-', $this->amountEnergy = 20);
		return $this->formattingName() . ' jumping.';
	}

	// These methods replenish energy.
	// The cat is eating.
	public function eat() : string
	{
		$this->calculateEnergy($this->operation = '+', $this->amountEnergy = 30);
		return 'Thanks! I have eaten.';
	}

	// The cat is sleeping.
	public function sleep() : string
	{
		$this->calculateEnergy($this->operation = '+', $this->amountEnergy = 50);
		return 'Yes, I slept.';
	}

	// The cat name formatting.
	private function formattingName() : string
	{
		return ucfirst(strtolower($this->name));
	}

	private function calculateEnergy(string $operation, int $amountEnergy) : void
	{
		if ($this->operation == '+') {
			$this->energy += $this->amountEnergy;
		} else {
			$this->energy -= $this->amountEnergy;
		}
	}

	// Exceptions System.
	// Checking the name for correctness.
	private function checkName() : void
	{
		if (strlen($this->name) <= 0) {
			throw new ShortNameException;
		}

		if (strlen($this->name) > 20) {
			throw new LongNameException;
		}
	}

	// Checking the age for correctness.
	private function checkAge() : void
	{
		if ($this->age <= 0) {
			throw new MinimumAgeException;
		}

		if ($this->age > 38) {
			throw new MaximumAgeException;
		}
	}

	// Checking the energy for correctness.
	private function checkEnergy() : void
	{
		if ($this->energy <= $this->minEnergy) {
			throw new MinimumEnergyException;
		}

		if ($this->energy > $this->maxEnergy) {
			throw new MaximumEnergyException;
		}
	}
}