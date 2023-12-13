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
		echo "<div class='box-rodapeDicas'>";
		echo "<p>" . $c->getAutor()."<p>";
		echo "<p>" . $c->getDataPublicacao()."<p>";
		echo "</div>";
		echo "</section>";
	}
?>	
            