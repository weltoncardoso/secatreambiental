<?php
class Clientes extends model {

	public function getCliente($id) {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getTotalClientes() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM clientes";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}


	public function getClientesDF() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'DF' ORDER BY date_cliente DESC";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
	
	public function getClientesGO() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'GO' ORDER BY date_cliente DESC";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getClientesTO() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'TO' ORDER BY date_cliente DESC";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getClientesBA() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'BA' ORDER BY date_cliente DESC";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	public function getClientesSE() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'SE' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	public function getClientesPE() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'PE' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	public function getClientesAL() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'AL' ORDER BY date_cliente DESC";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



	public function getClientesRN() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'RN' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



	public function getClientesCE() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'CE' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getClientesPI() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'PI' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	public function getClientesMA() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'MA' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getClientesAP() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'AP' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getClientesPA() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'PA' ORDER BY date_cliente DESC";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

		public function getClientesRR() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'RR' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	public function getClientesAM() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'AM' ORDER BY date_cliente DESC";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getClientesAC() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'AC' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	public function getClientesRO() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'RO' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	public function getClientesMT() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'MT' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



	public function getClientesMS() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'MS' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



	public function getClientesPR() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'PR' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}




	public function getClientesSP() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'SP' ORDER BY date_cliente DESC";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



	public function getClientesRS() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'RS' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getClientesMG() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'MG' ORDER BY date_cliente DESC";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	public function getClientesES() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'ES' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



	public function getClientesPB() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'PB' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
		public function getClientesSC() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'SC' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	public function getClientesRJ() {
		$array = array();

		$sql = "SELECT * FROM clientes WHERE estado = 'RJ' ORDER BY date_cliente DESC ";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}





	public function getClientes($offset2, $limit2) {
		$array = array();

		$sql = "SELECT * FROM clientes ORDER BY estado ASC LIMIT $offset2, $limit2";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



	// public function getImagem($offset2, $limit2) {
	// 	$array = array();

	// 	$sql = "SELECT *, (select clientes.nome from clientes where clientes.id = clientes_img.id_cliente ORDER BY date_cliente DESC ) as images FROM clientes_img ORDER BY date_cliente DESC LIMIT $offset2, $limit2";
	// 	$sql = $this->db->query($sql);

	// 	if($sql->rowCount() > 0) {
	// 		$array = $sql->fetchAll();
	// 	}

	// 	return $array;
	// }



	public function inserir($nome, $regiao, $estado, $md5imagem) {

		$sql = "INSERT INTO clientes SET nome = '$nome', regiao = '$regiao', estado = '$estado', url = '$md5imagem', date_cliente = NOW()";
		$this->db->query($sql);	
		return $this->db->lastInsertId();

	}
	

	public function removerCliente($id) {

			$this->db->query("DELETE FROM clientes WHERE id = '$id'");
		}

		

}
?>