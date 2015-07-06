<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_ViewSample extends Controller
{

	public function action_index()
	{
		$data = array();

		$data['title'] = 'ビューのサンプル';
		$data['username'] = 'Ritsu';

		return View::forge('viewsample', $data);
	}

}
