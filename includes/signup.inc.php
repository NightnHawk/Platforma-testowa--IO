<?php

if(isset($_POST["submit"]))
{
    //Grabbing the data
    $uid=$_POST["uid"];
    $password=$_POST["password"];
    $passwordRepeat=$_POST["password-repeat"];
    $email=$_POST["email"];

    //Instantiate SignupContr class
    include "..\classes\dbh.class.php";
    include "..\classes\signup.class.php";
    include "..\classes\signup-contr.class.php";
    $signup = new SignupContr($uid, $password, $passwordRepeat, $email);

    //Running error handlers and user signup
    $signup->signupUser();

    //Going to back to front page
    header("location: ../index.php?error=none");
}