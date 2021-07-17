<?php

require_once 'class-pet.php';

class Dog extends Pet
{
	public function __construct($name, $age, $energy)
	{
		$this->name   = $name;
		$this->age    = $age;
		$this->energy = $energy;

		echo $this->showEnergy();
	}

	public function __destruct()
	{
		echo $this->showEnergy();
	}

	public function __toString()
	{
		return 'This is a dog.';
	}

	public function lineBreak()
	{
		echo "\n";
	}

	public function greet()
	{
		$this->energy -= 10;
		return 'Hi! My name is ' . $this->name . '. I\'m ' . $this->age . ' years old.';
	}

	public function makeSound()
	{
		$this->energy -= 10;
		return 'Wof-wof!';
	}

	public function jump()
	{
		$this->energy -= 10;
		return $this->name . ' jumping.';
	}

	public function eat()
	{
		$this->energy += 30;
		return 'Thanks! I have eaten.';
	}

	public function sleep()
	{
		$this->energy += 50;
		return 'Yes, I slept.';
	}

	private function showEnergy()
	{
		return 'My energy at the moment: ' . $this->energy . '.';
	}
}