<?php
session_start();
 
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Espace client</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 <style>
    
    
    
    </style>
</head>
<body>
    <div class="navbar-fixed">
   <nav class="white" role="navigation">
      <div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo logo"><img class="responsive-img" src='../image/logo8.PNG' alt='logo'></a>
        
    <ul class="right hide-on-med-and-down">
          
          <li><a href="../Client/espace%20client.php" style=" border-bottom: 5px solid #2bbbad;background-color: transparent;"><b> Catalogue de voitures</b></a></li>
          <li><a href="mes%20reservation.php"><b> Mes réservations</b></a></li>
          <li><a href="condition.php"><b>Conditions  </b></a></li>
          <li><a href="contactclient.php"><b>Contacter l'agence</b></a></li>
          <li><a class='dropdown-trigger' href="#" data-target='dropdown3'><?php echo $_SESSION['login'] ?><i class="material-icons right ">arrow_drop_down</i> </a>
               <ul id='dropdown3' class='dropdown-content'>    
                  <li><a class="modal-trigger" href="modifiermotdepasse.php"><b>Modifier mot de passe</b></a></li>  
                  <li><a href="deconnectionclient.php"><b>Déconnexion</b></a></li>
             </ul></li>
     </ul>
          
          <!-- menu pour mobile   -->

      <ul id="nav-mobile" class="sidenav" >
          
          <li><a href="#"><b> Catalogue de voitures</b></a></li>
          <li><a href="#"><b> Mes réservations</b></a></li>
          <li><a href="conditions%20de%20r%C3%A9servations.html"><b>Conditions de réservation </b></a></li>
          <li><a href="#"><b>Contacter l'agence</b></a></li>
          <li><a href="modifiermotdepasse.php"><b>Modifier mot de passe</b></a></li>
          <li><a href="deconnectionclient.php" style="color:teal">Déconnexion</a></li>
    
      </ul>
      <a href="#" data-target="nav-mobile" class="black-text sidenav-trigger"><i class="material-icons">menu</i></a>
   </div>
  </nav>
    </div><br>
    <section>
      <div class="container">
     <div class="icon-block">
     <h4 class="center"></h4>
            </div>
        
             
    <?php 
$bdd2 = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
$reponse = $bdd2->query('SELECT * FROM voiture');
while($donnees = $reponse->fetch()){


?> 
 
      
       <div class="row">
    <div class="col s12 m4 ">
     <div class="card">   
        <div class="card-image">
           <img src="../image/<?php echo $donnees['image'];?>"width='100' height='160' />
             
        </div>
        <div class="card-content  height='160'">
             <span class="card-title "><?php echo $donnees['modele'];?>  </span>
              <?php 
              $mat= $donnees['mat'];
              ?>
           
          <p>
             <strong><?php echo'Marque:'?></strong><?php echo $donnees['marq'];?><br>
            <strong><?php echo'Prix:'?></strong><?php echo $donnees['prix'];?><?php echo'DA'?><br>
  
            </p>
        </div>
        <div class="card-action">
           
                
            <center><a href='reserver.php?mat=<?php echo $mat ?>'  class="btn">reserver</a></center>
                    
        </div>
      </div>
    </div>

                  
<?php

} ?>
</div> 
    </div> 
    </section>
  
    
     <?php require 'queuclient.php';?> 
  

 
  <!--  Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
    
  </body>
</html>

