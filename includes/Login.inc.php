<?php

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
    header("location: ../index.php?error=none");
}