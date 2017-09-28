<?php 
session_start();

$posicao = $_GET['id'] ?? false;

if ($posicao !== false) 
	unset($_SESSION['usuarios'][$posicao]);

header('Location: index.php');
