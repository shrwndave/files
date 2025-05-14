<?php
	//import model
	include_once '../model/LoginModel.php';

	//set page variables
	$page_info['page'] = 'login'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'login'; //for function to be loaded
		
	//-----------------------//
	//--   validate login  --//
	//-----------------------//
	try {//used try to catch unfortunate errors
		//check for active function
		if (isset($_GET['function'])){
			new LoginPageActive($page_info);
		}else{
			//no active function, use the default page to view
			new LoginPage($page_info);
		}
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}//end of validation
	
//-------------------------------------------------------------------------------------------------------------------------------//	
	
	//------------------------//
	//--class for login page--//
	//------------------------//
	class LoginPage{
		//set default page info
		private $page = '';
		private $sub_page = '';
		
		//run function construct
		function __construct($page_info){
			//assign page info
			$this->page = $page_info['page'];
			$this->sub_page = $page_info['sub_page'];
			
			//run the function
			$this->{$page_info['sub_page']}();
		}
		
		//-----------------------------//
		//--   function start here   --//
		
		function login(){ //default page to load
			include "../views/login.php";
		}
		
		function register(){ //register page
			include "../views/register.php";
		}
		
		
	} //end class LoginPage
	
	
	//-------------------------------//
	//--class for login page active--//
	//-------------------------------//
	class LoginPageActive{
		//set default page info
		private $page = '';
		private $sub_page = '';
		
		//run function construct
		function __construct($page_info){
			//assign page info
			$this->page = $page_info['page'];
			$this->sub_page = $page_info['sub_page'];
			
			//run the function
			$this->{$page_info['sub_page']}();
		}
		
		//-----------------------------------//
		//--  active function start here   --//
		
		function loggedin(){ //validate login
			//instantiate class model
			$validate_login = new LoginModel();
			
			//process login
			$result = $validate_login->login_user($_POST['username'], $_POST['password']);
			
			//check for login success
			if ($result){
			header ('location:home.php');
			}else{
				//error login message variable
				$msg = "Invalid Username or Password!";
				//invalid credentials
				include "../views/login.php";
			}
		}
		
		function register(){//register user
		
			//instantiate class model
			$validate_register = new LoginModel();
			
			//check for correct password
			if ($_POST['password'] == $_POST['confirm_password']){
				//if correct password, process register
				//prepare temp array
				$temp_array = [];
				$temp_array['name'] = $_POST['name'];
				$temp_array['email'] = $_POST['email'];
				$temp_array['password'] = $_POST['password'];
				
				//process registration
				$register = $validate_register->register($_POST);
				
				echo "<script>alert('Successfully registered.');</script>";
				include "../views/login.php";
				
			}else{
				//error message
				$msg = 'Invalid Password!';
				//back
				include "../views/register.php";
			}
			
		}
	} //end class LoginPageActive
?>