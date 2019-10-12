<?php 
	include "koneksaun.php";
	$id = $_GET['id'];
	$data = mysqli_query($con, "select * from tb_dadus where id='$id'");
	while($hamosu = mysqli_fetch_array($data)){

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>TOSC Academy 2019</title>
</head>
<body>
	<h2 style="text-align: center;">FORMULARIU</h2>
	<table align="center">
		<form method="post" action="proses_hadia.php">
			<tr>
				<td>Naran :</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $hamosu['id']; ?>">
					<input type="text" name="naran" value="<?php echo $hamosu ['naran']; ?>" required></td>
			</tr>
			<tr>
				<td>Data Moris</td>
				<td><input type="date" name="dm" value="<?php echo $hamosu['dm']; ?>" required></td>
			</tr>
			<tr>
				<td>Sexo</td>
				<td><input type="text" name="sexo" value="<?php echo $hamosu['sexo']; ?>"></td>
			</tr>
			<tr>
				<td>Nivel Estudante :</td>
				<td><input type="text" name="n_estudu" value="<?php echo $hamosu['n_estudu']; ?>" required></td>
			</tr>
			<tr>
				<td>Municipio</td>
				<td>
					<select name="municipio" value="<?php echo $hamosu ['municipio']; ?>">
						<option>Aileu</option>
						<option>Ainaro</option>
						<option>Baucau</option>
						<option>Bobonaro</option>
						<option>Dili</option>
						<option>Liquica</option>
						<option>Lautem</option>
						<option>Manatutu</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>No.Tlf :</td>
				<td><input type="text" name="no_tlf" value="<?php echo $hamosu['no_tlf']; ?>" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $hamosu['email']; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Update"></td>
				<td><input type="reset" name="" onclick="return confirm('Ita hakarak atu hamos...?')" value="Cancel"></td>
			</tr>
		</form>
	</table>
<?php } ?>
</body>
</html>