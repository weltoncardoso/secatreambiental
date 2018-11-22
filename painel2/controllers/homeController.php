<?php
class homeController extends controller {
	
public function __construct() {
       parent::__construct();

        $usuarios = new Usuarios();
        if(!$usuarios->isLogged()) {
        	header("Location: ".BASE."login");

}
}
public function index() {
	$dados = array(
		'cursos' => array()
	);

	$cursos = new Cursos();
	$dados['cursos'] = $cursos->getCursos();


$this->loadTemplate('home', $dados);
}
public function excluir($id) {
	$sql = "SELECT id FROM aulas WHERE id_curso = '$id'";
 		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$aulas = $sql->fetchAll();

			foreach ($aulas as $aula) {
				$sqlaula = "DELETE FROM historico WHERE id_aula = '".($aula['id'])."'";
				$this->db->query($sqlaula);

				$sqlaula = "DELETE FROM questionarios WHERE id_aula = '".($aula['id'])."'";
				$this->db->query($sqlaula);

				$sqlaula = "DELETE FROM videos WHERE id_aula = '".($aula['id'])."'";
				$this->db->query($sqlaula);
			}
		}

		$sql = "DELETE FROM aluno_curso WHERE id_curso = '$id'";
		$this->db->query($sql);

		$sql = "DELETE FROM aulas WHERE id_curso = '$id'";
		$this->db->query($sql);

		$sql = "DELETE FROM modulos WHERE id_curso = '$id'";
		$this->db->query($sql);

		$sql = "DELETE FROM cursos WHERE id = '$id'";
		$this->db->query($sql);
	
	header("Location: ".BASE);
	}

	public function adicionar() {
		$dados = array();
        
        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        	$nome = addslashes($_POST['nome']);
        	$descricao = addslashes($_POST['descricao']);
			$imagem = $_FILES['imagem'];
			$preco = addslashes($_POST['preco']);

			if (!empty($imagem['tmp_name'])) {
				$md5name = md5(time().rand(0,9999)).'.jpg';
				$types = array('image/jpeg', 'image/jpg', 'image/png');

				if (in_array($imagem['type'], $types)) {
					move_uploaded_file($imagem['tmp_name'], "../painel2/assets/images/".$md5name);
					$this->db->query("INSERT INTO cursos SET nome = '$nome', descricao = '$descricao', imagem = '$md5name', preco = '$preco'");
					header("Location: ".BASE);
				}

			}
        }
		$this->loadTemplate("curso_add", $dados);
			}

	public function editar($id) {
			$dados = array(
				'curso' => array(),
				'modulos' =>array()
			);

			if (isset($_POST['nome']) && !empty($_POST['nome'])) {
	        	$nome = addslashes($_POST['nome']);
	        	$descricao = addslashes($_POST['descricao']);
				$imagem = $_FILES['imagem'];
				$preco = addslashes($_POST['preco']);

				$this->db->query("UPDATE cursos SET nome = '$nome', descricao = '$descricao', preco = '$preco' WHERE id = '$id'");

				if (!empty($imagem['tmp_name'])) {
				$md5name = md5(time().rand(0,9999)).'.jpg';
				$types = array('image/jpeg', 'image/jpg', 'image/png');
				if (in_array($imagem['type'], $types)) {
					move_uploaded_file($imagem['tmp_name'], "../painel2/assets/images/".$md5name);
					$this->db->query("UPDATE cursos SET imagem = '$md5name' WHERE id = '$id'");
				    }
				}
	        }
    $modulos = new Modulos();
    // Usuario adicionou outro modulo
    if (isset($_POST['modulo']) && !empty($_POST['modulo'])) {
	$modulo = utf8_decode(addslashes($_POST['modulo'])); 
	$modulos->addModulo($modulo,$id);
		}
	//usuario add uma nova aula
	if (isset($_POST['aula']) && !empty($_POST['aula'])) {
	$aula = utf8_decode(addslashes($_POST['aula']));
	$moduloaula = utf8_decode(addslashes($_POST['moduloaula']));
	$tipo = utf8_decode(addslashes($_POST['tipo'])); 

	$aulas = new Aulas();
	$aulas->addAula($id, $moduloaula, $aula, $tipo);
		}

	$cursos = new Cursos();
	$dados['curso'] = $cursos->getCurso($id);
	$dados['modulos'] = $modulos->getModulos($id);

    
    
	$this->loadTemplate("curso_edit", $dados);
		}
	public function del_modulo($id) {

	if (!empty($id)) {

		$id = addslashes($id);
		$sql = "SELECT id_curso FROM modulos WHERE id ='$id'";
		$sql = $this->db->query($sql);
		  if ($sql->rowCount() > 0) {
			$sql = $sql->fetch();
			$this->db->query("DELETE FROM modulos WHERE id = '$id'");

			header("Location: ".BASE."home/editar/".$sql['id_curso']);
			exit();
			}

 		}
	header("Location: ".BASE);
	}

	public function del_aula($id) {

	if (!empty($id)) {

		$id = addslashes($id);
		$sql = "SELECT id_curso FROM aulas WHERE id ='$id'";
		$sql = $this->db->query($sql);
		  if ($sql->rowCount() > 0) {
			$sql = $sql->fetch();
			$this->db->query("DELETE FROM aulas WHERE id = '$id'");
			$this->db->query("DELETE FROM questionarios WHERE id_aula = '$id'");
			$this->db->query("DELETE FROM videos WHERE id_aula = '$id'");
			$this->db->query("DELETE FROM historico WHERE id_aula = '$id'");

			header("Location: ".BASE."home/editar/".$sql['id_curso']);
			exit();
			}

 		}
	header("Location: ".BASE);
	}

	public function edit_aula($id) {
		$dados = array();
		$view = 'curso_edit_aula_video';
		$aulas = new Aulas();

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$descricao = addslashes($_POST['descricao']);
			$url = addslashes($_POST['url']);

			$id_curso = $aulas->updateVideoAula($id, $nome, $descricao, $url);
			header("Location: ".BASE."home/editar/".$id_curso);
		}

		if (isset($_POST['pergunta']) && !empty($_POST['pergunta'])) {
			$pergunta = addslashes($_POST['pergunta']);
			$opcao1 = addslashes($_POST['opcao1']);
			$opcao2 = addslashes($_POST['opcao2']);
			$opcao3 = addslashes($_POST['opcao3']);
			$opcao4 = addslashes($_POST['opcao4']);
			$resposta = addslashes($_POST['resposta']);

			$id_curso = $aulas->updateQuestionarioAula($id, $pergunta, $opcao1, $opcao2, $opcao3, $opcao4, $resposta);
			header("Location: ".BASE."home/editar/".$id_curso);
		}

		$dados['aula'] = $aulas->getAula($id);

		if ($dados['aula']['tipo'] == 'video') {
			$view = 'curso_edit_aula_video';
		} else {
			$view = 'curso_edit_aula_poll';
		}

		$this->loadTemplate($view, $dados);
	}
}