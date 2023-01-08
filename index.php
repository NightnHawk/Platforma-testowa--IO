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

<?php

$object = new User();
$object->setLogin('Daniel');
echo $object->getLogin();

?>

</body>
</html>