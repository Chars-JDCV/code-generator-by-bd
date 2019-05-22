<?php
include_once "../head.php";
include_once "../menu.php";
?>
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
<?php
	include_once "../foot.php";
?>