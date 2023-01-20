<?php
    include_once "header.php";
    if($_SESSION["usertype"]===1){
        header("Location: hubteacher.php");
    }
?>
<nav class="teacher-nav">
    <ul>
        <li>
			<a href='choose_test.php'>
                <div class="teacher-add">
                    <p>Choose test</p>
                </div>
            </a>
			<br>
				<a href='includes/display_done_tests.inc.php'>
                <div class="teacher-add">
                    <p>See done tests</p>
                </div>
            </a>
			<br>
        </li>
    </ul>
</nav>