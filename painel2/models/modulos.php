<?php
 class Modulos extends model {
 	public function getModulos($id_curso)
 	{
 		$array = array();

 		$sql = "SELECT * FROM modulos WHERE id_curso = '$id_curso'";
 		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();

			$aulas = new Aulas();

			foreach ($array as $mChave => $mDados) {
				$array[$mChave]['aulas'] = $aulas->getAulasDoModulo($mDados['id']);
			}

		}

 		return $array;
 	}
 	public function addModulo($nome, $id_curso)
 	{
 		$this->db->query("INSERT INTO modulos SET nome = '$nome', id_curso = '$id_curso'");
 	}

 	public function deleteModulo($id)
 	{
 		$sql = "SELECT id_curso FROM modulos WHERE id ='$id'";
		$sql = $this->db->query($sql);
		   if ($sql->rowCount() > 0) {
		$sql = $sql->fetch();
		$this->db->query("DELETE FROM modulos WHERE id = '$id'");
			}
 	}
}
