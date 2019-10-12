	<div class="container">
		<div class="content">
<h2 style="text-align: center;">DADUS</h2>
 	<table class="dadus">
 		<tr>
 			<th class="dadus">No</th>
 			<th class="dadus">Naran Kompleto</th>
 			<th class="dadus">Data Moris</th>
 			<th class="dadus">Sexo</th>
 			<th class="dadus">Nivel Estudu</th>
 			<th class="dadus">Municipio</th>
 			<th class="dadus">No.TLF</th>
 			<th class="dadus">Email</th>
 			<th class="dadus">Asaun</th>
 		</tr>
 		<?php
 			include "koneksaun.php";
 			$query = mysqli_query($con, "SELECT * FROM tb_dadus");
 			$no = 1;
 				while($row = mysqli_fetch_array($query)){
 				?>
 		<tr>
 			<td class="dadus"><?php echo $no; ?></td>
 			<td class="dadus"><?php echo $row['naran']; ?></td>
 			<td class="dadus"><?php echo $row['dm']; ?></td>
 			<td class="dadus"><?php echo $row['sexo']; ?></td>
 			<td class="dadus"><?php echo $row['n_estudu']; ?></td>
 			<td class="dadus"><?php echo $row['municipio']; ?></td>
 			<td class="dadus"><?php echo $row['no_tlf']; ?></td>
 			<td class="dadus"><?php echo $row['email']; ?></td>
 			<td class="dadus"><a href="pajina/hamos.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Ita hakarak atu hamos...?')">Hamos</a>|<a href="pajina/hadia.php?id=<?php echo $row['id']; ?>" >Hadia</a></td>
 		</tr>
 		<?php
 			$no++;
 		}
 		 ?>
 	</table>
		</div>
		<div class="sidebar">
			<?php include "sidebar.php" ?>
		</div>
	</div>
