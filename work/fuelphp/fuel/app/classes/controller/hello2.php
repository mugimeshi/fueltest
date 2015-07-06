<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Hello2 extends Controller
{

	public function action_index()
	{
		return View::forge('hello');
	}

}
