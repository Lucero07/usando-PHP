<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hola</title>
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<h1>Hola Mundo</h1>
		<div class="pruebaPHP">
			<?php
			// echo 'Hola Mundo!';
			// phpinfo();
			$nombre = 'Lucero';
			$num1 = 673;
			$num2 = 345;
			echo $num1+$num2;
			echo "<br>";
			echo "Hola ".$nombre.'<br>';

			function factorial ($numero){
				if($numero==1){
					return $numero;
				}
				return $numero * factorial($numero -1);
			}
			echo 'El factorial de 5 es '. factorial(5);

			 ?>
		</div>
	</body>
</html>
