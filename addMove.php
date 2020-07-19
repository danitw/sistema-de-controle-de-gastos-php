<?php

require_once 'banco.php';

$type      		=	$_POST['type'];
$value				=	$_POST['value'];
$description	=	$_POST['description'];
$category 		=	$_POST['category'];

$date = date('c');

$db = new Banco();

print_r($db);

$db->addMoviment($type, $date, $value, $description. $category);