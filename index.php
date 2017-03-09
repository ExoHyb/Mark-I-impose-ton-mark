<?php

$json = file_get_contents('mark.json', true);
$data = json_decode($json, true);

$htmlcss = array();
$php     = array();
$jquery  = array();
$smarty  = array();

foreach ($data as $entry) {
	if(isset($entry['option'])) {
		if ($entry['option'] == 'htmlcss') {
			$htmlcss[] = $entry;
		}
		elseif ($entry['option'] == 'php') {
			$php[] = $entry;
		}
		elseif ($entry['option'] == 'jquery') {
			$jquery[] = $entry;
		}
		else {
			$smarty[] = $entry;
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MARK I</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Mark I</h1>
		<div class="row">
			<div class="col-sm-3">
				<h2 class="text-center">HTML/CSS</h2>
				<ul>
					<?php
					foreach ($htmlcss as $entry) {
						echo '<li>';
							echo '<a href="' . $entry['lien'] . '">' . $entry['titre'] . '</a>';
						echo '</li>';
					}
					?>
				</ul>
			</div>
			<div class="col-sm-3">
				<h2 class="text-center">PHP</h2>
				<ul>
					<?php
					foreach ($php as $entry) {
						echo '<li>';
							echo '<a href="' . $entry['lien'] . '">' . $entry['titre'] . '</a>';
						echo '</li>';
					}
					?>
				</ul>
			</div>
			<div class="col-sm-3">
				<h2 class="text-center">JQUERY</h2>
				<ul>
					<?php
					foreach ($jquery as $entry) {
						echo '<li>';
							echo '<a href="' . $entry['lien'] . '">' . $entry['titre'] . '</a>';
						echo '</li>';
					}
					?>
				</ul>
			</div>
			<div class="col-sm-3">
				<h2 class="text-center">SMARTY</h2>
				<ul>
					<?php
					foreach ($smarty as $entry) {
						echo '<li>';
							echo '<a href="' . $entry['lien'] . '">' . $entry['titre'] . '</a>';
						echo '</li>';
					}
					?>
				</ul>
			</div>
		</div>
		<h2>Créer un Mark</h2>
		<div class="row">
			<div class="col-sm-6">
				<form class="form-horizontal" action="process.php" method="get">
					<div class="form-group">
						<div class="col-sm-10">
							<input type="text" class="form-control" name="titre" id="titre" placeholder="Créer un titre à votre Mark">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
							<input type="text" class="form-control" name="lien" id="lien" placeholder="Donnez un lien à votre Mark">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6">
							<select class="form-control" name="option">
								<option value="htmlcss">HTML/CSS</option>
								<option value="php">PHP</option>
								<option value="jquery">JQUERY</option>
								<option value="smarty">SMARTY</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-default">Créer</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

<!-- sass -watch css/sass/style.scss:css/style.css -->