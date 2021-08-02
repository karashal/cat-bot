<?php

namespace App;

final class Dog extends Pet
{
	public function __construct(string $name, int $age, int $energy, int $min = 0, int $max = 100, array $errors = [])
	{
		parent::__construct($name, $age, $energy, $min, $max, $errors);

		echo $this->showEnergy();
	}

	public function __destruct()
	{
		echo $this->showEnergy();
	}

	public function about() : string
	{
		return 'This is a dog.';
	}

	public function showEnergy() : string
	{
		return 'My energy at the moment: ' . $this->energy . '.';
	}

	public function makeSound() : string
	{
		$this->energy -= 10;
		return 'Wof-wof!';
	}

	public function jump() : string
	{
		$this->energy -= 10;
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

	// in developing
	private function checkEnergy() : bool
	{
		return (($this->showEnergy <= 0) || ($this->showEnergy >= 100)) ? true : false;
	}

	private function formattingName() : string
	{
		return ucfirst(strtolower($this->name));
	}
}