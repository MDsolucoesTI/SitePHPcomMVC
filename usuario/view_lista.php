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
		<h1>Conteudo cadastrado no banco de dados</h1>
		
		<table border="1">
					<tr>
						<td>ID</td>
						<td>Nome</td>
						<td>Idade</td>
					</tr>
			<?php
				foreach($dados as $linha){ ?>
					<tr>
						<td><?=$linha['id']?></td>
						<td><?=$linha['nome']?></td>
						<td><?=$linha['idade']?></td>
					</tr>
			<?php }	?>
		</table>
	</body>
</html>