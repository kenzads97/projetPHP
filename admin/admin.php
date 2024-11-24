<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
if(isset($_GET['login'])){
 $requser=$bdd->prepare('SELECT*FROM admin WHERE login=? ');
  $requser-> execute(array($_GET['login'])) ; 
  $userinfo = $requser->fetch(); 
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>admin</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 
</head>
<body>
     <div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo logo"><img class="responsive-img" src='../image/logo8.PNG' alt='logo'></a>
      <ul class="right hide-on-med-and-down">
          <li><a class='dropdown-trigger' href="#" data-target='dropdown1' ><b>Gestion voiture<i class="material-icons right ">arrow_drop_down</i></b></a>
               <ul id='dropdown1' class='dropdown-content'>   
                   <li><a href="ajout.php" ><b>Ajouter voiture</b></a></li>  
                    <li><a href='listevoiture.php?login=<?php echo $_SESSION['login'] ?> ' ><b>Supprimer/Modifier voiture</b></a></li>
                
              </ul></li>
           <li><a   href='listeclient.php?login=<?php echo $_SESSION['login'] ?>' ><b>Gestion locataire</b></a>
            </li>
           <li><a href="gerer%20resevation.php"><b>Gérer reservation</b></a></li>
          <li><a href='boitedereception.php?login=<?php echo $_SESSION['login'] ?>' ><b>Boite de reception</b></a></li>
          <li><a href="#nos voiture"><b> Nos voitures</b></a></li>
          <li><a class='dropdown-trigger' href='#' data-target='dropdown3'><?php echo $userinfo['login'];?><i class="material-icons right ">arrow_drop_down</i></a>
                  <ul id='dropdown3' class='dropdown-content'>    
                  <li><a href="modifiermotdepasseadmin.php"><b>Mdifier mot de passe</b></a></li>  
                  <li><a href="deconnectionadmin.php"><b>Déconnexion</b></a></li> 
             </ul></li>
    
    </ul>

      <ul id="nav-mobile" class="sidenav" data-target='dropdown3'>
          <li><a class='dropdown-trigger' href="#" data-target='dropdown'>gestion voiture</a>
          <ul id='dropdown' class='dropdown-content'>
               <li><a href="#">ajouter voiture</a>
               <li><a href="#">supprimer/modifier voiture</a>
                <li><a href="#"><b>voiture disponible</b></a></li>
                <li><a href="#"><b>voiture resevé</b></a></li>    
              
              </ul></li>
         
          <li><a  href='listeclient.php?login=<?php echo $_SESSION['login'] ?>'  >gestion locataire</a>
             
          </li>
          
        <li><a href="#"><b>gérer reservation</b></a></li>
          <li><a href='boitedereception.php?login=<?php echo $_SESSION['login'] ?>'><b>boite de reception</b></a></li>
          <li><a href="#"><b> nos voitures</b></a></li>
          <li><a href="#" style="color:teal">deconnexion</a></li>
    
      </ul>
      <a href="#" data-target="nav-mobile" class="black-text sidenav-trigger"><i class="material-icons">menu</i></a>
   </div>
            
      
    </nav>
    </div>
<!-- section:slider-->
 
  <section class="slider">
    <ul class="slides">
      <li>
        <img src="../image/10.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="light grey-text text-lighten-3">des marques reputées,un choix démesurée,des economis insensées!</h3>
        </div>
      </li>
      
    </ul>
  </section>
   <div class="container">
    <div class="section">

      <!-- section: Nos voiture   -->
        <section id="nos voiture" class="section section-blog scrollspy">
           <div class="icon-block">
           <h3 class="center">Nos voitures:</h3>
            </div>
        
             
    <?php 
$bdd2 = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
$reponse = $bdd2->query('SELECT * FROM voiture');
while($donnees = $reponse->fetch()){


?> 
 
      
      <div class="row">  
     
      <div class="col s12 m12 l3">
           
         <div class="card small">   
        <div class="card-image">
          <img src="../image/<?php echo $donnees['image'];?>"width='100' height='220' />
          <span class="card-title"></span>
        </div>
        <div class="card-content">
         <p>
              <strong><?php echo'Marque:'?></strong><?php echo $donnees['marq'];?><br>
               <strong><?php echo'Modele:'?></strong><?php echo $donnees['modele'];?><br>
                 <strong><?php echo'couleur:'?></strong><?php echo $donnees['couleur'];?><br>
                 <strong><?php echo'Prix:'?></strong><?php echo $donnees['prix'];?><?php echo'DA'?><br>
            
             
            
            </p>
        </div>
      
      </div>
    </div>    
                  
<?php

} ?>


            </div> </section></div>
    </div>
    

 
    
    <br><br>
  
    <!-- section :follow-->
    <section class="section section-follow  teal darken-2 white-text">
    <div class="container">
      <div class="row">
        <div class=" col s12 center">
            <ul>
                <li> <a class="white-text" href="#!"><i class="material-icons blak-text">location_on</i><b>Centre commercial la tour Nouvelle ville Tizi-ouzou</b></a></li>
                <a class="white-text" href="#!"><i class="material-icons blak-text">local_phone</i>   <b>Tél:+213 540 42 62 00/Fax:+213 26 11 03 96   </b></a>
            </ul>
             <a href="#" class="white-text">
              <i class="fab fa-facebook fa-4x"></i>
            </a> <a href="#" class="white-text">
              <i class="fab fa-pinterest fa-4x"></i>
            </a><a href="#" class="white-text">
                <i class="fab fa-iwitter fa-4x"></i>
            </a><a href="#" class="white-text">
               <i class="fab fa-linkedin fa-4x"></i>
            </a><a href="#" class="white-text">
               <i class="fab fa-google-plus fa-4x"></i>
            </a>
        </div>
        </div>
        </div>
    </section>

 
  <!--  Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
   
  </body>
</html>
<?php
}
?>