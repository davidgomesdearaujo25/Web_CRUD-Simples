<?php 
	include "koneksaun.php";
	$id = $_GET['id'];
	$delete = "DELETE FROM tb_dadus where id='$id'";

	mysqli_query($con, $delete) or die ("Faila atu hamos");
	echo "
		<script>alert('Dadus hamos ho susessu')
		location.replace('../index.php?page=totald')</script>
	";

 ?>