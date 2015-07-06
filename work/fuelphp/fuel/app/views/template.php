<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
		<h1>お問い合わせ</h1>
		<div id="wrapper">		
			<?php echo $content; ?>
			<hr>
			<p class="footer">
				Powered by <?php echo Html::anchor('http://fuelphp.com/', 'FuelPHP'); ?>
			</p>
		</div>
    </body>
</html>
