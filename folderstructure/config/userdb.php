<?php

function die_r($value){
	echo '<pre>';
	print_r($value);
	echo '</pre>';
	die();

}

 //require_once 'Database.php';

$db = new Database();

$getRow = $db->getRow("SELECT *FROM users WHERE id = ?", ["3"]);

die_r($getRow);


?>