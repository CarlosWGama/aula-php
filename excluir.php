<?php 
session_start();
require(__DIR__.'/classes/UsuarioDAO.php');

$usuarioDAO = new UsuarioDAO;

$posicao = $_GET['id'] ?? false;

if ($posicao !== false) 
	$usuarioDAO->delete($posicao);

header('Location: index.php');
