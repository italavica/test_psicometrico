<?php 

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST' or 1==1) {
		// Always return JSON format
		header('Content-Type: application/json');

		$return = [];
		

		$apellidoPaterno=$_POST['apellidoPaterno'];
		$apellidoMaterno=$_POST['apellidoMaterno'];
		$nombres=$_POST['nombres'];
		$FechaNacimiento=$_POST['FechaNacimiento'];
		$EstadoNacimiento=$_POST['EstadoNacimiento'];
		$MunicipioNacimiento=$_POST['MunicipioNacimiento'];
		$sexo=$_POST['sexo'];
		$edoCivil=$_POST['edoCivil'];
		$EstadoResidencia=$_POST['EstadoResidencia'];
		$MunicipioResidencia=$_POST['MunicipioResidencia'];
		$domicilioCalle=$_POST['domicilioCalle'];
		$domicilioNumero=$_POST['domicilioNumero'];
		$domicilioColonia=$_POST['domicilioColonia'];
		$domicilioCP=$_POST['domicilioCP'];
		$ocupacion=$_POST['ocupacion'];
		$gradoEstudios=$_POST['gradoEstudios'];
		$email=$_POST['email'];
		$celular=$_POST['celular'];


       	 
		


		$addUser = $con->prepare("INSERT INTO registrados(apellido_paterno, apellido_materno, nombres, FechaNacimiento, EstadoNacimiento, MunicipioNacimiento, sexo, edoCivil, EstadoResidencia, MunicipioResidencia, domicilioCalle, domicilioNumero, domicilioColonia, domicilioCP, ocupacion, gradoEstudios, email, celular) VALUES(:apellidoPaterno, :apellidoMaterno, :nombres, :FechaNacimiento, :EstadoNacimiento, :MunicipioNacimiento, :sexo, :edoCivil, :EstadoResidencia, :MunicipioResidencia, :domicilioCalle, :domicilioNumero, :domicilioColonia, :domicilioCP, :ocupacion, :gradoEstudios, LOWER(:email), :celular)");

			$addUser ->bindParam(':apellidoPaterno',$apellidoPaterno, PDO::PARAM_STR);
			$addUser ->bindParam(':apellidoMaterno',$apellidoMaterno, PDO::PARAM_STR);
			$addUser ->bindParam(':nombres',$nombres, PDO::PARAM_STR);
			$addUser ->bindParam(':FechaNacimiento',$FechaNacimiento, PDO::PARAM_STR);
			$addUser ->bindParam(':EstadoNacimiento',$EstadoNacimiento, PDO::PARAM_STR);
			$addUser ->bindParam(':MunicipioNacimiento',$MunicipioNacimiento, PDO::PARAM_STR);
			$addUser ->bindParam(':sexo',$sexo, PDO::PARAM_STR);
			$addUser ->bindParam(':edoCivil',$edoCivil, PDO::PARAM_STR);
			$addUser ->bindParam(':EstadoResidencia',$EstadoResidencia, PDO::PARAM_STR);
			$addUser ->bindParam(':MunicipioResidencia',$MunicipioResidencia, PDO::PARAM_STR);
			$addUser ->bindParam(':domicilioCalle',$domicilioCalle, PDO::PARAM_STR);
			$addUser ->bindParam(':domicilioNumero',$domicilioNumero, PDO::PARAM_STR);
			$addUser ->bindParam(':domicilioColonia',$domicilioColonia, PDO::PARAM_STR);
			$addUser ->bindParam(':domicilioCP',$domicilioCP, PDO::PARAM_STR);
			$addUser ->bindParam(':ocupacion',$ocupacion, PDO::PARAM_STR);
			$addUser ->bindParam(':gradoEstudios',$gradoEstudios, PDO::PARAM_STR);
			$addUser ->bindParam(':email',$email, PDO::PARAM_STR);
			$addUser ->bindParam(':celular',$celular, PDO::PARAM_STR);
	
			$addUser ->execute();

			$candidato_id = $con->lastInsertId();

			$_SESSION['candidato_id'] = (int) $candidato_id;

			$return['redirect']='/examen_psicometrico/prueba1.php?message=welcome';
			$return['is_logged_in']= true;
		


		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('Invalid URL');
	}

	
?>
