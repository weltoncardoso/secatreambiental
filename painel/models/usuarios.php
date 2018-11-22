<?php
 class Usuarios extends model {
 private $info;

 public function isLogged() {
 	if (isset($_SESSION['admlogin']) && !empty($_SESSION['admlogin'])) {
 			return true;
 		} else {
 			return false;
 		}

 	}

 public function fazerLogin($email, $senha) {
		$sql = "SELECT * FROM admins WHERE usuario = '$email' AND senha = '$senha'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$row = $sql->fetch();

			$_SESSION['admlogin'] = $row['id'];

			return true;
		}
			return false;
		}

 }
?>