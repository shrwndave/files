<?php
	//import model

	$page_info['page'] = 'services'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'services'; //for function to be loaded
		
	//-----------------------//
	//--     --//
	//-----------------------//
	try {//used try to catch unfortunate errors
		//check for active function
		
		//no active function, use the default page to view
		new Services($page_info);
		
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}//end of validation
	
	
	//-----------------------//
	//--  Class Navigation --//
	//-----------------------//
	class Services{
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
		function services(){
			include '../views/services.php';
		}
	}
?>