<?php 
	
	$conexao = mysqli_connect('localhost', 'root', '', 'entropia');

	$id_ideiaCamp = 'id_ideiaCamp';

	$sql = "SELECT * FROM ideiaCamp WHERE id_ideiaCamp=$id_ideiaCamp";
	$resultado = mysqli_query($conexao, $sql);
	
	$num = mysqli_num_rows($resultado);
	if($num > 0){
		while($row = mysqli_fetch_assoc($resultado)){
			$divForm[] = array(
				'id' = $row["id_ideiaCamp"],
				'titulo'	= utf8_encode($row["titulo"]),
				'descricao' = utf8_encode($row["descricao"]),
				'beneficio' = utf8_encode($row["beneficio"]),
			);
		}
	}

	echo(json_encode($divForm));
	