<?php 

	session_start();
	//Estamos trabalhando na montagem do texto	
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	$texto = $_SESSION['id'] . '#' . $titulo .'#'. $categoria .'#'. $descricao . PHP_EOL;

	//Abrindo arquivo
	$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

	//Escrevendo o texto
	fwrite($arquivo, $texto);

	//Fechando arquivo
	fclose($arquivo);

	//echo $texto;

	header('location: abrir_chamado.php');

?>