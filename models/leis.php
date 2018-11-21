<?php
class Leis extends model {

	public function getLei($id) {
		$array = array();

		$sql = "SELECT * FROM leis WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getTotalLeisDistritais() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM leis WHERE categoria = 'leis distritais'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}

		public function getTotalLeisFederais() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM leis WHERE categoria = 'leis federais'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}

	public function getTotalLeisBiografias() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM leis WHERE categoria = 'biografias'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}

		public function getTotalLeisOutras() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM leis WHERE categoria = 'outras'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}


	public function getLeisDistritais($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM leis WHERE categoria = 'leis distritais' ORDER BY date_lei DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getLeisFederais($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM leis WHERE categoria = 'leis federais' ORDER BY date_lei DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

		public function getLeisBiografias($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM leis WHERE categoria = 'biografias' ORDER BY date_lei DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

		public function getLeisOutras($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM leis WHERE categoria = 'outras' ORDER BY date_lei DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}





	public function getPdfs($offset, $limit) {
		$array = array();

		$sql = "SELECT *, (select leis.nome from leis where leis.id = leis_pdf.id_lei ORDER BY date_lei DESC ) as images FROM leis_pdf ORDER BY date_lei DESC LIMIT $offset, $limit";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



	public function inserir($nome, $categoria) {

		$sql = "INSERT INTO leis SET nome = '$nome', categoria = '$categoria', date_lei = NOW()";
		$this->db->query($sql);	
		return $this->db->lastInsertId();

	}
	public function inserirpdfs($id, $md5pdfs) {

		$sql = "INSERT INTO leis_pdf SET id_lei = '$id', url = '$md5pdfs', date_lei = NOW()";
		$this->db->query($sql);		

	}



	public function updateLei($id, $nome, $categoria) {

		$sql = "UPDATE leis SET nome = '$nome', categoria = '$categoria' WHERE id = '$id'";
		$this->db->query($sql);		

	}

	public function updatePdfs($id, $md5pdfs) {

		$sql = "UPDATE leis_pdf SET url = '$md5pdfs' WHERE id_lei = '$id'";
		$this->db->query($sql);

	}

	public function removerLei($id) {

		$sql = "SELECT url FROM leis_pdf WHERE id_lei = '$id'";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0) {
			$img = $sql->fetch();
			$img = $img['url'];

			unlink('../painel/assets/pdfs/prods/'.$img);

			$this->db->query("DELETE FROM leis WHERE id = '$id'");
			$this->db->query("DELETE FROM leis_pdf WHERE id = '$id'");
		}

	}

	


	

}
?>