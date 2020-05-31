<?php 

	require_once('./db.php');

	$sql = "INSERT INTO users (user_name, user_email, user_password) VALUES (:name, :email, :password)";
	$stmt = $pdo->prepare($sql);
	$name = "Barik";
	$email = "mdabarik19@gmail.com";
	$password = "secret";
	$stmt->execute([
		':name' => $name,
		':email' => $email,
		':password' => $password
	])

?>