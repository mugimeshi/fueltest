<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Person
{

	public $name;
	private $gender;
	private $birthdate;

	public function __construct($name, $gender, $birthdate)
	{
		$this->name = $name;
		$this->gender = $gender;
		$this->birthdate = $birthdate;
	}

	public function get_gender()
	{
		return $this->gender;
	}

}
