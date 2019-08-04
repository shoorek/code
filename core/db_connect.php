<?php
function db_connect () {
	$dbh = new PDO ('mysql:host=localhost;dbname=chat_less5', 'root', '');
	return $dbh;
}