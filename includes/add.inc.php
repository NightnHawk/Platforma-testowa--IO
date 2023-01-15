<?php
	include_once "../header.php";
?>

	<main>
		<div class="conteiner">
			<h2>Add A Question</h1>
			<form method="post" action="add.inc.php">
				<p>
					<label>Question Number:</label>
					<input type="number" name="question_nr"/>
				</p>
					<p>
					<label>Question Text:</label>
					<input type="text" name="question_text"/>
				</p>
					<p>
					<label>Choice #1:</label>
					<input type="text" name="choice1"/>
				</p>
					<p>
					<label>Choice #2:</label>
					<input type="text" name="choice2"/>
				</p>
					<p>
					<label>Choice #3:</label>
					<input type="text" name="choice3"/>
				</p>
					<p>
					<label>Choice #4:</label>
					<input type="text" name="choice4"/>
				</p>
					<p>
					<label>Correct choice nr:</label>
					<input type="number" name="correct"/>
				</p>
					<p>
					<input type="submit" name="submit" value="submit"/>
				</p>
		</div>
	</main>
</body>
</html>