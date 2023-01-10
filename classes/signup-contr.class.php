<?php

class SignupContr extends Signup{

    private $uid;
    private $password;
    private $passwordRepeat;
    private $email;

    public function __construct($uid, $password, $passwordRepeat, $email){
        $this->uid = $uid;
        $this->password = $password;
        $this->passwordRepeat = $passwordRepeat;
        $this->email = $email;
    }

    public function signupUser(){
        if($this->emptyInput() == false){
            //Empty imput
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false){
            //Invalid username
            header("location: ../index.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false){
            //Invalid email
            header("location: ../index.php?error=email");
            exit();
        }
        if($this->passwordMatch() == false){
            //Passwords don't match
            header("location: ../index.php?error=password");
            exit();
        }
        if($this->uidTakenCheck() == false){
            //User or email taken
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->password, $this->email);
    }

    private function emptyInput(){
        $result;
        if(empty($this->uid) || empty($this->password) ||  empty($this->passwordRepeat) || empty($this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidUid(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function passwordMatch(){
        $result;
        if($this->password !== $this->passwordRepeat){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck(){
        $result;
        if(!$this->checkUser($this->uid, $this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}