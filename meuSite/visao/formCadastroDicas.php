<HTML>
	<HEAD>
		<TITLE> Cadastrar Dica </TITLE>
		<META charset="UFT-8" />
	</HEAD>
	
	<BODY>
		<H1> Cadastrar Dica </H1>
		
		<FORM action="dica.php?fun=cadastrar" method="POST" enctype="multipart/form-data">
		<!-- POST -> envio de informações escondidas -->
	
			<LABEL for="titulo"> Titulo: </LABEL> 
			<INPUT type="text" name="titulo" id="titulo" value="<?php echo $c->getTitulo(); ?>"/> <br /><br />
			
			<LABEL for="conteudo"> Conteudo: </LABEL> 
			<INPUT type="text" name="conteudo" id="conteudo"/> <br /><br />
			
			<LABEL for="data_publicacao"> Data Publicação: </LABEL> 
			<INPUT type="text" name="data_publicacao" id="data_publicacao"/> <br /><br />
			
            <LABEL for="imagem"> Imagem: </LABEL> 
			<INPUT type="text" name="imagem" id="imagem"/> <br /><br />

            <LABEL for="autor"> Autor: </LABEL> 
			<INPUT type="text" name="autor" id="autor"/> <br /><br />

			<INPUT type="submit" name="enviar" value="Enviar" />
			
		</FORM>
	
	</BODY>

</HTML>