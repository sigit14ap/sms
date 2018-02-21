<?php
ini_set('max_execution_time', 720);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">

	<title>Mailer</title>

	<!-- Bootstrap core CSS -->
	<link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="narrow-jumbotron.css" rel="stylesheet">
	<style type="text/css">
		.col{
			max-width: 50%;
			overflow: auto;
		}
	</style>
</head>

<body>

	<div class="container">
		<header class="header clearfix">

			<center><h3 class="text-muted">Mailer SMS</h3></center>
		</header>

		<main role="main">

			<div class="jumbotron">

				<div class="row">
					<div class="col">
						<h2>Nomor Telpon</h2>
						<div class="x_content">
							<form method="post" action="action.php">
								<div class="form-group">
									<textarea name="nomor" id="descr" cols="30%" rows="10"></textarea>
								</div>
								
									<br>
								
								<div class="x_content">
									<form method="post">
										<div class="form-group">
											<label>Pengirim</label>
											<select name="pengirim">
													<option>Global Goals MUN</option>
													
											</select>
										</div>
									<h2>ISI SMS </h2>
									<label>Subject</label>
									<br>
									<textarea name="isi" id="descr" cols="50%" rows="10"></textarea>
								<div class="ln_solid"></div>
								<div class="form-group">
									<input type="submit" name="submit" class="btn btn-success" value="Kirim">
								</div>
							</form>
						</div>
					</div>
							</form>
						</div>
					</div>
				</div>
			</div>


</main>

<footer class="footer">
	<center><p>&copy;Original Created by Raqael Ganteng & Atnan Shaleh </p></center>
</footer>

</div> <!-- /container -->

</body>
</html>
