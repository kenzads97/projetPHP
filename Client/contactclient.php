<?php
session_start();
$bdd= new PDO('mysql:host=127.0.0.1;dbname=location','root','');
    if(isset($_POST['envoyer'])){
        if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])){
          $nom= htmlspecialchars($_POST['nom']);
             $email= htmlspecialchars($_POST['mail']);
             $message= htmlspecialchars($_POST['message']);
           
               $insertmessage = $bdd->prepare(" INSERT INTO contact(nom,mail,message)VALUES(?,?,?)");
               $insertmessage->execute(array($nom,$email,$message));
               $erreur = "votre message est bien ete envoyer";
           } 
        
         }   
        
        else{
            $erreur="tous les champs doit etre remplit";
        }
     
  

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
          <li><a href="mes%20reservation.php"><b> Mes réservations</b></a></li>
          <li><a href="condition.php"><b>Conditions  </b></a></li>
          <li><a href="#"style=" border-bottom: 5px solid #2bbbad;background-color: transparent;"><b>Contacter l'agence</b></a></li>
          <li><a class='dropdown-trigger' href='espace%20client.php?login=<?php echo $_SESSION['login'] ?>' data-target='dropdown3'><?php echo $_SESSION['login'] ?><i class="material-icons right ">arrow_drop_down</i> </a>
               <ul id='dropdown3' class='dropdown-content'>    
                  <li><a class="modal-trigger" href="modifiermotdepasse.php"><b>Modifier mot de passe</b></a></li>  
                  <li><a href="deconnectionclient.php"><b>Déconnexion</b></a></li>
             </ul></li>
     </ul>
          
          <!-- menu pour mobile   -->

      <ul id="nav-mobile" class="sidenav" >
          
          <li><a href="espace%20client.php"><b> Catalogue de voitures</b></a></li>
          <li><a href="mes%20reservation.php"><b> Mes réservations</b></a></li>
          <li><a href="conditions%20de%20r%C3%A9servations.html"><b>Conditions de réservation </b></a></li>
          <li><a href="contactclient.php"><b>Contacter l'agence</b></a></li>
          <li><a href="modifiermotdepasse.php"><b>Modifier mot de passe</b></a></li>
          <li><a href="deconnectionclient.php" style="color:teal">Déconnexion</a></li>
    
      </ul>
      <a href="#" data-target="nav-mobile" class="black-text sidenav-trigger"><i class="material-icons">menu</i></a>
   </div>
  </nav>
    </div>
     <br><br><br>
    <section>
    <div class="container">
        <div class="row">
            <div class="col s12"></div>
            <div class="col s6">
            <div class="card-panel  center">
                <i class="medium material-icons">email</i>
        <h1>contacter nous</h1>
                <p>envoyez nous un message pour tout vous question sur notre site et sur notre activété</p>
                </div>
            </div>
             
    <div class="col s6">
        <div class="card-panel z-depth-3" >
                <form id="contact-form" method="post"action="">
                    <div class="input-field">
                    <input type="text" name="nom"id="nom" required>
                        <label for="nom">votre nom</label>
                    </div>
                     <div class="input-field">
                    <input type="email" name="mail"id="email"class="validate" required>
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-field">
                        <textarea  name="message"id="message" class="materialize-textarea" required></textarea>
                        <label for="message">Entrer votre message</label>
                    </div>
                    <input type="submit" name="envoyer" value="envoyer" class="btn right" >
                    <div class="clearfix"></div>
                </form>
            <?php 
            if(isset($erreur))
            {
                echo $erreur;
            }
            
            ?>
            
            </div>
    </div>
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