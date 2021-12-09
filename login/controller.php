<!--
//////////////////////////////////////////////////////////////////////////
// Criacao...........: 10/2018
// Sistema...........: Site em MVC
// Analistas.........: Marilene Esquiavoni & Denny Paulista Azevedo Filho
// Desenvolvedores...: Marilene Esquiavoni & Denny Paulista Azevedo Filho
// Copyright.........: Marilene Esquiavoni & Denny Paulista Azevedo Filho
//////////////////////////////////////////////////////////////////////////
-->

<?php
	
	// se o usuario não estiver logado, vamos abrir o formulario de login
	// mas, se o usuario estiver logado, vamos mostrar uma mensagem de boas vindas
	// e mostrar tambem o seu nome de usuario
	
	// iniciar o uso de sessão
	session_start();
	
	$titulo = "Video aula 12 - login";
	
	if (isset($_GET['ac']) && $_GET['ac'] == "logout" && isset($_SESSION['usuario'])) {
		setcookie("usuarioLogado","",time()-3600);
		unset($_SESSION['usuario']);
		unset($_SESSION['usuarioLogado']);
	}
	
	if(isset($_POST['usuario']) && $_POST['usuario'] == "admin" && isset($_POST['senha']) && $_POST['senha'] == "123") {
		
		if( isset($_POST['lembrar']) && $_POST['lembrar'] == "1") {
			// criar um cookie que vai nos dizer que o usuario está logado
			// o usuario ficará logado por um mês
			setcookie("usuarioLogado",$_POST['usuario'],time()+60*60*24*30);
		}
		
		$_SESSION['usuario'] = $_POST['usuario'];
		
		// isso escreve em nosso arquivo a data, o horario e o IP de quem logou
		fwrite($log,date("d/m/Y H:i:s")." ".$_SERVER['REMOTE_ADDR']." ".$_POST['usuario']."\r\n");
	}
	
	if(isset($_SESSION['usuario']) || isset($_COOKIE['usuarioLogado'])){
		if(isset($_COOKIE['usuarioLogado']))
			$_SESSION['usuario'] = $_COOKIE['usuarioLogado'];		
		// o usuario está logado
		require_once("tmpl_administrativo.php");
	} else{
		// o usuario não está logado
		require_once("tmpl_formularioLogin.php");
	}
	
	fclose($log);
	
	