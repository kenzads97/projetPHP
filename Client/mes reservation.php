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
          
          <li><a href="../Client/espace%20client.php" ><b> Catalogue de voitures</b></a></li>
          <li><a href="#"style=" border-bottom: 5px solid #2bbbad;background-color: transparent;"><b> Mes réservations</b></a></li>
          <li><a href="condition.php"><b>Conditions  </b></a></li>
          <li><a href="contactclient.php"><b>Contacter l'agence</b></a></li>
          <li><a class='dropdown-trigger' href="#" data-target='dropdown3'><?php echo $_SESSION['login'] ?><i class="material-icons right ">arrow_drop_down</i> </a>
               <ul id='dropdown3' class='dropdown-content'>    
                  <li><a class="modal-trigger" href="modifiermotdepasse.php"><b>Modifier mot de passe</b></a></li>  
                  <li><a href="#"><b>Déconnexion</b></a></li>
             </ul></li>
     </ul>
          
          <!-- menu pour mobile   -->

      <ul id="nav-mobile" class="sidenav" >
          
          <li><a href="#"><b> Catalogue de voitures</b></a></li>
          <li><a href="#"><b> Mes réservations</b></a></li>
          <li><a href="conditions%20de%20r%C3%A9servations.html"><b>Conditions de réservation </b></a></li>
          <li><a href="#"><b>Contacter l'agence</b></a></li>
          <li><a href="modifiermotdepasse.php"><b>Modifier mot de passe</b></a></li>
          <li><a href="#" style="color:teal">Déconnexion</a></li>
    
      </ul>
      <a href="#" data-target="nav-mobile" class="black-text sidenav-trigger"><i class="material-icons">menu</i></a>
   </div>
  </nav>
    </div>
     <div class="container"> <br><br>
        <div class="row">
        <!-- basic-->
            <div class="col12 s12 m4">
                <div class="card">
                <div class="card-content">
                   
                     <table class="highlight" class="responsive-table">
                         <?php $id_client = $_SESSION['id_client'] ?>
        <thead>
          <tr>
              <th>Nom de la voiture</th>
              <th>Date de depart</th>
              <th>Heure de depart</th>
               <th>Date de retour</th>
              <th>Heure de retour</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
            <?php 
           
             $bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
             $reponse = $bdd->query("SELECT * FROM reservation where id_client='$id_client'");

             while($donnees = $reponse->fetch()){
               
             ?>
          <tr>
               <?php $id_res=$donnees['id_res'];?>
              <?php $mat= $donnees['mat'] ;
               $req = $bdd->query("SELECT * FROM voiture where mat='$mat'");
               $q = $req->fetch()
                 ;?>
              <td><?php echo $q['modele'];?></td> 
            <td><?php echo $donnees['dated'];?></td>
            <td><?php echo $donnees['heured'];?></td>
            <td><?php echo $donnees['dater'];?></td>
            <td><?php echo $donnees['heurer'];?></td>
            
            <td> <a href='annuler%20reservation.php?id_res=<?php echo $id_res ?>'onclick='return confirm("Etes vous sur de vouloir annuler cette reservation?");' class='btn '>Annuler</a>  </td>  
             
          </tr>
        
          <?php  } ?>
        </tbody>
      </table>
            
                    
                    
                    
                    
                    
                    </div>
                </div>
            </div>
        </div>    
        
    </div><br><br><br><br><br><br><br>
   <?php require 'queuclient.php';?> 
  <!--  Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
    
  </body>
</html>

