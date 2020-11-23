<?php    
    function ForceLogin(){

        if(isset($_SESSION['user_id'])){
            //the user is allowed here.
        } else {
            //the user is not allowed here.
            header('Location: /php_login_system/login.php'); exit;
        }

    }

    function FindUser($con,$email){
    	$email = (string) Filter::String($email);
    	$findUser = $con->prepare("SELECT user_id,password FROM users WHERE email= LOWER(:email) LIMIT 1");
		$findUser ->bindParam(":email",$email, PDO::PARAM_STR);
		$findUser -> execute();

		$user_found = (boolean) $findUser->rowCount();
		return $user_found;
		
    }

?>