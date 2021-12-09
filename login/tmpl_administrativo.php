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
		<h1>Seja bem vindo <?=$_SESSION['usuario']?>, você está logado!</h1>	

		<p><a href="index.php?r=login&ac=logout">Efetuar logout</a></p>
	</body>
</html>