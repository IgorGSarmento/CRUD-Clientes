<!DOCTYPE html>
<html>
        <head>
		<link type = "text/css" rel = "stylesheet" href = "style.css"/>
                <title>Pagina Inicial</title>
        </head>

        <body>
		<?php require_once('connectdb.php');?>

		<h1>Deletar Cliente</h1><br><br>

		<form action = "del_clientes.php" method = "post">
			Nome: <input type = "text" name = "nome" size = "15" length = "100"><br>
			<input type = "submit" name = "delSubmit" value = "Deletar"><br><br>
			<input type = "button" value = "Pagina Inicial" onclick = "location. href = 'pagina_inicial.php'"/>
		</form><br><br>

		
		
                <?php
			
			if(!empty($_POST['delSubmit'])) {
				$name = pg_escape_string($_POST['nome']);

				$sql = "DELETE FROM pessoa WHERE nome = '$name'";

				$result = pg_query($sql);

				if(!$result){
					echo "Um erro ocorreu!";
				} else {
					echo "Cliente deletado!\n";
				}

				pg_close();
			}
		?>
        </body>
</html>

