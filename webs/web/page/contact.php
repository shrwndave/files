<?php
	//set page variables
	$page_info['page'] = 'Contact'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'Contact'; //for function to be loaded
		
	//-----------------------//
	//--   Contact page       --//
	//-----------------------//
	try {//used try to catch unfortunate errors
		//check for active function
		if (isset($_GET['function'])){
			new ContactPageActive($page_info);
		}else{
			//no active function, use the default page to view
			new ContactPage($page_info);
		}
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}//end of validation
	
//-------------------------------------------------------------------------------------------------------------------------------//	
	
	//------------------------//
	//--class for login page--//
	//------------------------//
	class ContactPage{
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
		function contact(){
			include "../views/contact.php";
		}
	}
	
	//------------------------//
	//--class for login page--//
	//------------------------//
	class ContactPageActive{
		
	}
?>