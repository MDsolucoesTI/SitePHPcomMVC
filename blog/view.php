<!--
//////////////////////////////////////////////////////////////////////////
// Criacao...........: 10/2018
// Sistema...........: Site em MVC
// Analistas.........: Marilene Esquiavoni & Denny Paulista Azevedo Filho
// Desenvolvedores...: Marilene Esquiavoni & Denny Paulista Azevedo Filho
// Copyright.........: Marilene Esquiavoni & Denny Paulista Azevedo Filho
//////////////////////////////////////////////////////////////////////////
-->

<html>
	<head>
		<title><?=$titulo?></title>
	</head>
	<body>
		<h1>Dados de usuário</h1>
		
		<p>Nome: <?=$nome?> / Idade: <?=$idade?> / Data de Nascimento: <?=$dtNasc?></p>
		<h3><?$mensagem?></h3>
		<p><?=$funcao?></p>
		<p>As palavras concatenadas são: <?=$concatenei?></p>
	</body>
</html>