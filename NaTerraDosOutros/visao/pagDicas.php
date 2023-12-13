<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicas</title>
</head>

<body>
<?php
	define('BASE_DIR','/NaTerraDosOutros/visao/');
	//assume que o controle passou uma lista
	foreach($lista as $c){
		echo "<section class='section-dicas'>";
		echo "<div class='box-img'>";
		echo "<img src='". BASE_DIR. $c->getImagem() . "' alt='' class='img-dicas'>";
		echo "</div>";
		echo "<div class='texto-dicas'>";
			echo "<h1>". $c->getTitulo() ."</h1>";
		
			echo "<p>" . $c->getConteudo() . "</p>";
		echo "</div>";					
		echo "<div class='box-produtos'>";
		echo "<button class='btn-produto'>DECORAÇÃO INFANTIL</button>";
		echo "<button class='btn-produto'>DECORAÇÃO ADULTO</button>";
		echo "<button class='btn-produto'>DECORAÇÃO TEMÁTICA</button>";
		echo "</div>";
		echo "</section>";
	}
?>	
            
</body>

</html>