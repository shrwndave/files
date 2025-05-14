<?php
	//import database connector
	require_once 'connector.php';
	
	//-------------------------------//
	//--class for login page active--//
	//-------------------------------//
	class LoginModel extends Connector{
		function __construct(){
			parent::__construct();
		}
		
		//-------------------------------//
		//--  function starts here      --//
		function login_user($username, $password){//login
			//prepare query
			$query = "SELECT * FROM user_table WHERE username = :username OR email = :username OR contact = :username  AND user_password = :password";
			//prepapre the statement
			$stmt = $this->conn->prepare($query);
			//bend parameters
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':password', $password);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}
		
		function register($data){//register
			$query = "INSERT INTO `user_table`(`username`, `email`, `contact`, `password`) 
									VALUES (:name, :email, :contact, :password)";
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':name', $data['name']);
			$stmt->bindParam(':email', $data['email']);
			$stmt->bindParam(':contact', $data['contact']);
			$stmt->bindParam(':password', $data['password']);
			$stmt->execute();
		}
		
	}
	
?>