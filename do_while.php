<?php

// Atenção para interação, ela deve ser criada dentro do bloco de códigos {}.
// A diferença do Dowhile para o while é que nesta aplicação o bloco de codigo é executado pelo menos uma vez, mesmo que a condição não seja atendida.

$num = 11;
do {

	echo 'teste'. $num;
	$num = $num + 1;
	// Também pode ser utilizado o comando brek e o continue para para esse tipo de laço.

} while($num < 10);

?>