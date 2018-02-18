<?php

// While é lido assim: "faça a instrução enquanto a condição for atendida"
// Atenção para interação, ela deve ser criada dentro do bloco de códigos {}.
// O break pode ser usado para parar a aplicação, dentro do if, como no exemplo.
// Dentro de um laço de repetição existe a possibilidade de parar as interações utilizando o break e de pular para interação seguinte, usando o continue.

/*$num =1;
while ($num <= 10) {
	echo "$num";
	echo '<br />';
	$num = $num + 1;

	if($num == 5){
		break;
	}
}*/

$num = 1;
while ($num < 10) {

	$num = $num + 1;

	if($num == 3){
		continue;
	}

	echo "$num";
	echo '<br />';

}









?>