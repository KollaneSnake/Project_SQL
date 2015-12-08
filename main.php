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

	
	
      <div class="sidebaritem">
        <div class="sbihead">
          <h1>additional links</h1>
        </div>
        <div class="sbilinks">
          <!-- **** INSERT ADDITIONAL LINKS HERE **** -->
          <ul>
            <li><a href="#">punkt1</a></li>
            <li><a href="#">punkt2</a></li>
            <li><a href="#">punkt3</a></li>
            <li><a href="">punkt4</a></li>
          </ul>
        </div>
      </div>
	  
	  
	  <!-- **** INSERT OTHER INFORMATION HERE **** --> 
      <div class="sidebaritem">
        <div class="sbihead">
          <h1>other information</h1>
        </div>
        <div class="sbicontent">
         
          <p> TTTTT </p>
        </div>
      </div>
	   <!-- **** END OTHER INFORMATION  **** -->
	  
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
