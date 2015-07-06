<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_SampleBefore extends Controller
{

	public function before()
	{
		$this->current_user = 'Yui';
	}

	public function action_index()
	{
		$output = $this->current_user . 'さん、' .
			__METHOD__ . 'が実行されました。';
		return $output;
	}

	public function action_test()
	{
		$output = $this->current_user . 'さん、' .
			__METHOD__ . 'が実行されました。';
		return $output;
	}

}
