<!DOCTYPE html>

<html>
	<head>
		<link type = "text/css" rel = "stylesheet" href = "style.css"/>
		<title>Consultar Clientes</title>
	</head>

	<body>
		<?php require_once('connectdb.php');?>

		<h1>Clientes Cadastrados</h1><br><br>

		<form>
			<input type = "button" value = "Pagina Inicial" onclick = "location. href = 'pagina_inicial.php'"/><br><br>
		
			<?php

				$sql = "SELECT * FROM pessoa ORDER BY id ASC";

				$result = pg_query($sql);

				$ct = 1;

				echo "<p>Lista de Clientes:</p>";

				while($consulta = pg_fetch_assoc($result)) {
					echo "Cliente " .$ct. "<br/>";
					echo "Nome: " .$consulta['nome']. "<br/>";
					echo "CPF: " .$consulta['cpf']. "<br/>";
					echo "Idade: " .$consulta['idade']. "<br/><br/><br/>";
					$ct++;
				}

				pg_close();
			?>
		</form>
	</body>
</html>
