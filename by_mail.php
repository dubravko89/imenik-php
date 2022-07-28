<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search by phone</title>
</head>
<?php
$mail = $_POST['mailofcontact'];
$name = '';
$phone = '';

$info = [
	['name' => 'Dubravko',
	'phone' => '123',
	'mail' => 'dub@here.com'],
	['name' => 'Marko',
	'phone' => '234',
	'mail' => 'marko@here.com'],
	['name' => 'Lara',
	'phone' => '345',
	'mail' => 'lara@here.com'],	
	['name' => 'Nedeljko',
	'phone' => '456',
	'mail' => 'neno@here.com']
];
foreach ($info as $sing_person) {
	if (array_search($mail, $sing_person) !== false) {
		$name = $sing_person['name'];
		$phone = $sing_person['phone'];
	};
};
?>
<body>
	<h3>Enter the mail of the contact:</h3>
		<p>
			<form action="" method="post">
				<input type="text" name="mailofcontact" value="<?php echo $mail; ?>">
				<div>
					<input type="submit" name="search">
				</div>
				<p>
					<input readonly="readonly" name="show_name" value="<?php echo $name; ?>">
				</p>
					<input readonly="readonly" name="show_phone" value="<?php echo $phone; ?>">
				</p>
			</form>
		</p>
</body>
</html>