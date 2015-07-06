<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Person class Tests
 * @group App
 */
require __DIR__ . '/person.php';

class Person_Test extends TestCase
{

	public static function setUpBeforeClass()
	{
		fwrite(STDOUT, __CLASS__ . " Start.\n");
	}

	public static function tearDownAfterClass()
	{
		fwrite(STDOUT, __CLASS__ . " End.\n");
	}

	public function test_gender()
	{
		$person = new Person('Rintaro', 'male', '1991/12/14');

		$test = $person->get_gender();
		$expected = 'male';

		$this->assertEquals($expected, $test);
	}

}
