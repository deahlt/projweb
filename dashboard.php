<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'pageIncludes/includetoheadtag.php';?>
	<title><?php echo $title;?> - <?php echo basename(__FILE__, '.php');?></title>
</head>

<body class="<?php echo basename(__FILE__, '.php');?>">


	<header class="<?php echo basename(__FILE__, '.php');?>">
    <?php include 'pageIncludes/header.php';?>
  </header>


	<main>

	<div class="container">


				<div class="main-content">
					<div class="content-container">
						<h1>Dashboard</h1>
						<p>Pjesa e admin-it</p>
						<p>Këto janë mesazhet e pranuara nga vizituesit e faqes të cilët na kontaktuan!</p>
					</div>

					<div class="table-container">
					<table class="emails">
						<thead>
							<tr>
								<th>Emri</th>
								<th>Email</th>
								<th>Kontakti</th>
								<th>Mesazhi</th>

							</tr>
						</thead>
						<tbody>


							<?php

							$conn = mysqli_connect('localhost', 'root', '', 'doglover');

							$all = "SELECT * FROM email ORDER BY id DESC";

							$stmt = mysqli_query($conn, $all);

							while ($row = mysqli_fetch_assoc($stmt)) {
								echo


								"
									<tr>
									<td>{$row['name']} </td>
									<td> {$row['email']}</td>
									<td> {$row['number']} </td>
									<td> {$row['message']} </td>

								</tr>
									";
							}
							?>

						</tbody>
						<tfoot>
						</tfoot>
					</table>

				</table>

		</div>

	</div>
</main>
</body>

</html>
