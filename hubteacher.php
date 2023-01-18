<?php
    include_once "header.php";
    if($_SESSION["usertype"]===0){
        header("location: hubstudent.php");
    }
?>
<nav class="teacher-nav">
    <ul>
        <li>
		    <a href='add_test.php'>
                <div class="teacher-add">
                    <p>Add test</p>
                </div>
            </a>
			<br>
            <a href='includes/add.inc.php'>
                <div class="teacher-add">
                    <p>Add question</p>
                </div>
            </a>
			<br>
				<a href='includes/remove_test.inc.php'>
                <div class="teacher-add">
                    <p>Remove test</p>
                </div>
            </a>
			<br>
			<a href='includes/remove.inc.php'>
                <div class="teacher-add">
                    <p>Remove question</p>
                </div>
            </a>
			<br>
				<a href='includes/display_data.inc.php'>
                <div class="teacher-add">
                    <p>Display test</p>
                </div>
            </a>
			<br>
							<a href='choose_test.php'>
                <div class="teacher-add">
                    <p>Choose test</p>
                </div>
            </a>
			<br>
        </li>
    </ul>
</nav>
