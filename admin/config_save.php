<?php
	include 'includes/session.php';

	$return = 'home.php';
	if(isset($_GET['return'])){
		$return = $_GET['return'];
	}

	if(isset($_POST['save'])){
		$title = $_POST['title'];

		$file = 'config.ini';
		$content = 'election_title = '.$title;

		file_put_contents($file, $content);

		$_SESSION['success'] = 'Título da eleição atualizado com sucesso';
		
	}
	else{
		$_SESSION['error'] = "Preencha o formulário de configuração primeiro";
	}

	header('location: '.$return);

?>