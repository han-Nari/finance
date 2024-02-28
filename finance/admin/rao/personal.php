<?php 
	include "../includes/finance_db_connect.php";
	include "../includes/session.php";
	include "personal_fetch.php";
	include "personal_delete.php";
		
	$admin_id = $_SESSION['admin_id'];

	if(!isset($admin_id)){
	   header('location:../Dashboard/dash.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Personal Services</title>

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="\test\finance\img\logo.png">

	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	
	<!-- ==== Icon ==== -->
	<script src="https://kit.fontawesome.com/9fd2f42e98.js" crossorigin="anonymous"></script>

	<!-- ==== Css Link ==== -->
	<style>
		<?php include "../dashboard/dash.css"; ?>
		<?php include "../coa/table.css"; ?>
		<?php include "personal.css"; ?>
	</style>
</head>
<body>
	<main>
	<!-- Sidebar -->
	<?php include "../dashboard/side.php";?>

	<!-- Header -->
	<?php include "../dashboard/header.php";?>

	<!-- Main content -->
		<section>
			<div class="container">
				<div class="auto">
					<table>
						<caption>
							<div class="flex">
								<h1 class="title">Personal Services</h1>
								<div class="add_admin">
									<a href="print_personal.php"><i class="fa-solid fa-print"></i></a>
									<a href="personal_add.php">Add Account</a>
								</div>
							</div>
						</caption>
						<thead>
							<tr>
								<th>Reference No.</th>
								<th>Role</th>
								<th>Approriation</th>
								<th>Date</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($results as $result) : ?>
								<tr>
									<td data-cell="Reference No"><?php echo $result["id"]; ?></td>
									<td data-cell="Role"><?php echo $result["role"]; ?></td>
									<td data-cell="Approriation"><?php echo $result["appropriation"]; ?></td>
									<td data-cell="Date"><?php echo $result["created_at"]; ?></td>
									<td data-cell="Edit"><a class="edit" href="personal_edit.php?id=<?php echo htmlspecialchars($result["id"]); ?>">Edit</a></td>
									<td data-cell="Delete">
										<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">	
											<button id="delete_button" type="submit" name="delete" class="delete" value="<?php echo htmlspecialchars($result["id"]); ?>">Delete</button>
											<a href="javascript:void"></a>
										</form>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>	
		</section>
	</main>
	<script>
		<?php include "../dashboard/dash.js"; ?>
	</script>
</body>
</html>
