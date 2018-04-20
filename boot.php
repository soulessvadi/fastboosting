<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
$uri = $_SERVER['REQUEST_URI'];
$segments = (object)explode('/', trim($uri, '/'));
$viewname = end($segments);
$filename = str_replace('.php', '', $viewname) . '.php';
$view = implode('/', [__DIR__, "views", $filename]);

function yields($path) {
	ob_start();
	$gameslist = [['img'=>'1.png'],['img'=>'2.png'],['img'=>'3.png'],['img'=>'4.png'],['img'=>'5.png'],['img'=>'6.1.png'],['img'=>'7.png'],];
	file_exists($path) 
	? include($path) 
	: include(implode('/', [__DIR__, "views", "home.php"]));
	echo ob_get_clean();
}

function element($filename) {
	ob_start();
	$games = ['Dota 2','Hearhstone','Overwatch','League of legends','Counter Strike: Global Offensive','World of tanks','Playerunnown`s Battlegrounds'];
	include(implode('/', [__DIR__, "views", "elements", str_replace('.php', '', $filename) . '.php']));
	echo ob_get_clean();
}

