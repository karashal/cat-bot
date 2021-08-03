<?php

namespace App;

class PetException extends \Exception
{

}

class MinEnergyException extends PetException
{
	protected $message = 'MinEnergyError: the minimum energy must be at least 1!';
}

class MaxEnergyException extends PetException
{
	protected $message = 'MaxEnergyError: the maximum energy should not be more than 100!';
}

final class Pet
{
	private $name;
	private $age;
	private $energy;
	private $min    = 0;
	private $max    = 100;
	private $errors = [];

	public function __construct(string $name, int $age, int $energy)
	{
		$this->name   = $name;
		$this->age    = $age;
		$this->energy = $energy;

		$this->checkEnergy();

		echo $this->showEnergy();
	}

	public function __destruct()
	{
		echo $this->showEnergy();
	}

	// Information about the pet.
	public function about() : string
	{
		return 'This is a pet.';
	}

	public function showEnergy() : string
	{
		return 'My energy at the moment: ' . $this->energy . '.';
	}

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
	public function makeSound() : string
	{
		$this->energy -= 10;
		return 'Wof-wof!';
	}

	public function jump() : string
	{
		$this->energy -= 20;
		return $this->formattingName() . ' jumping.';
	}

	// These methods replenish energy.
	public function eat() : string
	{
		$this->energy += 30;
		return 'Thanks! I have eaten.';
	}

	public function sleep() : string
	{
		$this->energy += 50;
		return 'Yes, I slept.';
	}

	// Formatting.
	private function formattingName() : string
	{
		return ucfirst(strtolower($this->name));
	}

	// These methods in developing.
	private function checkEnergy()
	{
		if ($this->energy <= $this->min) {
			throw new MinEnergyException;
		}

		if ($this->energy > $this->max) {
			throw new MaxEnergyException;
		}
	}
}