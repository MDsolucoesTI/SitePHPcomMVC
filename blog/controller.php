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
	
	$titulo = "Aula 11 - Curso de PHP Basico";
	$nome = "Roniere";
	$idade = 27;
	$dtNasc = "01/01/1985";
	
	$mensagem = "";
	if($idade < 20){
		$mensagem = "Jovem";
	} else {
		$mensagem = "Voçê está ficando idoso!";
	}
	
	// calculando o quadrado de um numero
	$retorno = quadrado(4);
	$funcao = "O quadrado de 4 é ".$retorno;
	
	$concatenei = concatenar("Roniere","Almeida");