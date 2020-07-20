<?php 

require_once "sumValues.php"

?>


<!DOCTYPE html>
<html>
<head>
	<title>Testando</title>
</head>
<body>

	<h1>Saldo atual: <?= $currentMoney ?></h1>

	<br>
	<form action="addMove.php" method="POST">
		<h1>Adicionar movimentação</h1>

		<label for="type">Type:</label>
		<input type="name" name="type">

		<label for="value">Value:</label>
		<input type="number" name="value">

		<label for="description">Description:</label>
		<input type="name" name="description">

		<label for="category">Category:</label>
		<input type="name" name="category">

		<button type="submit">SUBMIT</button>
	</form>
</body>
</html>