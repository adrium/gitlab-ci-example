<?php

namespace Adrium\Example;

/**
 * Type conversions
 */
class Conversions
{
	/**
	 * Converts anything to an int
	 * @param mixed $number Number
	 * @return int Number as int
	 */
	public function getInt($number)
	{
		return (int) $number;
	}
}
