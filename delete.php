<?php 

	require_once('./db.php');

	$sql = 'DELETE FROM users WHERE id = :id';
	$stmt = $pdo->prepare($sql);
	$id = 3;
	$stmt->execute([
		':id' => $id
	])

?>