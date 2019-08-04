<?php
define('DOMAIN', sv('HTTP_HOST'));

function template($filename, $vars = []) {
	extract($vars);

	ob_start();
	include "v/$filename.html.php";
	return ob_get_clean();
}

function sv($key) {
	if($key)
		return $_SERVER[$key];
	return $_SERVER;
}