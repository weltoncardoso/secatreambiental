<?php
class model {
	
	protected $db;

	public function __construct() {
		global $config;

		try {
    $this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
    // set the PDO error mode to exception
   $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Coneccao falhou: " . $e->getMessage();
}
		
	}

}
?>