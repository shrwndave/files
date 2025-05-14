<?php
	//set page variables
	$page_info['page'] = 'Home'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'Home'; //for function to be loaded

	try {
		if (isset($_GET['function'])){
			new HomePageActive($page_info);
		}else{
			new HomePage($page_info);
		}
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}
	
	class HomePage{
		private $page = '';
		private $sub_page = '';
		
		function __construct($page_info){
			$this->page = $page_info['page'];
			$this->sub_page = $page_info['sub_page'];
			
			$this->{$page_info['sub_page']}();
		}
		
		function home(){
			// Include the file
			include "../views/page.php";

			// Construct the URL with the query string
			$url = $_SERVER['PHP_SELF'] . "?location=Home"; 

		}
	}
	
	class HomePageActive{
		
	}
?>