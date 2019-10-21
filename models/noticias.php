<?php
class Noticias extends model {

	public function getNoticia($id) {
		$array = array();

		$sql = "SELECT * FROM noticias WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getTotalNoticias() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM noticias";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}

	public function getNoticias($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM noticias ORDER BY date_noticia DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getNoticiaSld() {
		$array = array();

		$sql = "SELECT * FROM noticias ORDER BY date_noticia DESC LIMIT 2";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getImagem($offset, $limit) {
		$array = array();

		$sql = "SELECT *, (select noticias.titulo from noticias where noticias.id = noticias_img.id_noticia ORDER BY date_img DESC ) as images FROM noticias_img ORDER BY date_img DESC LIMIT $offset, $limit";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



	public function inserir($titulo, $descricao) {

		$sql = "INSERT INTO noticias SET titulo = '$titulo', descricao = '$descricao', date_noticia = NOW()";
		$this->db->query($sql);	
		return $this->db->lastInsertId();

	}
	public function inserirImagem($id, $md5imagem) {

		$sql = "INSERT INTO noticias_img SET id_noticia = '$id', url = '$md5imagem', date_img = NOW()";
		$this->db->query($sql);		

	}



	public function updateNoticia($id, $titulo, $descricao) {

		$sql = "UPDATE noticias SET titulo = '$titulo', descricao = '$descricao' WHERE id = '$id'";
		$this->db->query($sql);		

	}

	public function updateImagem($id, $md5imagem) {

		$sql = "UPDATE noticias_img SET url = '$md5imagem' WHERE id_noticia = '$id'";
		$this->db->query($sql);

	}

	public function removerNoticia($id) {

		$sql = "SELECT url FROM noticias_img WHERE id_noticia = '$id'";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0) {
			$img = $sql->fetch();
			$img = $img['url'];

			unlink('../painel/assets/images/prods/'.$img);

			$this->db->query("DELETE FROM noticias WHERE id = '$id'");
		}

	}

	public function getCategorias() {
		$array = array();

		$sql = "SELECT * FROM categories";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getColors() {
		$array = array();

		$sql = "SELECT * FROM colors";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getSizes() {
		$array = array();

		$sql = "SELECT * FROM sizes";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	

}
?>