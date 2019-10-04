<?php

    include "connectDatabase.php";
    session_start();
    

	$endereco = $_POST["enderecoUsuario"];
	$nome = $_POST["nomeUsuario"]." ".$_POST["sobrenomeUsuario"];
	$telefone = $_POST["telefoneUsuario"];
	$email = $_POST["emailUsuario"];
	$telefoneEntrada = $_POST["telefoneUsuario"];
	$senha = md5($_POST["senhaUsuario"]);
	$sexo = $_POST["sexoUsuario"];
	$estado = $_POST["estadoUsuario"];
	$cidade = $_POST["cidadeUsuario"];
	$cep = $_POST["cepUsuario"];


	$sql = "INSERT INTO usuario(email_usuario, nome_usuario, sexo_usuario, senha_usuario, endereco_usuario, telefone_usuario) VALUES ('$email','$nome','$sexo','$senha','$endereco','$telefone')";


	if (mysqli_query($connect, $sql)) {
		$id = mysqli_insert_id($connect);
		$_SESSION['statusCadastro'] = "true";
		echo "deu certo";
		#header("location:cadastroUsuario.php");
	} else {
		$_SESSION['statusCadastro'] = "false";
		echo "deu nao";
		#header("location:cadastroUsuario.php");
	}

	mysqli_close($connect);
?>