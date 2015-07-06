<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_SampleRouter extends Controller
{

	public function router($method, $params)
	{
		if ($method == 'abc')
		{
			return $this->action_test($params);
		} else
		{
			return $this->action_index($params);
		}
	}

	public function before()
	{
		$this->current_user = 'Mio';
	}

	public function action_index($params)
	{
		$output = $this->current_user . 'さん、';
		$output .= __METHOD__ . 'が実行されました。<br>';
		$output .= var_export($params, true);
		return $output;
	}

	public function action_test($params)
	{
		$output = $this->current_user . 'さん、';
		$output .= __METHOD__ . 'が実行されました。<br>';
		$output .= var_export($params, true);
		return $output;
	}

}
