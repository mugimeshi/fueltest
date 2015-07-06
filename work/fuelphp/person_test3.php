<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require __DIR__ . '/person.php';

class Person_Test3 extends PHPUnit_Framework_TestCase
{

	/**
	 * @dataProvider provider_persondata
	 */
	public function test_gender($name, $gender, $birthdate)
	{
		$person = new Person($name, $gender, $birthdate);

		$test = $person->get_gender();
		$expected = $gender;

		$this->assertEquals($expected, $test);
	}

	public function provider_persondata()
	{
		return array(
			array('Rintaro', 'male', '1991/12/14'),
			array('Mayuri', 'female', '1994/2/1'),
			array('Suzuha', 'female', '2017/9/27'),
		);
	}

}
