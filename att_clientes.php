<!DOCTYPE html>

<html>
	<head>
		<link type = "text/css" rel = "stylesheet" href = "style.css"/>
		<title>Atualizar Cliente</title>
	</head>

	<body>
		<?php require_once('connectdb.php');?>
		
		<h1>Atualizar Dados</h1><br><br>

		<form action = "att_clientes.php" method = "post">
			Nome Anterior: <input type = "text" name = "nome_ant" size = "15" length = "100"><br>
			Nome Novo: <input type = "text" name = "nome" size = "15" length = "100"><br>
   			CPF Novo: <input type = "text" name = "cpf" size = "5" length = "11"><br>
			Idade Nova: <input type = "text" name = "idade" size = "1" length = "3"><br>
			<input type = "submit" name = "attSubmit" value = "Atualizar">
			<input type = "reset" name = "reset" value = "Limpar"><br><br>
			<input type = "button" value = "Pagina Inicial" onclick = "location. href = 'pagina_inicial.php'"/>
		</form><br><br>

		

		<?php

			if(!empty($_POST['attSubmit'])) {
				$name_ant = pg_escape_string($_POST['nome_ant']);
				$name = pg_escape_string($_POST['nome']);
				$cpf = pg_escape_string($_POST['cpf']);
				$idade = pg_escape_string($_POST['idade']);
			
				$sql = "UPDATE pessoa SET nome = '$name', cpf = '$cpf', idade = '$idade' WHERE nome = '$name_ant'";

				$result = pg_query($sql);
				if(!$result){
				  	echo "Um erro ocorreu!";
				} else {
				  	echo "Atualizado com sucesso!";
				}

				pg_close();
			}
		?>
	</body>
</html>
