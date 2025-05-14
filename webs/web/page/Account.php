<?php
	//import model
	include_once '../model/AccountModel.php';
	
	//set page variables
	$page_info['page'] = 'account'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'account'; //for function to be loaded
		
	//-----------------------//
	//--   Account page       --//
	//-----------------------//
	try {//used try to catch unfortunate errors
		//check for active function
		if (isset($_GET['function'])){
			new AccountPageActive($page_info);
		}else{
			//no active function, use the default page to view
			new AccountPage($page_info);
		}
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}//end of validation
	
//-------------------------------------------------------------------------------------------------------------------------------//	
	
	//------------------------//
	//--class for login page--//
	//------------------------//
	class AccountPage{
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
		function account(){
			//instantiate model
			$accounts = new AccountModel();
			
			//get accounts
			$account = $accounts->getAccount();
			
			include "../views/account.php";
		}
	}
	
	//------------------------//
	//--class for login page--//
	//------------------------//
	class AccountPageActive{
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
		function update(){//update account
			//instantiate model
			$accounts = new AccountModel();
			
			//update the account
			$update_account = $accounts->updateAccount($_POST, $_GET);
			
			//get accounts
			$account = $accounts->getAccount();
			
			//view page
			include '../views/account.php';
		}
		
		function deleteUser(){//delete account
			//instantiate model
			$accounts = new AccountModel();
			
			//update the account
			$delete_account = $accounts->deleteAccount($_POST);
			
			//get accounts
			$account = $accounts->getAccount();
			
			//view page
			include '../views/account.php';
		}
	}
?>