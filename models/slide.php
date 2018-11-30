<?php
class Slide extends model {

		public function getSlide($id) {
		$array = array();

		$sql = "SELECT * FROM slide WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}


	public function getTotalSlide() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM slide";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}

	public function getSlides1($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM slide WHERE id = 1 ORDER BY date_slide ASC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getSlides2($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM slide WHERE id = 2 ORDER BY date_slide ASC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getSlides3($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM slide WHERE id = 3 ORDER BY date_slide ASC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getSlides4($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM slide WHERE id = 4 ORDER BY date_slide ASC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

		public function getSlides5($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM slide WHERE id = 5 ORDER BY date_slide ASC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getImagem1($offset, $limit) {
		$array = array();

		$sql = "SELECT *, (select slide.nome from slide where slide.id = slide_img.id_slide ORDER BY date_slide ASC ) as images FROM slide_img  WHERE id = 1 ORDER BY date_slide ASC LIMIT $offset, $limit";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

		public function getImagem2($offset, $limit) {
		$array = array();

		$sql = "SELECT *, (select slide.nome from slide where slide.id = slide_img.id_slide ORDER BY date_slide ASC ) as images FROM slide_img  WHERE id = 2 ORDER BY date_slide ASC LIMIT $offset, $limit";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

			public function getImagem3($offset, $limit) {
		$array = array();

		$sql = "SELECT *, (select slide.nome from slide where slide.id = slide_img.id_slide ORDER BY date_slide ASC ) as images FROM slide_img  WHERE id = 3 ORDER BY date_slide ASC LIMIT $offset, $limit";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

				public function getImagem4($offset, $limit) {
		$array = array();

		$sql = "SELECT *, (select slide.nome from slide where slide.id = slide_img.id_slide ORDER BY date_slide ASC ) as images FROM slide_img  WHERE id = 4 ORDER BY date_slide ASC LIMIT $offset, $limit";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

					public function getImagem5($offset, $limit) {
		$array = array();

		$sql = "SELECT *, (select slide.nome from slide where slide.id = slide_img.id_slide ORDER BY date_slide ASC ) as images FROM slide_img  WHERE id = 5 ORDER BY date_slide ASC LIMIT $offset, $limit";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}





	public function inserir($nome) {

		$sql = "INSERT INTO slide SET nome = '$nome',date_slide = NOW()";
		$this->db->query($sql);	
		return $this->db->lastInsertId();

	}
	public function inserirImagem($id, $md5imagem) {

		$sql = "INSERT INTO slide_img SET id_slide = '$id', url = '$md5imagem', date_slide = NOW()";
		$this->db->query($sql);		

	}



	public function updateSlide($id, $nome) {

		$sql = "UPDATE slide SET nome = '$nome' WHERE id = '$id'";
		$this->db->query($sql);		

	}

	public function updateImagem($id, $md5imagem) {

		$sql = "UPDATE slide_img SET url = '$md5imagem' WHERE id_slide = '$id'";
		$this->db->query($sql);

	}

	public function removerSlide($id) {

		$sql = "SELECT url FROM slide_img WHERE id_slide = '$id'";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0) {
			$img = $sql->fetch();
			$img = $img['url'];

			unlink('../painel/assets/images/prods/'.$img);

			$this->db->query("DELETE FROM slide WHERE id = '$id'");
			$this->db->query("DELETE FROM slide_img WHERE id = '$id'");
		}

	}

	


	

}
?>