<?php

$noticias = array();

$noticias[1]['titulo'] = 'titulo da noticia 1';
$noticias[1]['conteudo'] = 'conteudo da noticia 1';

$noticias[2]['titulo'] = 'titulo da noticia 2';
$noticias[2]['conteudo'] = 'conteudo da noticia 2';

$noticias[3]['titulo'] = 'titulo da noticia 3';
$noticias[3]['conteudo'] = 'conteudo da noticia 3';

//var_dump($noticias);
// Diferente do echo, o var_dump imprime o conteudo de dentro da variavel.


/*--Percorrendo com while--
$idx = 1;
while($idx <= 3){

	echo $noticias[$idx]['titulo'];
	echo '<br />';
	echo $noticias[$idx]['conteudo'];
	echo '<br />';

	$idx = $idx + 1;
}*/


/*--Percorrendo com do while--
 A diferença entre while e do while é que o do while executa o primeiro bloco de codigo antes mesmo de verificar a condição do while.
$idx = 1;
do{

	echo $noticias[$idx]['titulo'];
	echo '<br />';
	echo $noticias[$idx]['conteudo'];
	echo '<br />';

	$idx = $idx + 1;
}while($idx <= 3);*/


//--Percorrendo com for--

for($idx = 1; $idx <= 3; $idx = $idx + 1){

	echo $noticias[$idx]['titulo'];
	echo '<br />';
	echo $noticias[$idx]['conteudo'];
	echo '<br />';

}
?>