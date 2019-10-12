<?php 
	session_start();
	require"pajina/koneksaun.php";

		$username =$_POST['username'];
		$password=md5($_POST['password']);
		$sql = "SELECT * FROM tb_login where username='$username' and password='$password'";
		$query = mysqli_query($con, $sql);

		while ($record=mysqli_fetch_array($query)) {
			$resultadu[]=$record;
		}
		if (!empty($resultadu)) {
			foreach ($resultadu as $hamosu) {
				$_SESSION['username']=$hamosu['username'];
				$_SESSION['password']=$hamosu['password'];
			}
			header("location:index.php");
		}
		else{
		echo "<script>alert('Ita Failla atu login. favor koko fila fali!!!')
	location.replace('login.php')</script>";
			
		}
	
 ?>