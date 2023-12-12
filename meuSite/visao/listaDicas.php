<HTML>Conteudo
	<HEAD>
		<TITLE> Listagem de Dicas </TITLE>
		<META charset="UTF-8" />
	</HEAD>
	<BODY>
		<?php
			echo time();
			if(isset($status)){ echo "<H2>".$status."</H2>";}
			//Se $status está preenchida, imprimir ela
		?>
		<A href="dicas.php?fun=cadastrar" > Cadastrar </A>
		<br /><br />
		
		<TABLE border="1px">
			<TR> 
				<TH> ID </TH>
				<TH> Titulo </TH>
				<TH> Conteudo </TH>
                <TH> Data Publicação </TH>
				<TH> Autor </TH>	
			</TR>
			<!-- Primeira linha da tabela com o cabeçalho -->
			
			<?php
				//assume que o controle passou uma lista
				foreach($lista as $c){	
					echo "<TR>"; 
					
					echo "<TD>" . $c->getId() . "</TD>";
					
					echo "<TD><A href=dicas.php?fun=exibir&id=". $c->getId() . 
					      ">" . $c->getTitulo() . "</A></TD>";
					
					echo "<TD>" . $c->getConteudo() . "</TD>";

                    echo "<TD>" . $c->getDataPublicacao() . "</TD>";
					
					echo "<TD>" . $c->getAutor() . "</TD>";		
					
					echo "<TD><A href=dicas.php?fun=alterar&id=" . 
					      $c->getId() . "><img src='visao/img/update.png' width='30px'/> 
						  </A></TD>"; 
					
					echo "<TD><A href=dicas.php?fun=excluir&id=" . 
					      $c->getId() . "><img src='visao/img/delete.png' width='30px' /> 
						  </A></TD>";	
					
					echo "</TR>";	
				}	
			?>	
		</TABLE>
	</BODY>
</HTML>