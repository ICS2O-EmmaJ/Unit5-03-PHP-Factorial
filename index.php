<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Emma Janani">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Factorial of a Number in PHP</title>
  </head>
  <body>
    <?php echo "<h1>Factorial of a Number in PHP</h1>"; ?>
	<?php echo "<h3>This program will display the factorial of a number you want:</h3>"; ?>
	<table>
		<tr align = "center">
			<td valign="top" align="right">					
				<form action="./results.php" method="post" target="results">	
        <!-- Asking user for positive number -->
					<label for="userNum">Enter a positive integer:</label>
					<input type="number" step="1" min="0" name="userNum"><br><br>
					<input type="submit" value="Calculate Factorial">
				</form>
        <br>
			</td>
			<td valign="top" align="left">
			</td>
		</tr>
	</table>	
	<!-- Create a space where the user information will be displayed -->
	<iframe name="results"></iframe>
  <br><br>
	<img src="./images/digits.jpg" alt="Numbers" width="20%">
  </body>
</html>
