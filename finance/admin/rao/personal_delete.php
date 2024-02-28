<?php 

	if(isset($_POST["delete"])) {
		$admin_id = htmlspecialchars($_POST["delete"]);

		try {
			$query = "DELETE FROM services WHERE id = :admin_id";
			$stmt = $pdo->prepare($query);
			$stmt->bindParam(":admin_id", $admin_id);
			$stmt->execute();
			
			header("location: personal.php");
			die();
		} catch (Exception $e) {
			die("Error" . $e->getMessage());
		}
	}