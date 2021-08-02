<?php

namespace App;

final class Pet
{
	private $name;
	private $age;
	private $energy;
	private $min;
	private $max;
	private $errors;

	public function __construct(string $name, int $age, int $energy, int $min = 1, int $max = 100, array $errors = [])
	{
		$this->name   = $name;
		$this->age    = $age;
		$this->energy = $energy;
		$this->min    = $min;
		$this->max    = $max;
		$this->errors = $errors;

		$this->checkEnergy();

		echo $this->showEnergy();
	}

	public function __destruct()
	{
		echo $this->showEnergy();
	}

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

	private function formattingName() : string
	{
		return ucfirst(strtolower($this->name));
	}

	// These methods in developing.
	private function limitEnergy() : bool
	{
		return (($this->energy <= $this->min) || ($this->energy > $this->max)) ? true : false;
	}

	private function checkEnergy()
	{
		if ($this->limitEnergy() == true) {
			$this->errors[] = 'EnergyError: Minimum energy - 1. Maximum energy - 100!';
			$this->showErrors();
		}
	}

	private function showErrors()
	{
		foreach ($this->errors as $error) {
			echo $error . '<br>';
			exit();
		}
	}
}