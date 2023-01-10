<?php

class Signup extends Dbh{

    protected function setUser($uid, $password, $email){
        $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd, users_email) VALUES (?, ?, ?);');
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($uid, $hashedPassword, $email))){
            $stmt = null;
            header("location: ../index.php?error=stmlfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($uid, $email){
        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email =?;');
        if(!$stmt->execute(array($uid, $email))){
            $stmt = null;
            header("location: ../index.php?error=stmlfailed");
            exit();
        }
        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

}