<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<header>
		<div>
			<h1>Question</h1>
		</div>
	</header>
	<main>
		<h2>The End</h2>
			<p>You Died</p>
			<p>Final Score: <?php echo $_SESSION['score']; ?></p>
			<a href="test_start.inc.php" class="start">Take Again<?php $_SESSION['score']=0;?></a>
	</main>
</body>
</html>