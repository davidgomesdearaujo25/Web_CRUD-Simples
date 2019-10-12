<?php 
	include "koneksaun.php";

	$id = $_POST['id'];
	$naran = $_POST ['naran'];
	$dm = $_POST['dm'];
	$sexo = $_POST['sexo'];
	$n_estudu = $_POST['n_estudu'];
	$municipio = $_POST['municipio'];
	$no_tlf = $_POST['no_tlf'];
	$email = $_POST['email'];

	mysqli_query($con, "update tb_dadus set naran='$naran', dm='$dm', sexo='$sexo', n_estudu='$n_estudu', municipio='$municipio', no_tlf='$no_tlf', email='$email' where id='$id'");

	echo "<script>alert('Ita hadia ho susessu... Obrigadu!!!')
		location.replace('../index.php?page=totald')</script>
		";


 ?>