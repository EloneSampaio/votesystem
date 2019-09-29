<?php
	include 'includes/session.php';

	$sql = "DELETE FROM votes";
	if($conn->query($sql)){
		$_SESSION['success'] = "Votos redefinidos com sucesso";
	}
	else{
		$_SESSION['error'] = "Ocorreu um erro ao redefinir";
	}

	header('location: votes.php');

?>