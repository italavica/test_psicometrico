<?php 
// If there is no constant defined called __CONFIG__, do not load this file
	if(!defined('__CONFIG__')) {
		exit('You do not have a config file');
	 }

	 class User {

	 	private $con;

	 	public $candidato_id;
	 	public $appellidoPaterno;
	 	public $appellidoMaterno;
	 	public $nombres;
	 	public $date;
	 	public $sexo;
	 	public $edoCivil;
	 	public $domicilioCalle;
	 	public $domicilioNumero;
	 	public $domicilioColonia;
	 	public $domicilioCP;
	 	public $gradoEstudios;
	 	public $ocupacion;
	 	public $celular;
	 	public $email;
	 	public $reg_time;

	

	 	public function __construct(int $candidato_id){

	 		$this->con =DB::getConnection();

	 		$candidato_id = Filter::Int( $candidato_id );

	 		$candidato= $this->con->prepare("SELECT candidato_id, email, reg_time FROM registrados WHERE candidato_id = :candidato_id LIMIT 1");
	 		$candidato->bindParam(':candidato_id', $candidato_id, PDO::PARAM_INT);
	 		$candidato->execute();

	 		if($candidato->rowCount()==1) {
	 			$candidato = $candidato->fetch(PDO::FETCH_OBJ);

	 			$this->email   	= (string)$candidato->email;
	 			$this->candidato_id 	= (int)$candidato->candidato_id;
	 			$this->reg_time 	= (string)$candidato->reg_time;

	 		} else{
	 			//No user
	 			//redirect to logout
	 			header("Location: /Test_psicometrico/logout.php"); exit;
	 		}
	 	}

    public static function Find($email, $return_assoc = false){

	    	$con = DB::getConnection();	

	    	//Make sure the user does not exist	
	    	$email = (string) Filter::String($email);

	    	$findUser = $con->prepare("SELECT user_id,password FROM users WHERE email= LOWER(:email) LIMIT 1");
			$findUser ->bindParam(":email",$email, PDO::PARAM_STR);
			$findUser -> execute();

			if($return_assoc){
				return $findUser->fetch(PDO::FETCH_ASSOC);
			}

			$user_found = (boolean) $findUser->rowCount();
			return $user_found;

		}
		
    }

 ?>