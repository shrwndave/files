<?php
	//import model
	include '../model/admin_model.php';

	$page_info['page'] = 'admin'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'admin'; //for function to be loaded
		
	try {//used try to catch unfortunate errors
		//check for active function
		if (isset($_GET['function'])){
			new AdminActive($page_info);
		}else{			
			//no active function, use the default page to view
			new Admin($page_info);
		}
		
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}//end of validation
	
	
	class Admin{
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
		
		function admin(){
			include '../views/server_dashboard.php';
		}
		
		function tourAddress(){																						//touraddress
			//instanciate model
			$admin = new AdminModel();
			
			$province = $admin->getProvince();																		//addingaddress
			$municipality = $admin->getMunicipality();
			$barangay = $admin->getBarangay();
			
			include '../views/server_tourAddress.php';
		}
		
		function tourDest(){
			$admin = new AdminModel();
			
			$barangay = $admin->getBarangay();																		//gettingaddress
			
			include '../views/server_tourDestination.php';
		}
	}
	
	
	class AdminActive{
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
		
		function addprovince(){																					//addprovince
			//instanciate model
			$admin = new AdminModel();
			
			//add province
			$addProvince = $admin->addProvince($_POST);
			
			$province = $admin->getProvince();
			$municipality = $admin->getMunicipality();
			$barangay = $admin->getBarangay();
			
			include '../views/server_tourAddress.php';
		}
		
		function deleteProvince(){																				//deleteprovince
			//instanciate model
			$admin = new AdminModel();
			
			//delete province
			$addProvince = $admin->deleteProvince($_GET);
			
			$province = $admin->getProvince();
			$municipality = $admin->getMunicipality();
			$barangay = $admin->getBarangay();
			
			include '../views/server_tourAddress.php';
		}
		
		function addMunicipality(){																				//addmncp
			//instanciate model
			$admin = new AdminModel();
			
			//add province
			$addMunicipality = $admin->addMunicipality($_POST);
			
			$province = $admin->getProvince();
			$municipality = $admin->getMunicipality();
			$barangay = $admin->getBarangay();
			
			include '../views/server_tourAddress.php';
		}
		
		function deleteMunicipality(){																			//deletemncp
			//instanciate model
			$admin = new AdminModel();
			
			//add province
			$deleteMunicipality = $admin->deleteMunicipality($_GET);
			
			$province = $admin->getProvince();
			$municipality = $admin->getMunicipality();
			$barangay = $admin->getBarangay();
			
			include '../views/server_tourAddress.php';
		}
		
		function addBarangay(){																					//addbrgy
			//instanciate model
			$admin = new AdminModel();
			
			//add province
			$addBarangay = $admin->addBarangay($_POST);
			
			$province = $admin->getProvince();
			$municipality = $admin->getMunicipality();
			$barangay = $admin->getBarangay();
			
			include '../views/server_tourAddress.php';
		}
		
		function deleteBarangay(){																				//deletebrgy
			//instanciate model
			$admin = new AdminModel();
			
			//add province
			$deleteBarangay = $admin->deleteBarangay($_GET);
			
			$province = $admin->getProvince();
			$municipality = $admin->getMunicipality();
			$barangay = $admin->getBarangay();
			
			include '../views/server_tourAddress.php';
		}
		
		function addTouDest(){																					//addtourdest
			$admin = new AdminModel();
			
			$addDestination = $admin->tourDest($_POST, $_FILES);
			
			$barangay = $admin->getBarangay();
			$destination = $admin->getDestination();
			
			include '../views/server_tourDestination.php';
		}
		
		function deleteDest(){																					//deletetourdest
			$admin = new AdminModel();
			
			$deleteDestination = $admin->deleteDest($_GET);
			
			$barangay = $admin->getBarangay();
			$destination = $admin->getDestination();
			
			include '../views/server_tourDestination.php';
		}
	}
?>