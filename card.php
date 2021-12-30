<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="card.css">
    <title>card</title>
</head>
<body>
	<header>
	<p><h2>Datos enviados correctamente</h2></p>
	</header>

    <div>
	<?php
        $Name = $_POST["name"];
		$Email = $_POST["email"];
		$Date = $_POST["dates"];


		echo  "<p>El nombre es:   	$Name   </p> ";
		echo "<p>email es : 		$Email </p> ";
		echo "<p>fecha de nacimiento es: $Date </p> ";
	?>
		</div>
</body>
</html>