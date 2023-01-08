<?php
include 'includes/autoloader.inc.php';

?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
	<meta charset="uft-8">
	<title>Strona testowa</title>
</head>
<body>
<nav>
	<div class="wrapper">
		<a href="index.php"><img src="images\8-C1fYhy4B9Mm8wbB.png" alt="Website logo"></a>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="includes/login.inc.php">Log in</a></li>
		</ul>
	</div>
</nav>
	<?php
		//$testObj = new DbTest();
		//$testObj->getUsers();
		
$test = new closeQuestion();
$test->setInstruction('W którym roku wybuchła I Wojna Światowa?');
$test->addAnswer('W roku 1918.');
$test->addAnswer('W roku 1897.');

$test->rmAnswer(0);


echo $test->getInstruction();
echo $test->getAnswer(1);

	?>

</body>
</html>