<?php
class Agenda extends model {

	public function getAgenda($id) {
		$array = array();

		$sql = "SELECT * FROM eventos WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getTotalAgendas() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM eventos";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}

	public function getAgendas($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM eventos ORDER BY start DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}




	public function inserir($nome, $date) {

		$sql = "INSERT INTO eventos SET title = '$nome', start = '$date'";
		$this->db->query($sql);	
		return $this->db->lastInsertId();

	}


	public function updateAgenda($id, $nome, $date) {

		$sql = "UPDATE eventos SET title = '$nome', start = '$date' WHERE id = '$id'";
		$this->db->query($sql);		

	}



	public function removerAgenda($id) {

	

			$this->db->query("DELETE FROM eventos WHERE id = '$id'");
		}

	

	


	

}
?>