<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Pariwisata</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>
<body style="background: url(../images/pemandangan1.png);">	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" style="margin-top: 100px;">
			<div class="login-panel panel panel-default ">
				<div class="panel-heading text-center" style="margin-top: px; font-family: login100-form validate-form p-b-33 p-t-5; font-size: 35px;" >Login</div>
				<br />
				<br />
				<br />
				<div class="panel-body">
					<form action="cek_login.php" method="post" class="login100-form validate-form p-b-33 p-t-5">
						<fieldset>
							<div class="form-group">
 								<input class="form-control" placeholder="username" name="username" type="username" value="">

							<div class="form-group">
 								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<input style=" width: 100%;  height: 50px;" class="btn btn-info" type="submit" class="tombol_login" value="LOGIN">
					</form>
				</div>
			</div>
		</div>
	</div>	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
