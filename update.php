<?php 
	
	require_once('./db.php');
	$sql = "UPDATE users SET user_name = :name, user_email = :email, user_password = :password WHERE id = :id";
	$stmt = $pdo->prepare($sql);
	$name = "Mark";
	$email = "markemail@gmail.com";
	$password = "admistration";
	$id = 1;
	$stmt->execute([
		':name' => $name,
		':email' => $email,
		':password' => $password,
		':id' => $id
 	])

?>