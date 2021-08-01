<?php

namespace App;

class Dog extends Pet
{
	public function __construct(string $name, int $age, int $energy)
	{
		parent::__construct($name, $age, $energy);

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

	private function showEnergy() : string
	{
		return 'My energy at the moment: ' . $this->energy . '.';
	}

	private function formattingName() : string
	{
		return ucfirst(strtolower($this->name));
	}
}