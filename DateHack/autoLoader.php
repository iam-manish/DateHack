<?php
spl_autoload_register('AutoLoadeClasses');

function AutoLoadeClasses($name){
	$file = __DIR__.'\\';
	include $file.$name.".php";
	
}
$url = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$sep_url = explode("/", $url);
$base_url = 'http://'.$_SERVER['HTTP_HOST'].'/'.$sep_url[1].'/'.$sep_url[2].'/';
define('base_url', $base_url);

?>