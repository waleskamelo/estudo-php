<?php

/*$c = "2 carros" + "10 onibus";
	echo $c; */

	$nota1 = 7.5;
	$nota2 = 6;
	$nota3 = 8;
	$nota4 = 3;

	$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

	if($media >= 7){
		echo "Média igual a $media. Aluno aprovado!";
	} else if($media >= 4){
		echo "Média igual a $media. Aluno na final!";
	} else {
		echo "Média igual a $media. Aluno reprovado!";
	}

