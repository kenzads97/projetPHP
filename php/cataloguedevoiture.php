<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo logo"><img class="responsive-img" src='../image/logo8.PNG' alt='logo'></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../acceuil.html" ><b>Home</b></a></li>
          <li><a href="cataloguedevoiture.php"style=" border-bottom: 5px solid #2bbbad;background-color: transparent;"><b>Nos voitures</b></a></li>
          <li><a href="../conditions.html"><b>Conditions</b></a></li>
          <li><a href="contact1.php"><b>Contact</b></a></li>
          <li><a href="inscription.php" class="waves-effect waves-light btn"><i class="material-icons left">account_box</i>S'INSCRIRE</a></li>
          <li><a href="connexion.php" class="waves-effect waves-light btn"><i class="material-icons left">lock_open</i>SE CONNECTER</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
         <li><a href="#" style="color:teal"><i class="material-icons left">lock_open</i><b>connectez_vous</b></a></li>
          <li><div class="divider"></div></li>
           <li><a href="#" style="color:teal"><i class="material-icons left">account_box</i><b>inscrivez_vous</b></a></li>
           <li><div class="divider"></div></li>
          <li><a href="#"><i class="material-icons left">home</i><b>home</b></a></li>
           <li><div class="divider"></div></li>
           <li><a href="#"><i class="material-icons left">directions_car</i><b>nos voiture</b></a></li>
           <li><div class="divider"></div></li>
           <li><a href="#"><i class="material-icons left">priority_high</i><b>condition</b></a></li>
           <li><div class="divider"></div></li>
           <li><a href="#"><i class="material-icons left">email</i><b>contact</b></a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="black-text sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
    </div>
     <section>
      <div class="container">
     <div class="icon-block">
     <h4 class="center">Le catalogue de nos voitures: </h4><br>
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
           
                
            <center><a href='connexion.php'  class="btn">reserver</a></center>
                    
        </div>
      </div>
    </div>

                  
<?php

} ?>
</div> 
    </div> 
    </section>
  
    
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
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>
