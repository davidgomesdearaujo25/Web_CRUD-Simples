<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
	<style>
			body{
				background-color: teal;
			}
			.countainer{
				width: 100%;
				height: auto;
			}
			.login{
				width: 280px;
				height: 250px;
				background-color: blue;
				margin-left: auto;
				margin-right: auto;
				border-radius: 10px;
				border: solid;
			}
			.img{
				border-radius: 250px;
				width: 70px;
				height: 70px;
				margin-top: -40px;

			}
			.submit{
				text-align: center;
			}
			table, tr, td{
				margin-left: auto;
				margin-right: auto;
				font-family: sans-serif;
				font-size: 12px;
				font-weight: bold;
				color: white;
			}
	</style>
<body>
	<div class="coutainer">
		<br><br><br><br><br><br><br><br>

		<div class="login">
			<center>
				<img src="pajina/foto/2.jpg" class="img">
			</center>
			<h3 style="text-align: center; font-family: sans-serif; padding: 2px; color: white;">LOGIN</h3>
			<form method="post" action="proses_login.php">
				<table>
					<tr>
						<td>
							<label>Username :</label>
						</td>
						<td><input type="text" name="username" required></td>
					</tr>
					<tr>
						<td>
							<label>Password :</label>
						</td>
						<td><input type="password" name="password" required></td>
					</tr>
				</table>
				<center>
					<br>
					<input type="submit" name="login" value="Login">
					<input type="reset" name="reset" value="Reset"><br>
					<a href=".." style="color: white; font-weight: bold;">Fila</a>
				</center>
			</form>
		</div>
	</div>
</body>
</html>
