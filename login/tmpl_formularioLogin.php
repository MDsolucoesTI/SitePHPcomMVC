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
		<p>Efetue login para ter acesso ao sistema!</p>
		<form method="post">
			<p>Usuario:</p>
			<input type="text" name="usuario" />
			
			<p>Senha:</p>
			<input type="password" name="senha" />
			
			<p><input type="checkbox" value="1" name="lembrar"/> Mantenha-me logado </p>
			
			<input type="submit" value="Efetuar Login"/>
		</form>
	</body>
</html>