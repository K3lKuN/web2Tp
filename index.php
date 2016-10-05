<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Master Link</title>

		<!-- Jquery -->
		<script src="./res/js/jquery.js"></script>
		<!-- Mon fichier CSS -->
		<link rel="stylesheet" href="./res/css/style.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>
	<body>
		<section>
			<header>
				<?php include './layout/navBar.php' ?>
			</header>
			<article>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Prenom</th>
									<th>NOM</th>
									<th>Filiaire</th>
									<th>Age</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Julian</td>
									<td>HURST</td>
									<td>Génie Logicielle</td>
									<td>22 ans</td>
								</tr>
								<tr>
									<td>Kevin</td>
									<td>GARABEDIAN</td>
									<td>Génie Logicielle</td>
									<td>25 ans</td>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</article>
		</section>
	</body>
</html>