<?php 
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
<html>
    

<head>
     <title>contact</title>
       <link rel="stylesheet" type="text/css"href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>contact</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body> 
    <div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo logo"><img class="responsive-img" src='../image/logo8.PNG' alt='logo'></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../acceuil.html" ><b>Home</b></a></li>
          <li><a href="cataloguedevoiture.php"><b>Nos voitures</b></a></li>
          <li><a href="../conditions.html"><b>Condition</b></a></li>
          <li><a href="contact1.php"style=" border-bottom: 5px solid #2bbbad;background-color: transparent;"><b>Contact</b></a></li>
          <li><a href="inscription.php" class="waves-effect waves-light btn"><i class="material-icons left">account_box</i>S'INSCRIRE</a></li>
          <li><a href="connexion.php" class="waves-effect waves-light btn"><i class="material-icons left">lock_open</i>SE CONNECTER</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
         <li><a href="connexion.php" style="color:teal"><i class="material-icons left">lock_open</i><b>connectez_vous</b></a></li>
          <li><div class="divider"></div></li>
           <li><a href="inscription.php" style="color:teal"><i class="material-icons left">account_box</i><b>inscrivez_vous</b></a></li>
           <li><div class="divider"></div></li>
          <li><a href="../acceuil.html"><i class="material-icons left">home</i><b>home</b></a></li>
           <li><div class="divider"></div></li>
           <li><a href="cataloguedevoiture.php"><i class="material-icons left">directions_car</i><b>nos voiture</b></a></li>
           <li><div class="divider"></div></li>
           <li><a href="../conditions.html"><i class="material-icons left">priority_high</i><b>condition</b></a></li>
           <li><div class="divider"></div></li>
           <li><a href="contact1.php"><i class="material-icons left">email</i><b>contact</b></a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="black-text sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
    </div>
    <br><br><br>
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

    <script src="../js/materialize.min.js"></script>

    
</body>

</html>