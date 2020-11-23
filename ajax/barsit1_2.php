<?php 

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST' or 1==1) {
		// Always return JSON format
		header('Content-Type: application/json');

		$return = [];
		

		$p1=$_POST['p1'];
		$p2=$_POST['p2'];
		$p3=$_POST['p3'];
		$p4=$_POST['p4'];
		$p5=$_POST['p5'];
		$p6=$_POST['p6'];
		$p7=$_POST['p7'];
		$p8=$_POST['p8'];
		$p9=$_POST['p9'];
		$p10=$_POST['p10'];
		$p11=$_POST['p11'];
		$p12=$_POST['p12'];
		$p13=$_POST['p13'];
		$p14=$_POST['p14'];
		$p15=$_POST['p15'];
		$p16=$_POST['p16'];
		$p17=$_POST['p17'];
		$p18=$_POST['p18'];
		$p19=$_POST['p19'];
		$p20=$_POST['p20'];
		$p21=$_POST['p21'];
		$p22=$_POST['p22'];
		$p23=$_POST['p23'];
		$p24=$_POST['p24'];
		$p25=$_POST['p25'];
		$p26=$_POST['p26'];
		$p27=$_POST['p27'];
		$p28=$_POST['p28'];
		$p29=$_POST['p29'];
		$p30=$_POST['p30'];
		$p31=$_POST['p31'];
		$p32=$_POST['p32'];
		$p33=$_POST['p33'];
		$p34=$_POST['p34'];
		$p35=$_POST['p35'];
		$p36=$_POST['p36'];
		$p37=$_POST['p37'];
		$p38=$_POST['p38'];
		$p39=$_POST['p39'];
		$p40=$_POST['p40'];
		$p41=$_POST['p41'];
		$p42=$_POST['p42'];
		$p43=$_POST['p43'];
		$p44=$_POST['p44'];
		$p45=$_POST['p45'];
		$p46=$_POST['p46'];
		$p47=$_POST['p47'];
		$p48=$_POST['p48'];
/*
		if(isset($_POST['P5'])){
      $p5 = $_POST['P5']; 
 }else{
      $p5= "Name not set in GET Method";
 }

 	    		if(isset($_POST['P6'])){
      $p6 = $_POST['P6']; 
 }else{
      $p6= "Name not set in GET Method";
 }*/
		// $p5=$_POST['P5'];
		// $p6=$_POST['P6'];

       	 
		


		$addUser = $con->prepare("INSERT INTO Respuestas_Barsit(p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30, p31, p32, p33, p34, p35, p36, p37, p38, p39, p40, p41, p42, p43, p44, p45, p46, p47, p48) VALUES(:p1, :p2, :p3, :p4, :p5, :p6, :p7, :p8, :p9, :p10, :p11, :p12, :p13, :p14, :p15, :p16, :p17, :p18, :p19, :p20, :p21, :p22, :p23, :p24, :p25, :p26, :p27, :p28, :p29, :p30, :p31, :p32, :p33, :p34, :p35, :p36, :p37, :p38, :p39, :p40, :p41, :p42, :p43, :p44, :p45, :p46, :p47, :p48)");

			$addUser ->bindParam(':p1',$p1, PDO::PARAM_STR);
			$addUser ->bindParam(':p2',$p2, PDO::PARAM_STR);
			$addUser ->bindParam(':p3',$p3, PDO::PARAM_STR);
			$addUser ->bindParam(':p4',$p4, PDO::PARAM_STR);
			$addUser ->bindParam(':p5',$p5, PDO::PARAM_STR);
			$addUser ->bindParam(':p6',$p6, PDO::PARAM_STR);
			$addUser ->bindParam(':p7',$p7, PDO::PARAM_STR);
			$addUser ->bindParam(':p8',$p8, PDO::PARAM_STR);
			$addUser ->bindParam(':p9',$p9, PDO::PARAM_STR);
			$addUser ->bindParam(':p10',$p10, PDO::PARAM_STR);
			$addUser ->bindParam(':p11',$p11, PDO::PARAM_STR);
			$addUser ->bindParam(':p12',$p12, PDO::PARAM_STR);
			$addUser ->bindParam(':p13',$p13, PDO::PARAM_STR);
			$addUser ->bindParam(':p14',$p14, PDO::PARAM_STR);
			$addUser ->bindParam(':p15',$p15, PDO::PARAM_STR);
			$addUser ->bindParam(':p16',$p16, PDO::PARAM_STR);
			$addUser ->bindParam(':p17',$p17, PDO::PARAM_STR);
			$addUser ->bindParam(':p18',$p18, PDO::PARAM_STR);
			$addUser ->bindParam(':p19',$p19, PDO::PARAM_STR);
			$addUser ->bindParam(':p20',$p20, PDO::PARAM_STR);
			$addUser ->bindParam(':p21',$p21, PDO::PARAM_STR);
			$addUser ->bindParam(':p22',$p22, PDO::PARAM_STR);
			$addUser ->bindParam(':p23',$p23, PDO::PARAM_STR);
			$addUser ->bindParam(':p24',$p24, PDO::PARAM_STR);
			$addUser ->bindParam(':p25',$p25, PDO::PARAM_STR);
			$addUser ->bindParam(':p26',$p26, PDO::PARAM_STR);
			$addUser ->bindParam(':p27',$p27, PDO::PARAM_STR);
			$addUser ->bindParam(':p28',$p28, PDO::PARAM_STR);
			$addUser ->bindParam(':p29',$p29, PDO::PARAM_STR);
			$addUser ->bindParam(':p30',$p30, PDO::PARAM_STR);
			$addUser ->bindParam(':p31',$p31, PDO::PARAM_STR);
			$addUser ->bindParam(':p32',$p32, PDO::PARAM_STR);
			$addUser ->bindParam(':p33',$p33, PDO::PARAM_STR);
			$addUser ->bindParam(':p34',$p34, PDO::PARAM_STR);
			$addUser ->bindParam(':p35',$p35, PDO::PARAM_STR);
			$addUser ->bindParam(':p36',$p36, PDO::PARAM_STR);
			$addUser ->bindParam(':p37',$p37, PDO::PARAM_STR);
			$addUser ->bindParam(':p38',$p38, PDO::PARAM_STR);
			$addUser ->bindParam(':p39',$p39, PDO::PARAM_STR);
			$addUser ->bindParam(':p40',$p40, PDO::PARAM_STR);
			$addUser ->bindParam(':p41',$p41, PDO::PARAM_STR);
			$addUser ->bindParam(':p42',$p42, PDO::PARAM_STR);
			$addUser ->bindParam(':p43',$p43, PDO::PARAM_STR);
			$addUser ->bindParam(':p44',$p44, PDO::PARAM_STR);
			$addUser ->bindParam(':p45',$p45, PDO::PARAM_STR);
			$addUser ->bindParam(':p46',$p46, PDO::PARAM_STR);
			$addUser ->bindParam(':p47',$p47, PDO::PARAM_STR);
			$addUser ->bindParam(':p48',$p48, PDO::PARAM_STR);

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