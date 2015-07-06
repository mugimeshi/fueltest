<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_SampleAfter extends Controller
{
	public function after($response)
	{
		$response .= __METHOD__ . 'が実行されました。<br>';
		return parent::after($response);
	}

	public function action_index()
	{
		return __METHOD__ . 'が実行されました。<br>';
	}

	public function action_test()
	{
		return __METHOD__ . 'が実行されました。<br>';
	}

}
