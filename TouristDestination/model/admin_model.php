<?php
	//import database connector
	require_once 'connector.php';
	
	class AdminModel extends Connector{
		function __construct(){
			parent::__construct();
		}

		function addProvince($post){
			//prepare the sql
			$sql = "INSERT INTO `prov_tb`(`prov_name`) 
									  VALUES ('{$post['name']}')";                          	 //addprovince
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetch(PDO::FETCH_ASSOC);
		}
		
		function getProvince(){
			//prepare the sql
			$sql = "SELECT * FROM prov_tb";
			//prepare query
			$query = $this->conn->prepare($sql);												//getprovince
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function deleteProvince($get){
			//prepare the sql
			$sql = "DELETE FROM prov_tb WHERE prov_id = '{$get['id']}'";
			//prepare query
			$query = $this->conn->prepare($sql);												//deleteprovinvce
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function getMunicipality(){
			//prepare the sql
			$sql = "SELECT * FROM mncp_tb JOIN prov_tb ON prov_id = mncp_prov_id";				//getmncp
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function addMunicipality($post){
			//prepare the sql
			$sql = "INSERT INTO `mncp_tb`(`mncp_prov_id`, `mncp_name`) 
									  VALUES ('{$post['prov_id']}', '{$post['name']}')";		//addmncp
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetch(PDO::FETCH_ASSOC);
		}
		
		function deleteMunicipality($get){
			//prepare the sql
			$sql = "DELETE FROM mncp_tb WHERE mncp_id = '{$get['id']}'";						//deletemncp
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function getBarangay(){
			//prepare the sql
			$sql = "SELECT * FROM brgy_tb JOIN mncp_tb ON mncp_id = brgy_mncp_id JOIN prov_tb ON prov_id = mncp_prov_id";					//getbrgy
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function deleteBarangay($get){
			//prepare the sql
			$sql = "DELETE FROM brgy_tb WHERE brgy_id = '{$get['id']}'";																	//deletebrgy
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function addBarangay($post){
			//prepare the sql
			$sql = "INSERT INTO brgy_tb SET brgy_mncp_id = '{$post['mncp_id']}', brgy_name = '{$post['name']}'";							//addbrgy
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function tourDest($post, $file){
			//image location
			$target_dir = "../images/";
			
			$target_file = $target_dir . basename($file["logo"]["name"]);
			$filename = basename($file["logo"]["name"]);
			
			$imageFileType = ['jpg','jpeg','png','svg','gif'];
			
			//check te file if it is an image
			$extension = pathinfo($file["logo"]["name"], PATHINFO_EXTENSION);
			
			//check if file is an image
			if (in_array($extension, $imageFileType)){
				//check if file is uploaded
				if (move_uploaded_file($file["logo"]["tmp_name"], $target_file)){
					//prepare sql query
					$sql= "INSERT INTO `dest_tb`(`dest_brgy_id`, `dest_name`, `dest_description`, `dest_logo`) 
									   VALUES (?,?,?,?)";
					//prepare query
					$query = $this->conn->prepare($sql);
					$query->bindParam(1, $post['brgy_id']);
					$query->bindParam(2, $post['dest']);	
					$query->bindParam(3, $post['desc']);	
					$query->bindParam(4, $filename);	
					$query->execute();
					//return
					return $query->fetch(PDO::FETCH_ASSOC);
					
				}else{
					//go back to previous page
					echo "<script>alert('Invalid image upload!');</script>";
					echo "<script>window.history.back(-1);</script>";
			}
				
			}else{
				//go back to previous page
				echo "<script>window.history.back(-1);</script>";
			}
		}
		
		function getDestination(){																					//getdestination
			//prepare the sql																
			$sql = "SELECT * FROM dest_tb 
								  JOIN brgy_tb ON brgy_id = dest_brgy_id 													
								  JOIN mncp_tb ON mncp_id = brgy_mncp_id 
								  JOIN prov_tb ON prov_id = mncp_prov_id";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function deleteDest($get){
			//prepare the sql
			$sql = "DELETE FROM dest_tb WHERE dest_id = '{$get['id']}'";												//deletedestination
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function contact(){
			//prepare the sql
			$sql = "SELECT * FROM contact_tb";																		//getContact
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>