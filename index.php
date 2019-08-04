<?php
include_once 'core/function.php';
session_start();

$listNews = array();
$scanDir = scandir('data');

$controller = isset($_GET['c']) ? $_GET['c'] : 'index';

if(is_file("c/$controller.php")) {
    include "c/$controller.php";
}
elseif ($controller=='index') {
	$titlePage = 'Main';
    $inner = template('main', [
			'listNews'=>$listNews,
			'scanDir'=>$scanDir
    ]);
}
else{
	$titlePage = 'Error 404';
	$inner = 'Контроллер не найден';
}

echo template('index', [
	'titlePage'=>$titlePage,
	'content'=>$inner
]);

