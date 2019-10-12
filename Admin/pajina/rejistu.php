<div class="container">
<div class="content">
<h1 style="text-align: center;">
	<h3 style="text-align: center;">FORMULARIU</h3>
	<table align="center">
	<form method="post" action="pajina/proses_input.php">
	<tr>
	<td>Naran :</td>
	<td><input type="text" name="naran" required></td>
	</tr>
	<tr>
	<td>Data Moris</td>
	<td><input type="date" name="dm" required></td>
	</tr>
	<tr>
	<td>Sexo</td>
	<td>
	<input type="radio" name="sexo" value="Mane" checked>Mane
	<input type="radio" name="sexo" value="Feto" checked>Feto
	</td>
	</tr>
	<tr>
	<td>Nivel Estudante :</td>
	<td><input type="text" name="n_estudu" required></td>
	</tr>
	<tr>
	<td>Municipio</td>
	<td>
	<select name="municipio">
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
	<td><input type="text" name="no_tlf" required></td>
	</tr>
	<tr>
	<td>Email</td>
	<td><input type="text" name="email"></td>
	</tr>
	<tr>
	<td><input type="submit" name="submit" value="Rai"></td>
	<td><input type="Reset" name="Reset" value="Cancel"></td>
	</tr>
	</form>
	</table>
	</div>
	<div class="sidebar">
		<?php include "sidebar.php" ?>
	</div>
</div>

