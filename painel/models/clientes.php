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

	public function getClientes($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM clientes ORDER BY date_cliente DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	// public function getImagem($offset, $limit) {
	// 	$array = array();

	// 	$sql = "SELECT *, (select clientes.nome from clientes where clientes.id = clientes_img.id_cliente ORDER BY date_cliente DESC ) as images FROM clientes_img ORDER BY date_cliente DESC LIMIT $offset, $limit";
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

	public function inserirImagem($id, $md5imagem) {

		$sql = "INSERT INTO clientes SET id = '$id', url = '$md5imagem'";
		$this->db->query($sql);

	}


	public function updateCliente($id, $nome, $regiao, $estado) {

		$sql = "UPDATE clientes SET nome = '$nome', regiao = '$regiao', estado = '$estado' WHERE id = '$id'";
		$this->db->query($sql);

	}

	public function updateImagem($id, $md5imagem) {

		$sql = "UPDATE clientes SET url = '$md5imagem' WHERE id = '$id'";
		$this->db->query($sql);

	}

	
}
?>
