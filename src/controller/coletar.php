<?php 
	include_once("../conexao/conexao.php");

	$id_campanha = $_REQUEST['id_campanha'];
	
	$sql = "SELECT * FROM ideiaCamp WHERE id_campanhafk=$id_campanha ORDER BY titulo";
	$resultado = mysqli_query($conn, $sql);
	
	while ($row_ideia = mysqli_fetch_assoc($resultado) ) {
		$ideiaCamp[] = array(
			'id_ideiaCamp'	=> $row_ideia['id_ideiaCamp'],
			'titulo' => utf8_encode($row_ideia['titulo']),
		);
	}
	
	echo(json_encode($ideiaCamp));
