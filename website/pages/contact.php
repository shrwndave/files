<?php
	$page_info['page'] = 'Contact'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'Contact'; //for function to be loaded
		
	try {
		if (isset($_GET['function'])){
			new ContactPageActive($page_info);
		}else{
			new ContactPage($page_info);
		}
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}
	
	class ContactPage{
		private $page = '';
		private $sub_page = '';
		
		function __construct($page_info){
			$this->page = $page_info['page'];
			$this->sub_page = $page_info['sub_page'];
			
			$this->{$page_info['sub_page']}();
		}
		
		function contact(){
			// Include the file
			include "../views/page.php";

			// Construct the URL with the query string
			$url = $_SERVER['PHP_SELF'] . "?location=Contact"; 

		}
	}
	
	class ContactPageActive{
		
	}
?>