<?php
session_start();

if(isset($_POST["submit"]))
{
    //Grabbing the data
    $uid=$_POST["uid"];
    $password=$_POST["password"];

    //Instantiate SignupContr class
    include "..\classes\dbh.class.php";
    include "..\classes\login.class.php";
    include "..\classes\login-contr.class.php";
    $signup = new LoginContr($uid, $password);

    //Running error handlers and user signup
    $signup->loginUser();

    //Going to back to front page
    $type = $_SESSION["usertype"];
    if($type === 0){
        header("location: ../hubstudent.php");
    } elseif($type === 1){
        header("location: ../hubteacher.php");
    }
    
}