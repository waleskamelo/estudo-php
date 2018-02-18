<?php

// O switch está limitado a condição de ==, se aplica mais em casos de escolha entre opções, tipo menu.

$opcao = 1;
switch ($opcao){
	case 1:
		echo 'Primeiro case';
		break;

	case 2:
		echo 'Segundo case';
		break;

	case 3:
		echo 'Terceiro case';
		break;

	default:
		echo 'case default';
		break;
    //O default é opcional.
}


?>