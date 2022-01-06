<?php


	if (!empty($_GET['user_text'])) {
		$string_longitud = strlen($_GET['user_text']); //4 GGGG
		$user_string = $_GET['user_text']; //GGGG
		$conteo_letra_mayus = 0;
		$conteo_letra_minus = 0;

		for ($i=0; $i < $string_longitud; $i++) {
			$conteo_letra_mayus += contar_mayuscula($user_string[$i]);
			$conteo_letra_minus += contar_minuscula($user_string[$i]);
		}

		$date_mayus = $conteo_letra_mayus; 
		$date_minus = $conteo_letra_minus;
		header("Location:./index.php?date_mayus=$date_mayus&date_minus=$date_minus");
	}



	function contar_mayuscula($caracter) {
		if (mb_strtoupper($caracter) == $caracter) {
			return 1;
		} else {
			return 0;
		}
	}

	function contar_minuscula($caracter) {
		if(mb_strtolower($caracter) == $caracter) {
			return 1;
		} else {
			return 0;
		}
	}
