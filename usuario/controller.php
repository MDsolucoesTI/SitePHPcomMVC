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
	$titulo = "Manutenção de Usuários";	
	@$conexao = @mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	
	if( mysqli_connect_errno($conexao) ){
		echo "A conexão falhou, erro reportado: ".mysqli_connect_error();
		exit();
	}
	
	require("mdl_usuario.php");
	
	// qual será a view a ser carregada
	// p = listar e p = cadastrar e p = excluir
	
	if(isset($_GET['p'])){
		$passo = $_GET['p'];
	} else {
		$passo = null;
	}	
	
	switch($passo){
		case "cadastrar" :
			break;
		case "excluir" :
			break;
			
		default: 		
			$dados = listarDados($conexao);
			require("view_lista.php");		
			break;
	}	
	
	function listarDados($conexao) {
		$resultado = usuario_listar($conexao);		
		$data = array();		
		while($row = mysqli_fetch_array($resultado)){
			$data[] = array("id" => $row['id'], "nome" => utf8_encode ( $row['nome'] ), "idade" => ($row['idade'] == "") ? "--" : $row['idade']);
		}
		return $data;
	}
		
	@mysqli_close($conexao);
	
	