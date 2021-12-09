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
	
	$array = array("12345" => "03.jpg");
	
	$titulo = "Aula 17 - Download de arquivo";
	
	$idarquivo = $_GET['id'];
	
	header("Content-type:application/jpg");
	header("Content_Disposition:attachment;filename='imagem.jpg'");
	
	readfile("arquivos/".$array[$idarquivo]);
	