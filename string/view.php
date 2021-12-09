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
		<?php foreach($array as $linha){ ?>
			<p><?=$linha?></p>
		<?php } ?>
		
		<p><?php print_r($str_split); ?></p>
		
		<p><?php print_r($explode)?></p>
		
		<p><?=$implode?></p>
	</body>
</html>