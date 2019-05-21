<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap-4.0.0/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<form action="main.php" method="post">
					<div class="form-group">
						<label for="hostname">Hostname</label>
						<input type="text" class="form-control" id="hostname" placeholder="localhost">
					</div>
					<div class="form-group">
						<label for="dbname">Data Base Name</label>
						<input type="text" class="form-control" id="dbname" placeholder="SIRDIS">
					</div>
					<div class="form-group">
						<label for="username">User Name</label>
						<input type="text" class="form-control" id="username" placeholder="root">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="">
					</div>
					<button type="submit" class="btn btn-primary">Change Data</button>
				</form>
			</div>
		</div>
			<div class="row">
				<div class="form-group">
					<input type="button" id= "btngenerator" class="btn btn-success" value = "Generate Code">
				</div>
			</div>
	</div>
  </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/css/bootstrap-4.0.0/js/bootstrap.min.js"></script>
</html>