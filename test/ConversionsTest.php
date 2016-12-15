<?php

namespace Adrium\Example;

class ConversionsTest
extends \PHPUnit\Framework\TestCase
{
	public function testGetInt()
	{
		$x = new Conversions;

		$this->assertSame(3, $x->getInt(3));
		$this->assertSame(3, $x->getInt('3'));
	}
}
