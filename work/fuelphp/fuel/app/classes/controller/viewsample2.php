<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_ViewSample2 extends Controller
{

	public function action_index()
	{
		$view = View::forge('viewsample');

		$view->set('title', 'ビューのサンプル2');
		$view->set('username', 'Mugi');

		return $view;
	}

}
