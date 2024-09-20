<?php
	define('HOST','127.0.0.1');
	define('DATABASE','suporte_per');
	define('USER','root');
	define('PASSWORD','');

	$autoload = function($class){
		include($class.'.php');
	};

	spl_autoload_register($autoload);

	Router::get('/home/',function(){
		echo '<h2>Home!</h2>';
	});

	Router::get('/home/?',function($par){
		echo $par[2];
	});

?>
