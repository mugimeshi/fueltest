<?php

class Controller_Showfile extends Controller
{

	public function action_index()
	{
		Profiler::mark(__METHOD__ . '開始');

		$file = DOCROOT . 'hello_world.php';
		$content = file_get_contents($file);

		$title = 'ファイル表示プログラム';

		$view = View::forge('showfile');
		$view->set('title', $title);
		$view->set('content', $content);

		Profiler::mark(__METHOD__ . '終了');

		return $view;
	}

}
