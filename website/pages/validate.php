<?php
	include_once '../model/LoginModel.php';

	//set page variables
	$page_info['page'] = 'login'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'login'; //for function to be loaded
		
	try {
		if (isset($_GET['function'])){
			new LoginPageActive($page_info);
		}else{
			//no active function, use the default page to view
			new LoginPage($page_info);
		}
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}
	
	class LoginPage{
		private $page = '';
		private $sub_page = '';
		
		function __construct($page_info){
			$this->page = $page_info['page'];
			$this->sub_page = $page_info['sub_page'];
			
			$this->{$page_info['sub_page']}();
		}
		
		
		function login(){ 
			include "../views/login.php";
		}
		
		function register(){ 
			include "../views/register.php";
		}
		
		
	} 
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
		
		
		function loggedin(){ //validate login
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
				$temp_array = [];
				$temp_array['name'] = $_POST['name'];
				$temp_array['email'] = $_POST['email'];
				$temp_array['contact'] = $_POST['contact'];
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