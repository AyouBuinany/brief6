<?php

session_start();
if( $_SESSION["user"] == ""){

    header("Location: Login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ACCEUIL</title>
	<link rel="stylesheet" href="css/styles.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script  src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <link href="../app/img/logoadmin.png" rel="icon" type="image/png">
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>
</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <!-- <div class="logo"><img src="images/progress__monochromatic.png"> </div> -->
      <!-- <ul>
        <li>
         
          <input type="text" placeholder="rechercher" id="search">
        </li>
        <li><a href="#">
          <i class="fas fa-search"></i></a></li>
        <li><a href="#">
          <i class="fas fa-bell"></i>
          </a></li>
        <li><a href="#">
          <i class="fas fa-user"></i>
          </a></li>
      </ul> -->
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="#" class="active">
          <span class="icon"><i class="fas fa-home"></i></span>
          <span class="title">ACCEUIL</span></a></li>
        <li><a href="Product/produit.php">
          <span class="icon"><i class="fas fa-user"></i></span>
          <span class="title">Gestion Produit</span>
          </a></li>
        <li><a href="Product/statistique.php">
          <span class="icon"><i class="fas fa-address-card"></i></span>
          <span class="title">Statistique</span>
          </a></li>
        <li><a href="Loguot.php">
          <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
          <span class="title">DECONNECTER</span>
          </a></li>   
    </ul>
  </div>
  
  <div class="main_container">
    <img class="images" src="images/progress__monochromatic.png">
  </div>
</div>
	
</body>
</html>