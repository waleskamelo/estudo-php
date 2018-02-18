<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

		<?php
		
			//$mensagens_divertidas['a'] = 'Primeira mensagem';
			//$mensagens_divertidas[2] = 'Segunda mensagem';
			//$mensagens_divertidas[3] = 'Terceira mensagem';
		
			$mensagens_divertidas = [
				'a' => 'Primeira mensagem',
				'2' => 'Segunda mensagem',
				'3' => 'Terceira mensagem'];
			//No meu ponto de vista, esta é a melhor forma de declarar um array simples.

			var_dump($mensagens_divertidas);
			//O var_dump ou print_r servem para imprimir um array.

		
		?>
</html>