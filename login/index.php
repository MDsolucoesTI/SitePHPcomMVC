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

	// verificar se o arquivo log.txt já existe, senão, podemos criar este arquivo
	// file_exists("log.txt")
	
	// define uma constante para o nome do nosso arquivo de log
	define("ARQUIVO_LOG","log.txt");
	
	$log = @fopen(ARQUIVO_LOG, "x");
	// se for  igual a false, o arquivo de log já existe
	if($log == false){
		// o atributo a abre o arquivo e posiciona o ponteiro no final do mesmo
		$log = fopen(ARQUIVO_LOG,"a");
	}
	
	require_once("controller.php");	