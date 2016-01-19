<?php
//error_reporting(E_ALL);
//ini_set('display_errors',1);
?>
<!doctype html>
<html lang="en">
<head>
<title>School page</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="style/orange.css">
<link rel="stylesheet" type="text/css" href="style/style1.css">
</head>

<body>
<?php 
//load fail with function
include('model/model_function.php');


 ?>


<div id="main">
  <div id="links">
  <!--            -->
  <a href="admin/signin.php">Admin Login</a>
	</div>
  <div id="logo">
    <h1>School page</h1>
  </div>
  <div id="menu">
    <?php
          $sql = "SELECT * FROM `menyy` ORDER BY `menyy`.`order_menyy` ASC";
          $rows= get_rows($sql);
          //execute query
          include('model/navigation.php');
      ?>
  </div>
  
  
  
  <!-- **** CONTENT **** -->  
  
  <div id="content">
    <div id="column1">

    <?php include ('content/right_menyy.php');?>
	
      
	  
    </div>
	
	
	
	
	 <!-- **** INSERT PAGE CONTENT HERE **** -->
    <?php 
        include('model/parseling.php');
     ?>
	

	<!-- **** END PAGE CONTENT  **** -->
	
	
	
  </div>
  
    <!-- **** END  CONTENT **** -->  
  
  
  <div id="footer"> copyright &copy; 2015 Kiir |  <a href="#">Õppeasutus</a> </div>
</div><!-- end main    -->

</body>
</html>
