<?php
session_start();
 $bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
if(isset($_POST['confirme'])){ 
 if (isset($_POST['encien']) AND isset($_POST['nouveau']) AND isset($_POST['connouveau']) AND !empty($_POST['encien']) AND !empty($_POST['nouveau']) AND !empty($_POST['connouveau'])) {
     $login=$_SESSION['login'];
     $ancien = $_POST['encien'];
     $passe = $_POST['nouveau'];
     $passe2 = $_POST['connouveau']; 			
 if($passe == $passe2)
    {
     $req= $bdd->prepare('SELECT pass FROM admin WHERE login = ? ');
     $req->execute(array($login));
		$donner=$req->fetch();
	   if ($donner) { 
          if( $donner['pass']==$ancien){ 
      $req = ("UPDATE admin SET pass = $passe2 WHERE login= '$login'");
       $bdd->exec( $req);
    
              echo" <script type'text/javascript'>alert('la mise a jour de votre mot de mot de passe c dérouler avec succé');</script>";
          }else{echo" <script type'text/javascript'>alert('le mot de passe que vous avez entrée n existe pas');</script>";}
         }
        }else{echo" <script type'text/javascript'>alert('Les deux mots de passe que vous avez rentrés ne correspondent pas…');</script>";}
     }else{echo" <script type'text/javascript'>alert('veuiller remplire les shamps');</script>";}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Modifier mot de passe</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
         .container{ 
         margin-left: 400px
     
               }
        .card{
            width: 550px;
            height: 330px;
        }
    
    </style>
    </head>
    <body>
         <section class="section">
           <div style="text-align:center">
          <header style="font-family:initial;font-weight:bold;font-style:italic">
          <h4>MODIFIER MOT DE PASSE</h4>
          </header>
        </div>

      <div class="container">
        <div class="row">
          <div class="">
               <div class="card">
              <div class="card-content">
               <div class="pa221 "style="width:100%;margin-top:5%">
              <div class="row" >
           <form method="post" action="#">
        
              <div class="input_field">
                   <label for="encien">Mot de passe actuel</label>
              <input type="password" name="encien" id="encien">
             
              </div>
              <div class="input_field">
               <label for="nouveau">Nouveau mot de passe</label>
              <input type="password" name="nouveau" id="nouveau">
              
              </div>
              <div class="input_field">
               <label for="connouveau">confirmation du nouveux mot de passe</label>
              <input type="password" name="connouveau" id="connouveau">
              </div>
              <input type="submit" name="confirme" value="confirmer" class="btn right">
              <div class="clearfix"></div>
          </form>
                   </div>
               </div>
            </div>
          </div>
      </div>
    </div>
</div>
         
        </section>
             
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
    </body>
</html>