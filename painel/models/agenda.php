<?php
class Agenda extends model {

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

	public function getImagem($offset, $limit) {
		$array = array();

		$sql = "SELECT *, (select clientes.nome from clientes where clientes.id = clientes_img.id_cliente ORDER BY date_cliente DESC ) as images FROM clientes_img ORDER BY date_cliente DESC LIMIT $offset, $limit";
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
	public function inserirImagem($id, $md5imagem) {

		$sql = "INSERT INTO clientes_img SET id_cliente = '$id', url = '$md5imagem', date_cliente = NOW()";
		$this->db->query($sql);		

	}



	public function updateCliente($id, $nome, $estado, $alunos) {

		$sql = "UPDATE clientes SET nome = '$nome', estado = '$estado', alunos = '$alunos' WHERE id = '$id'";
		$this->db->query($sql);		

	}

	public function updateImagem($id, $md5imagem) {

		$sql = "UPDATE clientes_img SET url = '$md5imagem' WHERE id_cliente = '$id'";
		$this->db->query($sql);

	}

	public function removerCliente($id) {

		$sql = "SELECT url FROM clientes_img WHERE id_cliente = '$id'";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0) {
			$img = $sql->fetch();
			$img = $img['url'];

			unlink('../painel/assets/images/prods/'.$img);

			$this->db->query("DELETE FROM clientes WHERE id = '$id'");
			$this->db->query("DELETE FROM clientes_img WHERE id = '$id'");
		}

	}

	


	

}
?>