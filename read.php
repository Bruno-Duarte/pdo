<?php 

	/*require_once('./db.php');
	$sql = "SELECT * FROM users";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();

	while ($users = $stmt->fetch()) {
		print_r($users);
	}*/

	/*require_once('./db.php');
	//$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC, PDO::FETCH_OBJ);
	// unnamed placeholder
	$sql = "SELECT * FROM users WHERE id = ?";
	// named placeholder
	$stmt = $pdo->prepare($sql);
	// bindparam
	$id = 1;
	$stmt->bindParam(1, $id);
	$stmt->execute();

	while ($users = $stmt->fetch(PDO::FETCH_OBJ)) {
		print_r($users);
	}*/

	/*require_once('./db.php');
	$sql = "SELECT * FROM users WHERE id = :id AND user_name = :name";
	// named placeholder
	$stmt = $pdo->prepare($sql);
	// bindparam
	$id = 2;
	$name = 'jane';
	$stmt->bindParam(':id', $id);
	$stmt->bindParam(':name', $name);
	// ASSOC array
	$stmt->execute();
	//$stmt->execute(1, 'John')

	while ($users = $stmt->fetch(PDO::FETCH_OBJ)) {
		print_r($users);
	}*/

	require_once('./db.php');
	$sql = "SELECT * FROM users WHERE id = :id AND user_name = :name";
	// named placeholder
	$stmt = $pdo->prepare($sql);
	// bindparam
	$id = 2;
	$name = 'jane';
	// ASSOC array
	$stmt->execute([
		':id' => $id,
		':name' => $name
	]);
	//$stmt->execute(1, 'John')

	while ($users = $stmt->fetch(PDO::FETCH_OBJ)) {
		print_r($users);
	}

?>