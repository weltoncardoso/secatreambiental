<?php
class Cart extends model {

	public function getList() {
		$products = new Products();

		$array = array();
		$cart = array();

		if(isset($_SESSION['cart'])) {
			$cart = $_SESSION['cart'];
		}

		foreach($cart as $id => $qt) {

			$info = $products->getInfo($id);

			$array[] = array(
				'id' => $id,
				'qt' => $qt,
				'price' => $info['preco'],
				'name' => $info['nome'],
				'image' => $info['imagem']
			);

		}

		return $array;
	}

	public function getSubtotal() {
		$list = $this->getList();

		$subtotal = 0;

		foreach($list as $item) {
			$subtotal += (floatval($item['price']) * intval($item['qt']));
		}

		return $subtotal;
	}
}