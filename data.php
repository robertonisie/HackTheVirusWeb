<?php 
	include ("/var/db/dbconfig.php");

	if(isset($_POST['aid'])) {

		$stmt = $db->prepare("SELECT * FROM orase WHERE county_id = " . $_POST['aid']);
		$stmt->execute();
		$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($books);
	}

	function loadAuthors() {

		$stmt = $db->prepare("SELECT * FROM judete");
		$stmt->execute();
		$authors = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $authors;
	}

 ?>