<?php

class DbTest extends Database{
	public function getUsers(){
		$sql = "SELECT *FROM user";
		$stmt = $this->connect()->query($sql);
		while($row = $stmt->fetch()){
			echo $row['users_firstname'].'<br>';
		}
	}


}