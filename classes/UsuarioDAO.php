<?php
require_once(__DIR__.'\DAO.php');

class UsuarioDAO extends DAO {

	public function __construct() {
		$this->tabela = 'usuarios';
	}

	public function login(string $email, string $senha): array {
		if ($email == 'carlos@teste.com' && $senha == '123456') 
			return ['nome' => 'Carlos'];
		return [];
	}
}
