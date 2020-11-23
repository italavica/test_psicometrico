<?php 

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST' or 1==1) {
		// Always return JSON format
		header('Content-Type: application/json');

		$return = [];
		


		$EstadoNacimiento=$_POST['EstadoNacimiento'];
		//$MunicipioNacimiento=$_POST['MunicipioNacimiento'];
	

		$addUser = $con->prepare("INSERT INTO registrados_prueba(EstadoNacimiento) VALUES(:EstadoNacimiento)");


			$addUser ->bindParam(':EstadoNacimiento',$EstadoNacimiento, PDO::PARAM_STR);
			//$addUser ->bindParam(':MunicipioNacimiento',$MunicipioNacimiento, PDO::PARAM_STR);
			$addUser ->execute();

			//$candidato_id = $con->lastInsertId();

			//$_SESSION['candidato_id'] = (int) $candidato_id;

			$return['redirect']='/examen_psicometrico/prueba1.php?message=welcome';
			$return['is_logged_in']= true;
		


		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('Invalid URL');
	}

	
?>
