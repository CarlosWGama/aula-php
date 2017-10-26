<?php

abstract class DAO {

	protected $tabela;

	public function selectOne(int $id): array {
		return $_SESSION[$this->tabela][$id];
	}

	public function selectAll(): array {
		if (isset($_SESSION[$this->tabela]))
			return $_SESSION[$this->tabela];
		return [];
	}

	public function update(array $campos, int $id): void {
		$_SESSION[$this->tabela][$id] = $campos;
	}

	public function delete(int $id): void {
		unset($_SESSION[$this->tabela][$id]);
	}

	public function insert(array $campos): void {
		$_SESSION[$this->tabela][] = $campos;	
	}



}