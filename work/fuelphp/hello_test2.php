<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require __DIR__ . '/hello.php';

function assertTrue($condition)
{
	if (!$condition)
	{
		throw new Exception('Assertion failed.');
	}
}

$test = hello();
$expected = 'Hello World!';
assertTrue($test == $expected);
