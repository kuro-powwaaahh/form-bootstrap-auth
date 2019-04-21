<html>
	<head>
		<title>FORM LOGIN DAN CSS</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	</head>
	<body>
		<div id="kotak">
			<div id="atas">Login Administrator</div>
			<form method="POST" action="form_login_proses.php">
				<div id="tengah">
					<center>Username :</center><input type="text" name="username" placeholder="Username.." class="masuk"> <br /><br />
					<center>Password :</center><input type="password" name="pass" placeholder="Password.." class="masuk"> <br /><br />
				<div id="bawah">
					<center>
						<input type="submit" name="submit" value="login" class="tombol">
					</center>
				</div>
					<?php
						if ($_GET)
						{
							echo '<div class="text-alert">';
							echo $_GET['message'];
							echo '</div>';
						}
					?>
				</div>
			</form>
		</div>
	</body>
</html>
