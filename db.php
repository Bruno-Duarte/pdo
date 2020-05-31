<?php 

	$dsn = "mysql:host=localhost;dbname=pdo";

	try {
		$pdo = new PDO($dsn, 'root', '1245');
	} catch (PDOExeption $e) {
		echo $e->getMessage();
	}

?>