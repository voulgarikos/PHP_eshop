<html>
	<head>
		<title> Login Example </title>
	</head>
	<body>
		<form action="checklogin.php" method="post">
		<table>
			<tr>
				<td> Username </td>
				<td> <input type='text' name='uname' id='uname' </td>
			</tr>
			<tr>
				<td> Password </td>
				<td> <input type='password' name='pass' id='pass'></td>
			</tr>
			<tr>
				<td colspan='2' align='center'>
				<input type='submit' value='Login'>
				</td>
			</tr>
		</table>
		</form>
		<?php
			if (isset($_GET["message"])) {  //έλεγχος για το αν η message έχει πάρει τιμή για να μην βγάζει λάθος στην 1η φώρτωση
			echo "<h1 style='color:red'>" . $_GET["message"] . "</h1>";//εμφανίζει το περιεχόμενο της message
			}
			?>
	</body>
</html>