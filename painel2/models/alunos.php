<?php
 class Alunos extends model {
 	
 	public function getAlunos() {
 		$array = array();

 	$sql = "SELECT
 		*,
 		(select count(*) from aluno_curso where aluno_curso.id_aluno = alunos.id) as qtcursos
 		FROM alunos";
 	$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
 }
 return $array;
 	}

 public function getAluno($id) {
 	$array = array();

 	$sql = "SELECT * FROM alunos WHERE id = '$id'";
 	$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
 }
 return $array;

 }

 public function addAluno($nome, $email, $senha) {
 	$this->db->query("INSERT INTO alunos SET nome = '$nome', email = '$email', senha = '$senha', date_cadastro = NOW()");

 	$this->db->query("INSERT INTO alunos SET nome = '$nome', email = '$email', senha = '$senha'");

 }

 public function updateAluno($id, $nome, $email, $senha, $cursos) {
 	$this->db->query("UPDATE alunos SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id'");
	$this->db->query("DELETE FROM aluno_curso WHERE id_aluno = '$id'");
	foreach ($cursos as $curso) {
	$this->db->query("INSERT INTO aluno_curso SET id_aluno = '$id', id_curso = '$curso', date_cadastro = NOW()");
		}
 	
 }

 public function deleteAluno($id) {
 	$sql = "DELETE FROM aluno_curso WHERE id_aluno = '$id'";
		$this->db->query($sql);

		$sql = "DELETE FROM alunos WHERE id = '$id'";
		$this->db->query($sql);
 }

 public function getAlunos_curso() {
 		$array = array();

 	$sql = "SELECT
al.nome as aluno,
cu.nome as curso,
COALESCE(mo.nome, 's/modulo') as modulo,
(select count(aul.tipo = 0) from aulas aul where aul.id_modulo = mo.id ) as qtd_de_aula,
sum((select count(modi.id) from modulos modi where modi.id = hi.id_modulo)) as qtd_assitida
FROM
 cursos cu
left join historico hi  on cu.id = hi.id_curso
left join modulos mo on mo.id = hi.id_modulo
left join aluno_curso alu on alu.id_curso = cu.id
left join alunos al on al.id = alu.id_aluno


group by 1,2,3";
 	$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
 }
 return $array;
 	}

 }
?>