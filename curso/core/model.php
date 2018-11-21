<?php
class model {
	
	protected $db;

	public function __construct() {
		global $config;
		Try {
		$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo "FALHA: ".$e->getMessage();
	}
}

}
?>