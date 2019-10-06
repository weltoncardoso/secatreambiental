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

		$sql = "SELECT COUNT(*) as c FROM leis WHERE categoria = 'leis distritais' AND tipo = '1'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}
	public function getTotalDecretosDistritais() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM leis WHERE categoria = 'leis distritais' AND tipo = '2'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}
	public function getTotalDecretosFederais() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM leis WHERE categoria = 'leis federais' AND tipo = '2'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}

	public function getTotalResolucoesFederais() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM leis WHERE categoria = 'leis federais' AND tipo = '3'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}

	public function getTotalResolucoesDistritais() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM leis WHERE categoria = 'leis distritais' AND tipo = '3'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}

	public function getTotalPortariasFederais() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM leis WHERE categoria = 'leis federais' AND tipo = '4'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}

	public function getTotalPortariasDistritais() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM leis WHERE categoria = 'leis distritais' AND tipo = '4'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}

		public function getTotalLeisFederais() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM leis WHERE categoria = 'leis federais' AND tipo = '1'";
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

		$sql = "SELECT * FROM leis WHERE categoria = 'leis distritais' AND tipo = '1' ORDER BY date_lei DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getDecretosDistritais($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM leis WHERE categoria = 'leis distritais' AND tipo = '2' ORDER BY date_lei DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getDecretosFederais($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM leis WHERE categoria = 'leis federais' AND tipo = '2' ORDER BY date_lei DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getResolucoesFederais($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM leis WHERE categoria = 'leis federais' AND tipo = '3' ORDER BY date_lei DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	public function getResolucoesDistritais($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM leis WHERE categoria = 'leis distritais' AND tipo = '3' ORDER BY date_lei DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getPortariasFederais($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM leis WHERE categoria = 'leis federais' AND tipo = '4' ORDER BY date_lei DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getPortariasDistritais($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM leis WHERE categoria = 'leis distritais' AND tipo = '4' ORDER BY date_lei DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getLeisFederais($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM leis WHERE categoria = 'leis federais' AND tipo = '1' ORDER BY date_lei DESC LIMIT $offset, $limit";

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