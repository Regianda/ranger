<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<?php
		echo "Halaman Login";
	?>

	<h1>Halaman Login</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="login">login</button>
			</li>
		</ul>
	</form>

</body>
</html>