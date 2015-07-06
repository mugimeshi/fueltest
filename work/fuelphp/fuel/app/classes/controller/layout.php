<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Layout extends Controller_Template
{

	public function before()
	{
		parent::before();
		$this->current_user = 'Sawako';
	}

	public function action_index()
	{
		$this->template->set_global('title', 'レイアウト機能のサンプル');

		$data = array('user' => $this->current_user);

		$this->template->content = View::forge('layout/index', $data);
		$this->template->footer = View::forge('layout/footer');
	}

}
