<?php
	include "koneksaun.php";
	$naran =$_POST['naran'];
	$dm =$_POST['dm'];
	$sexo =$_POST['sexo'];
	$n_estudu = $_POST['n_estudu'];
	$municipio = $_POST['municipio'];
	$no_tlf = $_POST['no_tlf'];
	$email = $_POST['email'];
	$esperiensia = $_POST['esperiensia'];

	$sql = "insert into tb_dadus (naran, dm, sexo, n_estudu, municipio, no_tlf, email, esperiensia) value ('$naran', '$dm', '$sexo','$n_estudu', '$municipio', '$no_tlf', '$email', '$esperiensia')";
	$query = mysqli_query($con, $sql);
	if ($query) {
		echo "<script>alert('Ita Rejistu ho Susessu');
						document.location.href='../index.php?page=dadus';
			  </script>";
		}else{
			echo "10kulpa ita failla atu rejistu";
		};
 ?>