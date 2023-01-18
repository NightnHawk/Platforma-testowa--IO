<?php
    include_once "header.php";
    if($_SESSION["usertype"]===1){
        header("Location: hubteacher.php");
    }
?>