<?php

	
	
//header

require_once "header.php"; 
	//var_dump($_SERVER);


	
//body	
	
	if ( $_SERVER['REQUEST_URI'] == '/new1/' ) $page = 'start';
else {

	$page = substr($_SERVER['REQUEST_URI'], 5);
	if ( !preg_match('/^[A-z0-9\/]{3,15}$/', $page) ) not_found();
}


session_start();
//var_dump($_SESSION['id']);


if ( file_exists('all/'.$page.'.php') ) include 'all/'.$page.'.php';

else if ($_SESSION['id'] && file_exists('auth/'.$page.'.php')) include 'auth/'.$page.'.php';

else if ( !$_SESSION['id'] && file_exists('guest/'.$page.'.php') ) include 'guest/'.$page.'.php';

else not_found();

//  $_SESSION['id'] and file_exists('auth/'.$page.'.php')






//footer

 require_once "footer.php" ;

 
 function not_found() {
	echo('Страница 404');
}	
?>