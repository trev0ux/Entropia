<?php 
	$conexao = mysqli_connect('localhost', 'root', '', 'entropia');

	$id_campanha = $_REQUEST['camp_id'];
	
	$sql = "SELECT * FROM ideiaCamp WHERE id_campanhafk=$id_campanha";
	$resultado = mysqli_query($conexao, $sql);
	
	while ($row_ideia = mysqli_fetch_assoc($resultado) ) {
		$ideiaCamp[] = array(
			'id_ideiaCamp'	=> $row_ideia['id_ideiaCamp'],
			'titulo' => utf8_encode($row_ideia['titulo']),
		);
	}
	
	echo(json_encode($ideiaCamp));