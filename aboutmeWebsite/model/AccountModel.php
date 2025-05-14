<?php
	//import database connector
	require_once 'connector.php';
	
	//-------------------------------//
	//--class for login page active--//
	//-------------------------------//
	class AccountModel extends Connector{
		function __construct(){
			parent::__construct();
		}
		
		//-------------------------------//
		//--  function starts here      --//
		function getAccount(){//login
			$query = "SELECT * FROM user_table";
			//prepapre the statement
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			return $stmt->fetchall(PDO::FETCH_ASSOC);
		}
		
		function updateAccount($user){//update account
			//prepare for query
			$query = "UPDATE `user_table` SET `username`='{$user['name']}',`email`='{$user['email']}',`password`='{$user['password']}' WHERE `id`='{$user['id']}'";
			//prepapre binding
			$stmt = $this->conn->query($query);
			$stmt->execute();//execute query
			return $this->conn->lastInsertId();
		}
		
		function deleteAccount($user){//delete account
			//prepare for query
			$query = "DELETE FROM `user_table` WHERE `id`='{$user['id']}'";
			//prepapre binding
			$stmt = $this->conn->query($query);
			$stmt->execute();//execute query
			return $stmt->fetchall(PDO::FETCH_ASSOC);
		}
	}
?>