<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search by name</title>
</head>
<?php
$name = $_POST['nameofcontact'];
$phone = '';
$mail = '';

$info = [
	['name' => 'Dubravko',
	'phone' => '01 124',
	'mail' => 'dub@here.com'],
	['name' => 'Marko',
	'phone' => '01 136',
	'mail' => 'marko@here.com'],
	['name' => 'Lara',
	'phone' => '01 145',
	'mail' => 'lara@here.com'],	
	['name' => 'Nedeljko',
	'phone' => '01 179',
	'mail' => 'neno@here.com']
];
foreach ($info as $sing_person) {
	if (array_search($name, $sing_person) !== false) {
		$phone = $sing_person['phone'];
		$mail = $sing_person['mail'];
	};
};
?>
<body>
	<h3>Enter the name of the contact:</h3>
		<p>
			<form action="" method="post">
				<input type="text" name="nameofcontact" value="<?php echo $name; ?>">
				<div>
					<input type="submit" name="search">
				</div>
				<p>
					<input readonly="readonly" name="show_phone" value="<?php echo $phone; ?>">
				</p>
					<input readonly="readonly" name="show_mail" value="<?php echo $mail; ?>">
				</p>
			</form>
		</p>
</body>
</html>