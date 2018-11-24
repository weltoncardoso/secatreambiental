<?php
class vendas extends model {

	public function getVendas() {
		$array = array();

		$sql = "SELECT
			purchases.id,
			users.name as nome_usuario,
			users.email,
			purchases.total_amount,
			purchases.payment_type as pg_nome,
			purchases.payment_status 
		FROM purchases
		LEFT JOIN users ON users.id = purchases.id_user
		-- LEFT JOIN pagamentos ON pagamentos.id = vendas.forma_pg
		";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getVenda($id) {
		$array = array();

		$sql = "SELECT 
			purchases.id,
			users.name as nome_usuario,
			users.email,
			users.cep,
			users.rua,
			users.numero,
			users.complemento,
			users.bairro,
			users.cidade,
			users.estado,
			purchases.total_amount,
			purchases.payment_type as pg_nome,
			purchases.payment_status,
			purchases.link_pg 
		FROM purchases
		LEFT JOIN users ON users.id = purchases.id_user
		LEFT JOIN purchases_products ON purchases_products.id = purchases.payment_type
		WHERE
			purchases.id = '$id'
		";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getProdutos($id) {
		$array = array();

		$sql = "SELECT id_product, quantity FROM purchases_products WHERE id_purchase = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$prods = $sql->fetchAll();

			$p = new cursos();
			foreach($prods as $prod) {
				$pinfo = $p->getCurso($prod['id_product']);

				$array[] = array(
					'id' => $pinfo['id'],
					'quantity' => $prod['quantity'],
					'name' => $pinfo['nome'],
					'imagem' => $pinfo['imagem'],
					'price' => $pinfo['preco']
				);
			}
		}

		return $array;
	}

	public function updateStatus($status, $id) {
		$sql = "UPDATE purchases SET payment_status = '$status' WHERE id = '$id'";
		$this->db->query($sql);
	}

}
?>