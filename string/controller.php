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
	
	$array = array();
	
	$titulo = "Aula 12 - Curso de PHP Basico";
	
	$var1 = "ESTA é alguma frase";
	$var2 = "Esta é outra frase";
	$var3 = "ABCDEfghi";
	
	// transformando a string em minusculo
	$array[] = "VAR1 em minusculo = ".strtolower($var1);
	
	// transformando uma string em maiúsculo
	$array[] = "VAR2 em maiúsculo = ".strtoupper($var2);
	
	// exibindo a posição de um elemento em uma string
	$array[] = "Posição do elemento 'e' na variavel VAR2 = ".strpos("3",$var2);
	
	// utilizando str_split
	$str_split[] = str_split($var3);
	
	// utilizando explode
	$explode = explode(" ",$var2);
	
	// utilizando implode
	$implode = implode("_",$explode);
	
	// utilizando replace
	$array[] = str_replace("Esta","Aquela", $var2);