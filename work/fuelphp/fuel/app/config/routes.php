<?php

return array(
	'_root_' => 'welcome/index', // The default route
	'_404_' => 'welcome/404', // The main 404 route
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	'bbs/(:any)' => 'routingtest/entry/$1',
	'(:segment)/about' => 'routingtest/about/$1',
	'([0-9]{3})/detail' => 'routingtest/id/$1',
// 名前付きパラメータによるルーティング
	'cal/year/:month/:day/:any' => 'welcome/404',
	'cal/year/:month/:day' => 'routingtest/cal',
	'cal/year/:month' => 'routingtest/cal',
	'cal/year' => 'routingtest/cal',
);
