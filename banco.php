<?php

require_once './config.php';

class Banco {
	private $dsn;
	private $user;
	private $passwd;
	private $pdo;

	public function __construct() {
		$this->dsn = DSN;
		$this->user = USER;
		$this->passwd = PASSWORD;

		$this->connection();
	}

	private function connection() {
		$this->pdo = $pdo = new PDO($this->dsn, $this->user, $this->passwd);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	public function addMoviment($type, $date, $value, $description, $category) {
		$query = $this->pdo->prepare("insert into moves(type, date, value, description, category) values(?, ?, ?, ?, ?)");

		$query->execute([$type, $date, $value, $description, $category]);
	}
}
