<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login Buku Tamu Digital</title>
		<!-- CSS -->
		<link href="logo_jawa_tengah_icon.ico" rel="icon" type="image/x-icon">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/theme.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style.css" rel="stylesheet">
	</head>

    <body>
        <div class="container">
            <br>
            <div class="alert alert-info" style="max-width: 300px; margin: auto">
                <h2>Digital Guestbook</h2>
                <br>
                <form action="proses.php" method="post">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger" name="submit" value="Masuk">
                    </div>                    
                </form>
            </div>

        </div>

  </body>
</html>