<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require __DIR__ . '/person.php';

class Person_Test extends PHPUnit_Framework_TestCase
{

	public function test_gender()
	{
		$person = new Person('Rintaro', 'male', '1991/12/14');

		$test = $person->get_gender();
		$expected = 'male';

		$this->assertEquals($expected, $test);
	}

}
