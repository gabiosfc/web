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
			<INPUT type="text" name="titulo" id="titulo">
			
			<LABEL for="conteudo"> Conteudo: </LABEL> 
			<textarea type="text" name="conteudo" id="conteudo"></textarea>

			<LABEL for="data_publicacao"> Data Publicação: </LABEL> 
			<INPUT type="text" name="data_publicacao" id="data_publicacao"/> <br /><br />
			
			<label for="imagem">Selecione sua imagem:</label>
			<input type="file" id="imagem" name="imagem" accept="image/png, image/jpeg" />

            <LABEL for="autor"> Autor: </LABEL> 
			<INPUT type="text" name="autor" id="autor"/> <br /><br />

			<INPUT type="submit" name="enviar" value="Enviar" />
			
		</FORM>



	
	</BODY>

</HTML> 