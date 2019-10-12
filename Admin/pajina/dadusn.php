	<div class="container">
		<div class="content">
			<h1 style="text-align: center;">Dadus husi Nivel Estudu</h1>
			<table align="center" class="dadus">
				<tr>
					<th class="dadus">Universitariu</th>
					<th class="dadus">Secundario</th>
					<th class="dadus">Pre-Secundario</th>
					<th class="dadus">La Eskola</th>
				</tr>
				<tr>
					<td class="dadus">
						<?php
								include "koneksaun.php";
								$select = mysqli_query($con, "SELECT * FROM tb_dadus WHERE n_estudu='Universitariu'");
								$result = mysqli_num_rows($select);
								echo "$result";
					 ?>
				 </td>
					 <td class="dadus">
						 <?php
							 $select1 = mysqli_query($con, "SELECT * FROM tb_dadus WHERE n_estudu='Secundario'");
							 $result1 = mysqli_num_rows($select1);
							 echo "$result1";
						 ?>
					 </td>
					 <td class="dadus"></td>
				</tr>
			</table>

		</div>
		<div class="sidebar">
			<?php include "sidebar.php" ?>
		</div>
	</div>
