<?php
class Contato extends model {


	public function getTotalContatos() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM noticias";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}
	public function getContatos($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM contato ORDER BY date_contato DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	public function inserir($nome, $email, $telefone) {

		$sql = "INSERT INTO contato SET nome = '$nome', email = '$email', telefone = '$telefone', date_contato = NOW()";
		$this->db->query($sql);	
		return $this->db->lastInsertId();

	}
	
}
?>