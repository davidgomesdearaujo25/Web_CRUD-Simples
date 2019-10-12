<div class="container">
 	<h2 style="text-align: center;">DADUS</h2>
 	<table align="center" class="dadus">
 		<tr>
 			<th class="dadus">No</th>
 			<th class="dadus">Naran Kompleto</th>
 			<th class="dadus">Data Moris</th>
 			<th class="dadus">Sexo</th>
 			<th class="dadus">Nivel Estudu</th>
 			<th class="dadus">Municipio</th>
 			<th class="dadus">No.TLF</th>
 			<th class="dadus">Email</th>
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
 			<td class="dadus"><?php echo $row['foto']; ?></td>
 		</tr>		
 		<?php 
 			$no++;
 		}
 		 ?>
 	</table>
</div>
