<?php
	//import database connector
	require_once 'connector.php';
	
	//	class for login page active
	class LoginModel extends Connector{
		function __construct(){
			parent::__construct();
		}
		
		// function starts here     
		function login_user($username, $password){//login
			//prepare query
			$query = "SELECT * FROM users WHERE contact = :username OR CONCAT(first_name, ' ', last_name) = :username OR email = :username AND user_password = :password";
			//prepapre the statement
			$stmt = $this->conn->prepare($query);
			//bend parameters
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':password', $password);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}
		
		function register($data){//register
			$query = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `contact`, `password`) 
									VALUES (:firstname, :lastname, :email, :contact :password)";
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':firstname', $data['firstname']);
			$stmt->bindParam(':lastname', $data['lastname']);
			$stmt->bindParam(':email', $data['email']);
			$stmt->bindParam(':contact', $data['contact']);
			$stmt->bindParam(':password', $data['password']);
			$stmt->execute();
		}
		
	}
	
?>