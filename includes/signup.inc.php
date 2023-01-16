<?php

if(isset($_POST["submit"]))
{
    //Grabbing the data
    $uid=$_POST["uid"];
    $first=$_POST["first"];
    $last=$_POST["last"];
    $password=$_POST["password"];
    $passwordRepeat=$_POST["password-repeat"];
    $email=$_POST["email"];
    $type=$_POST["index-login-account-type"];

    //Instantiate SignupContr class
    include "..\classes\dbh.class.php";
    include "..\classes\signup.class.php";
    include "..\classes\signup-contr.class.php";
    $signup = new SignupContr($uid, $first, $last, $password, $passwordRepeat, $email, $type);

    //Running error handlers and user signup
    $signup->signupUser();

    //Going to back to front page
    header("location: ../index.php?error=none");
}