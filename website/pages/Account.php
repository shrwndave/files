<?php
	//import model
	include_once '../model/AccountModel.php';

	$page_info['page'] = 'account'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'account'; //for function to be loaded
		
	try {
		if (isset($_GET['function'])){
			new AccountPageActive($page_info);
		}else{
			new AccountPage($page_info);
		}
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}
	
	class AccountPage{
		private $page = '';
		private $sub_page = '';
		
		function __construct($page_info){
			$this->page = $page_info['page'];
			$this->sub_page = $page_info['sub_page'];
			
			$this->{$page_info['sub_page']}();
		}
		
		function account(){
			//instantiate model
			$accounts = new AccountModel();
			
			//get accounts
			$account = $accounts->getAccount();
			
			// Include the file
			include "../views/page.php";

			// Construct the URL with the query string
			$url = $_SERVER['PHP_SELF'] . "?location=Account"; 

		}
	}
	
	class AccountPageActive{
		private $page = '';
		private $sub_page = '';
		
		function __construct($page_info){
			//assign page info
			$this->page = $page_info['page'];
			$this->sub_page = $page_info['sub_page'];
			
			//run the function
			$this->{$page_info['sub_page']}();
		}
		
		function update(){//update account
			//instantiate model
			$accounts = new AccountModel();
			
			//update the account
			$update_account = $accounts->updateAccount($_POST);
			
			//get accounts
			$account = $accounts->getAccount();
			
			//view page
			include '../views/account.php';

			$url = $_SERVER['PHP_SELF'] . "?location=Account"; 
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

			$url = $_SERVER['PHP_SELF'] . "?location=Account"; 
		}
	}
?>