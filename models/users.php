<?php
class Users extends model {

	public function emailExists($email) {

		$sql = "SELECT * FROM users WHERE email = :email";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}

	}

	public function validate($email, $password) {
		$uid = '';

		$sql = "SELECT * FROM users WHERE email = :email AND password = :password";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":password", $password);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();
			$uid = $sql['id'];
		}

		return $uid;
	}

	public function createUser($email, $password, $name, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado) {

		$sql = "INSERT INTO users (email, password, name, cep, rua, numero, complemento, bairro, cidade, estado) VALUES (:email, :password, :name, :cep, :rua, :numero, :complemento, :bairro, :cidade, :estado)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":password", $password);
		$sql->bindValue(":name", $name);
		$sql->bindValue(":cep", $cep);
		$sql->bindValue(":rua", $rua);
		$sql->bindValue(":numero", $numero);
		$sql->bindValue(":complemento", $complemento);
		$sql->bindValue(":bairro", $bairro);
		$sql->bindValue(":cidade", $cidade);
		$sql->bindValue(":estado", $estado);
		$sql->execute();

		return $this->db->lastInsertId();

	}












}