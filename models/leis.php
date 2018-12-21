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



	public function getPdfs() {
		$array = array();

		$sql = "SELECT *, (select leis.nome from leis where leis.id = leis_pdf.id_lei ORDER BY date_lei DESC ) as images FROM leis_pdf ORDER BY date_lei DESC";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
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

		$sql = "SELECT * FROM leis WHERE categoria = 'biografias' ORDER BY date_lei ASC LIMIT $offset, $limit";

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



	

}
?>