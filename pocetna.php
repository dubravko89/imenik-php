<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to IMENIK!</title>
</head>
<body>
	<h1>Welcome to IMENIK!</h1>
		<h4>Please, choose the type of search</h4>
			<p>
				<form action="by_name.php" method="post" id="sby_name" name="sby_name">
					<input type="submit" name="def_s_name" value="Name">
				</form>
			</p>
			<p>
				<form action="by_phone.php" method="post" id="sby_phone" name="sby_phone">
					<input type="submit" name="def_s_phone" value="Phone">
				</form>
			</p>
			<p>
				<form action="by_mail.php" method="post" id="sby_mail"	name="sby_mail">
					<input type="submit" name="def_s_mail" value="Mail">
				</form>
			</p>
</body>
</html>