<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Tabuleiro xadrez</title>
	</head>

		<?php
		
			$tabuleiro[8]['a'] = 'Torre preta';
			$tabuleiro[8]['b'] = 'Bispo preto';
			$tabuleiro[8]['c'] = 'Cavalo preto';
			$tabuleiro[8]['d'] = 'Rainha preta';
			$tabuleiro[8]['e'] = 'Rei preto';
			$tabuleiro[8]['f'] = 'Bispo preto';
			$tabuleiro[8]['g'] = 'Cavalo preto';
			$tabuleiro[8]['h'] = 'Torre preta';

			$tabuleiro[7]['a'] = 'Peão preto';
			$tabuleiro[7]['b'] = 'Peão preto';
			$tabuleiro[7]['c'] = 'Peão preto';
			$tabuleiro[7]['d'] = 'Peão preto';
			$tabuleiro[7]['e'] = 'Peão preto';
			$tabuleiro[7]['f'] = 'Peão preto';
			$tabuleiro[7]['g'] = 'Peão preto';
			$tabuleiro[7]['h'] = 'Peão preto';

			print_r($tabuleiro);	
			print '<br />';
			print $tabuleiro[8]['d'];
			print '<br />';
			print $tabuleiro[8]['g'];
		
			// Array multifuncional ou tipo matriz, consiste em um array dentro do outro.	

		?>
</html>