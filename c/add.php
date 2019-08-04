<?php
include_once 'core/function.php';

$msg = '';
	if (count($_POST)>0) {
		$title = isset($_POST['title']) ? trim($_POST['title']) : '';
		$text = isset($_POST['text']) ? trim($_POST['text']) : '';

		if($title == '' || $text == '') {
			$msg = 'Введите title or Text';
			echo $msg;
		}
		elseif (file_exists("data/$title")) {
			$msg = "Такая статья уже есть";
		}
		else {
			file_put_contents("data/$title", $text);
			header('Location:index.php?add=ok');
			exit();
		}
	}
	else{
		$title = '1';
		$text = '1';
	}

	$titlePage = 'Add news';
	$inner = template('edit', [
		'title'=> $title,
		'text'=> $text,
		'msg'=>$msg,
	]);

