<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>prvi</title>
</head>
<body>

<form action="kalkulator.php" method="post">
	<input type="text" name="num1">
	<input type="text" name="num2">
	<label for="operat">Choose an operation:</label>
	<select id="operat" name="operat">
		<option value="0">Addition</option>
		<option value="1">Subtraction</option>
		<option value="2">Multiplication</option>
		<option value="3">Division</option>
	</select>
	<button type="submit" name="do-operation">Do operation</button>
</form>

</body>
</html>
