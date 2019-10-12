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
        include "pajina/menu.php"; 
            if (isset($_GET['page'])) {
              $page = $_GET['page'];
              switch ($page) {
                case 'home':
                  include "pajina/home.php";
                  break;
                case 'profile':
                  include "pajina/profile.php";
                  break;
                case 'foto':
                  include "pajina/foto.php";
                  break;
                case 'video':
                  include "pajina/video.php";
                  break;
                case 'rejistu':
                  include "pajina/rejistu.php";
                  break;
                case 'dadus':
                  include "pajina/dadus.php";
                  break;
                case 'profile':
                  include "pajina/profile.php";
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
