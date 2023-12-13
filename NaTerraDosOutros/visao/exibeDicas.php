<HTML>

	<HEAD>
		<TITLE> Dicas <?php echo $cont->getTitulo(); ?> </TITLE>
	</HEAD>

	<BODY>
		
		<H1> Dicas <?php echo $cont->getTitulo(); ?> </H1>
		<UL>
			<LI>Titulo: <?php echo $cont->getTitulo(); ?></LI>
			<LI>Conteúdo: <?php echo $cont->getConteúdo(); ?></LI>
			<LI>Data Publicação: <?php echo $cont->getDataPublicacao(); ?></LI>
            <LI>Autor: <?php echo $cont->getAutor(); ?></LI>
			<LI> <IMG src=<?php echo $cont->getImagem(); ?> width="100" /> </LI>
		</UL>
		
		<A href="dicas.php?fun=listar"> Voltar </A>
		
	</BODY>
	
</HTML>