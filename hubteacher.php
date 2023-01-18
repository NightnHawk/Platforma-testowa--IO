<?php
    include_once "header.php";
    if($_SESSION["usertype"]===0){
        header("location: hubstudent.php");
    }
?>