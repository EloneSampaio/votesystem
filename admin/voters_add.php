<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		//generate voters id
		$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$voter = substr(str_shuffle($set), 0, 5);

		$sql = "INSERT INTO voters (voters_id, password, firstname, lastname, photo) VALUES ('$voter', '$password', '$firstname', '$lastname', '$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Eleitor adicionado com sucesso';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Preencha primeiro o formulário de adição';
	}

	header('location: voters.php');
?>