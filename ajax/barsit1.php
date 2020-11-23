<?php 

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST' or 1==1) {
		// Always return JSON format
		header('Content-Type: application/json');

		$return = [];
		

	


       	 
		

			$return['redirect']='/examen_psicometrico/prueba1_2.php?message=welcome';
			$return['is_logged_in']= true;
		


		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('Invalid URL');
	}

	
?>
