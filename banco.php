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

	public function addMovement($type, $date, $value, $description, $category) {
		$query = $this->pdo->prepare("insert into moves(type, date, value, description, category) values(?, ?, ?, ?, ?)");

		$query->execute([$type, $date, $value, $description, $category]);
	}

	public function listMovement() {
		$query = $this->pdo->prepare("select * from moves");

		$query->execute();

		$moves = $query->fetchAll(PDO::FETCH_OBJ);

		return $moves;
	}

	public function deleteMovement($id) {
		$query = $this->pdo->prepare("delete from moves where id = ?");

		$query->execute([$id]);
	}

	public function updateMovement($id, $type, $value, $description, $category) {
		$query = $this->pdo->prepare("update moves set type = ?, value = ?, description = ?, category = ? where id = ?");

		$query->execute([$type, $value, $description, $category, $id]);
	}

	public function sumValues() {
		$query = $this->pdo->prepare("select * from moves");

		$query->execute();

		$moves = $query->fetchAll(PDO::FETCH_OBJ);

		$currentMoney = 0;

		foreach ($moves as $key => $value) {
			$currentMoney += $value->value;
		}

		return $currentMoney;
	}
}
