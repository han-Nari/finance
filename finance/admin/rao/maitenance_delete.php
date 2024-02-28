<?php 

	if(isset($_POST["delete"])) {
		$admin_id = htmlspecialchars($_POST["delete"]);

		try {
			$query = "DELETE FROM expenses WHERE id = :admin_id";
			$stmt = $pdo->prepare($query);
			$stmt->bindParam(":admin_id", $admin_id);
			$stmt->execute();
			
			header("location: maintenance.php");
			die();
		} catch (Exception $e) {
			die("Error" . $e->getMessage());
		}
	}