<?php
session_start();
ob_start();
?>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/dashboard.css">
	<title>PETLOVE</title>
</head>

<body>


	<header>
	</header>
	<div class="container">

		<div class="sidebar">
			<nav>
				<a href="#" class="logo">PETLOVE</a>
				<ul>
					<li class="active"><a href="#">Dashboard</a></li>
					<li><a href="index.php">Home</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="admin.php">Add Pet</a></li>
				</ul>
			</nav>
		</div>

		<div class="main-content">
			<h1>Dashboard</h1>
			<p>Pjesa e admin-it</p>
			<p>Këto janë mesazhet e pranuara nga vizituesit e faqes të cilët na kontaktuan!</p>
			<table>
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

					$all = "SELECT * FROM email";

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
		</div>

	</div>
</body>

</html>