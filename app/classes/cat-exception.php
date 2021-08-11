<?php

namespace App\Exception;

class CatException extends \Exception
{

}

class ShortNameException extends CatException
{
	protected $message = 'ShortNameException: The name must be at least 1 character!';
}

class LongNameException extends CatException
{
	protected $message = 'LongNameException: The name should be no more than 20 characters!';
}

class MinimumAgeException extends CatException
{
	protected $message = 'MinimumAgeException: Age should not be less than 1 year!';
}

class MaximumAgeException extends CatException
{
	protected $message = 'MaximumAgeException: Age should not be more than 38 years old! If this is true, then your cat has broken the Guinness record! :)';
}

class MinimumEnergyException extends CatException
{
	protected $message = 'MinimumEnergyException: Energy must not be less than 1!';
}

class MaximumEnergyException extends CatException
{
	protected $message = 'MaximumEnergyException: Energy should not be more than 100!';
}