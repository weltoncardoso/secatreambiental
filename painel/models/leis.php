<?php
class leis extends model {

	public function getLei($id) {
		$array = array();

		$sql = "SELECT * FROM leis WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}



	public function getLeiPDF($id) {
			$array = array();

		$sql = "SELECT * FROM leis  WHERE id = '$id'";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



	public function getTotalLeis() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM leis";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}

	public function getLeis($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM leis ORDER BY date_lei DESC LIMIT $offset, $limit";

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



	public function inserir($nome, $descricao, $categoria, $tipo) {

		$sql = "INSERT INTO leis SET nome = '$nome', descricao = '$descricao', date_lei = NOW(), categoria = '$categoria', tipo = '$tipo'";
		$this->db->query($sql);	
		return $this->db->lastInsertId();

	}

	public function inserirpdfs($id, $md5pdfs) {

		$sql = "INSERT INTO leis_pdf SET id_lei = '$id', url = '$md5pdfs', date_lei = NOW()";
		$this->db->query($sql);		

	}



	public function updateLei($id, $nome, $descricao, $categoria, $tipo) {

		$sql = "UPDATE leis SET nome = '$nome', descricao = '$descricao', categoria = '$categoria', tipo = '$tipo' WHERE id = '$id'";
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

			unlink('../assets/pdfs/prods/'.$img);

			$this->db->query("DELETE FROM leis WHERE id = '$id'");
			$this->db->query("DELETE FROM leis_pdf WHERE id = '$id'");
		}

	}

	


	

}
?>