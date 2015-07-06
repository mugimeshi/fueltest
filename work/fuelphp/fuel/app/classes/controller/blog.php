<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Blog extends Controller
{
	public function action_index()
	{
		return __METHOD__ . 'のサンプルです。';
	}

	public function action_category($cat = 'php', $page = '1')
	{
		return __FILE__ . '<br>' . $cat . '<br>' . $page;
	}
}