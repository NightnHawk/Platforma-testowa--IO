<?php



//łączenie z bazą danych przy pomocy PDO
class Database{
	private $host = "localhost"; //będzia trzeba zmienić dla online hosta
	private $user = "root";
	private $password = "";
	private $dbName = "userdb";
	
	protected function connect(){
		$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
		$pdo = new PDO($dsn, $this->user, $this->password);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
	}

}


?>