<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<h1> MENAMPILKAN BILANGAN GENAP DARI 1 - 100</h1>

<body>
	<?php
	$count = 0;
	for ($i = 1; $i <= 100; $i++) {
		if ($i % 2 == 0) {
			if ($i < 100) {
				echo $i . ", ";
			} else {
				echo $i . ". ";
			}
		}
		$count = $count + 1;
		if ($count >= 20) {
			echo "</br>";
			$count = 0;
		}
	}
	?>

</body>

</html>