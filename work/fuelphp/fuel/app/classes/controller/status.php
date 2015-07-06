<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Status extends Controller
{

	public function action_index()
	{
		$results = Model_Status::find_body_by_username('foo');
		Debug::dump($results);
	}

}
