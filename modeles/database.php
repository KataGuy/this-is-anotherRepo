<?php
session_start();
class Database {
	private $connexionDB;
	private $dbname;
	private $host;
	private $port;
	private $dbuser;
	private $dbpass;

	function __construct($dbuser = "iutinfo", $dbpass = "AzbjK79KLm", $dbname = 'iutinfo', $host = 'localhost', $port = '5432') {
		$this->dbname = $dbname;
		$this->host = $host;
		$this->port = $port;
		$this->dbuser = $dbuser;
		$this->dbpass = $dbpass;
		if ($dbuser === null) {
			$this->dbuser = $_SESSION['nom'];
		}
		if ($dbpass === null) {
			$this->dbpass = $_SESSION['pass'];
		}

	}

	function getPDO() {
		if($this->connexionDB === null){
			try {
        		$this->connexionDB = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->dbuser;password=$this->dbpass");
        		$this->connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		    } catch(PDOException $e) {
		        //echo $e->getMessage();  
		        echo '<b>ERREUR DE CONNEXION DB.</b> Veuillez vous connecter avec vos identifiants de l\'IUT en <a href="index.php?action=connexionDB">cliquant ici</a>';
		    }
		}

		return $this->connexionDB;
	}

	public function query($statement) {
		try {
			return $this->connexionDB->query($statement)->fetchAll();
		} catch(Exception $e) {
			echo "<b>ERREUR:</b> $e";
		}
		
	}

}

?>