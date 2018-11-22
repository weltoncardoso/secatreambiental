<?php
class Products extends model {

	public function getInfo($id) {
		$array = array();

		$sql = "SELECT * FROM cursos WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0) {

			$array = $sql->fetch();

		}

		return $array;
	}

	

	
	public function getSaleCount($filters = array()) {
		$where = $this->buildWhere($filters);
		$where[] = 'sale = "1"';
		$sql  = "SELECT
			COUNT(*) as c
			FROM cursos
			WHERE ".implode(' AND ', $where);
		$sql = $this->db->prepare($sql);

		$this->bindWhere($filters, $sql);

		$sql->execute();

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();

			return $sql['c'];
		}else {
			return '0';
		}
	}


	public function getMaxPrice($filters = array()) {
		$sql  = "SELECT
			preco
			FROM cursos
			ORDER BY preco DESC
			LIMIT 1";
		$sql = $this->db->prepare($sql);

		$sql->execute();

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();

			return $sql['preco'];
		}else {
			return '0';
		}
		
	}

	

	
	

	public function getTotal($filters = array()) {
		$where = $this->buildWhere($filters);

		$sql = "SELECT
		COUNT(*) as c
		FROM cursos
		WHERE ".implode(' AND ', $where);
		$sql = $this->db->prepare($sql);

		$this->bindWhere($filters, $sql);

		$sql->execute();
		$sql = $sql->fetch();

		return $sql['c'];
	}

	public function getImagesByProductId($id) {
		$array = array();

		$sql = "SELECT imagem FROM cursos WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	


	public function getProductInfo($id) {
		$array = array();

		if(!empty($id)) {

			$sql = "SELECT * FROM cursos WHERE id = :id";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id", $id);
			$sql->execute();

			if($sql->rowCount() > 0) {

				$array = $sql->fetch();

			}

		}

		return $array;
	}



}