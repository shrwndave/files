<?php
	$page_info['page'] = 'About'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'About'; //for function to be loaded

	try {
		if (isset($_GET['function'])){
			new AboutPageActive($page_info);
		}else{
			new AboutPage($page_info);
		}
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}
	
	class AboutPage{
		private $page = '';
		private $sub_page = '';
		
		function __construct($page_info){
			$this->page = $page_info['page'];
			$this->sub_page = $page_info['sub_page'];
			
			$this->{$page_info['sub_page']}();
		}
		
		function about(){
			// Include the file
			$locate = include "../views/page.php";

			// Construct the URL with the query string
			$url = $_SERVER['PHP_SELF'] . "?location=About"; 

		}
	}
	
	class AboutPageActive{
		
	}
?>