<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<tr>
			<td>
				<h1>Accueil</h1>
			</td>
			<td>
				<h2>Tuto</h2>
			</td>

		</tr>
		<tr>

			<?php
			$conn = mysqli_connect("db","root","password","test");

			//On vérifie les accès à la base de donnée
			if (!$conn)
				die('Base de donnée - mysql_connect: ' . mysqli_connect_error());
			echo "connection a la base de donnée mysql reussi";

			////////////////////////////////////////////////////
			// ICI MON CODE PHP AVEC MES REQUETES...
			///////////////////////////////////////////////////

			mysqli_close($conn); // On ferme la connexion à la base de donnée

			?>

		</tr>
		<tr>

		</tr>
	</body>
</html>
