<?php

class DbTest extends Database{
	public function getUsers(){
		$sql = "SELECT *FROM users";
		$stmt = $this->connect()->query($sql);
		while($row = $stmt->fetch()){
			echo $row['user_firstname'].'<br>';
		}
	}


}