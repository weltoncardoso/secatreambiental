<?php
class cursos extends model {

	public function getCurso($id) {
		$array = array();

		$sql = "SELECT * FROM cursos WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getTotalCursos() {
		$q = 0;

		$sql = "SELECT COUNT(*) as c FROM cursos";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$q = $sql->fetch();
			$q = $q['c'];
		}

		return $q;
	}

	public function getCursos($offset, $limit) {
		$array = array();

		$sql = "SELECT * FROM cursos ORDER BY date_curso DESC LIMIT $offset, $limit";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



	public function getImagem($offset, $limit) {
		$array = array();

		$sql = "SELECT *, (select cursos.nome from cursos where cursos.id = cursos_img.id_Curso ORDER BY date_curso DESC ) as images FROM cursos_img ORDER BY date_curso DESC LIMIT $offset, $limit";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



	public function inserir($nome, $descricao, $preco) {

		$sql = "INSERT INTO cursos SET nome = '$nome', descricao = '$descricao', preco = '$preco', date_curso = NOW()";
		$this->db->query($sql);	
		return $this->db->lastInsertId();

	}
	public function inserirImagem($id, $md5imagem) {

		$sql = "INSERT INTO cursos_img SET id_curso = '$id', url = '$md5imagem', date_curso = NOW()";
		$this->db->query($sql);		

	}



	public function updateCurso($id, $nome, $descricao, $preco) {

		$sql = "UPDATE cursos SET nome = '$nome', descricao = '$descricao', preco = '$preco' WHERE id = '$id'";
		$this->db->query($sql);		

	}

	public function updateImagem($id, $md5imagem) {

		$sql = "UPDATE cursos_img SET url = '$md5imagem' WHERE id_curso = '$id'";
		$this->db->query($sql);

	}

	public function removerCurso($id) {

		$sql = "SELECT url FROM cursos_img WHERE id_curso = '$id'";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0) {
			$img = $sql->fetch();
			$img = $img['url'];

			unlink('../painel/assets/images/prods/'.$img);

			$this->db->query("DELETE FROM cursos WHERE id = '$id'");
			$this->db->query("DELETE FROM cursos_img WHERE id = '$id'");
		}

	}

	


	

}
?>