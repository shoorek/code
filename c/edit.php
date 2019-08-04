<?php

$title = '';
$text = '';
$msg = '';
$err = true;

if(count($_GET)>0) {
	$fname = $_GET['fname'];
	if(isset($fname) || $fname == '' ) {
		if(file_exists("data/$fname")) {
			$title = $fname;
			$text = file_get_contents("data/$fname");
			$err = false;
		}
		else {
			$msg = 'Статья не найдена';
		}
	}
}

echo

$titlePage = 'Edit messege';
$inner = template('edit', [
	'title' => $title,
    'text' => $text,
    'msg' => $msg,
    'err' => $err,
    'fname'=>$fname
]);