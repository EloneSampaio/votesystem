<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM voters WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Eleitor excluído com sucesso';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Selecione o item para excluir primeiro';
	}

	header('location: voters.php');
	
?>