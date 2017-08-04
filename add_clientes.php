<!DOCTYPE html>
<html>
	<head>
		<link type = "text/css" rel = "stylesheet" href = "style.css"/>
		<title>Pagina Clientes</title>
	</head>

	<body>
		<?php require_once('connectdb.php');?>

		<h1>Cadastrar Clientes</h1><br><br>


		<form action = "add_clientes.php" method = "post">
			Nome: <input type = "text" name = "nome" size = "15" length = "100"><br>
   			CPF: <input type = "text" name = "cpf" size = "5" length = "11"><br>
			Idade: <input type = "text" name = "idade" size = "1" length = "3"><br>
			<input type = "submit" name = "addSubmit" value = "Enviar">
			<input type = "reset" name = "reset" value = "Limpar"><br><br>
			<input type = "button" value = "Pagina Inicial" onclick = "location. href = 'pagina_inicial.php'"/><br><br>
		</form><br><br>

		

		<?php

			if(!empty($_POST['addSubmit'])) {
				$name = pg_escape_string($_POST['nome']);
				$cpf = pg_escape_string($_POST['cpf']);
				$idade = pg_escape_string($_POST['idade']);

				$sql = "INSERT INTO pessoa(nome, cpf, idade) VALUES('$name', '$cpf', '$idade')";
				$result = pg_query($sql);
				if(!$result) {
					$errormessage = pg_last_error();
					echo "Erro com a QUERY: ".$errormessage;
					exit();
				}

				pg_close();
			}

		?>

	</body>
</html>
