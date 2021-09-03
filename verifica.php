<?php 

	echo "<br/> Olá seja bem vindo" . $_SERVER['REMOTE_ADDR'] ."<br/>";
	echo "Você está ultilizando o navegador: " . $_SERVER['HTTP_USER_AGENT']. "<br/>";

	define("PI", 3.14162537);
	define("DISC", "Matemática");

	echo ("O valor de PI é: " . PI). "<br/>";
	echo ("O nome do curso é: " . DISC). "<br/>";


	$op = '1';

	switch($op){

		case '1':
			echo "A opção 1 foi selecionado";
			break;

		case '2':
			echo "A opção 2 foi selecionado";
			break;

		case '3':
			echo "A opção 3 foi selecionado";
			break;

		default:
			echo "Opção incorreta";
			break;
	}


 ?>


