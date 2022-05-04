<!DOCTYPE html>
<html>
<head>
	<title>Fitness</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="connect.php" method="post">
<div id="div1">
		<table >
		<caption id="caption1"> Fitness Registration form </caption>
		<tr>
		<td><label for="name">Name: </label></td>
		<td><input type="text" id="name" name="name" ></td>
		
	</tr>
	     <tr>
		<td><label for="age">Age: </label></td>
		<td><input type="number" id="password" name="age"></td>
		
	</tr>
	    <tr>
		<td><label for="height">Height: </label></td>
		<td><input type="number" step="any" id="name" name="height"></td>
	</tr>
	<tr>
		<td><label for="weight" >Weight : </label></td>
		<td><input type="number" step="any" name="weight"></td>
	</tr>
	<tr>
		<td><label >Goal:</label></td>
		<td>
			<select name="goal">
				<option value="fat loss" name="fat loss">Fat loss </option>
				<option value="muscle gain" name="muscle gain">Muscle Gain</option>
            </select>
		</td>
	</tr>
		
	</table>
	<button id="btn1">submit</button>
</div>
</form>
</body>
</html>