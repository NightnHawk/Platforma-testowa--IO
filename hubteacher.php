<?php
    include_once "header.php";
    if($_SESSION["usertype"]===0){
        header("location: hubstudent.php");
    }
?>
<nav class="teacher-nav">
    <ul>
        <li>
            <a href='includes/add.inc.php'>
                <div class="teacher-add">
                    <p>Add test</p>
                </div>
            </a>
        </li>
    </ul>
</nav>
