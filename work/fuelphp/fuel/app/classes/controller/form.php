<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Form extends Controller_Template
{

	public function action_index()
	{
		$this->template->title = 'コンタクトフォーム';
		$this->template->content = View::forge('form/index');
	}

	public function forge_validation()
	{
		$val = Validation::forge();

		$val->add('name', '名前')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 50);

		$val->add('email', 'メールアドレス')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('max_length', 100)
			->add_rule('valid_email');

		$val->add('comment', 'コメント')
			->add_rule('required')
			->add_rule('max_length', 400);

		return $val;
	}

	public function action_confirm()
	{
		$val = $this->forge_validation();

		if ($val->run())
		{
			$data['input'] = $val->validated();
			$this->template->title = 'コンタクトフォーム：　確認';
			$this->template->content = View::forge('form/confirm', $data);
		} else
		{
			$this->template->title = 'コンタクトフォーム：　エラー';
			$this->template->content = View::forge('form/index');
			$this->template->content->set_safe('html_error', $val->show_errors());
		}
	}

}
