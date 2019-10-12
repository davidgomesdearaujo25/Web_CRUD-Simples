<?php
include "pajina/koneksaun.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TOSC Academy 2019</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container-fluid">
    <?php 
        include "pajina/header.php";
        //include "pajina/menu.php"; 
            if (isset($_GET['page'])) {
              $page = $_GET['page'];
              switch ($page) {
                case 'home':
                  include "pajina/home.php";
                  break;
                case 'dadusn':
                  include "pajina/dadusn.php";
                  break;
                case 'dadus_generu':
                  include "pajina/dadus_generu.php";
                  break;
                case 'totald':
                  include "pajina/totald.php";
                  break;
                case 'hadia':
                  include "pajina/hadia.php";
                  break;
                default:
                  echo "<script>alert('pajina ne'ebe maka ita buka laiha')</script>";
                   break;
              }
            }else{
              include "pajina/home.php";
            };

            include "pajina/footer.php";
           ?>
    	</div>
</body>
</html>
