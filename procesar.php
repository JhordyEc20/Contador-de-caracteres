<?php

	if (!empty($_GET['user_text'])) {
		$_GET['user_text'] = str_replace(' ', '', $_GET['user_text']);
		
		$get_url = [
			'length' => mb_strlen($_GET['user_text']),
			'text' => $_GET['user_text']
		];	

		$conteo_letra = [
			'upper' => 0,
			'lower' => 0
		];

		for ($i=0; $i < $get_url['length']; $i++) {
			$conteo_letra['upper'] += contar_mayuscula($get_url['text'][$i]);
			$conteo_letra['lower'] += contar_minuscula($get_url['text'][$i]);
		}

		$env_url = "date_mayus=".$conteo_letra['upper'];
		$env_url .="&date_minus=".$conteo_letra['lower'];

		header("Location:./index.php?".$env_url);
	}


	function contar_mayuscula($caracter) {
		if (mb_strtoupper($caracter) == $caracter) {
			return 1;
		}
	}

	function contar_minuscula($caracter) {
		if(mb_strtolower($caracter) == $caracter) {
			return 1;
		}
	}