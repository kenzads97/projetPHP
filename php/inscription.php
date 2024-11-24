<?php
session_start();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if(isset($_POST['inscrire'])) { 
    /*echo'eee';*/
if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['dnaiss']) AND isset($_POST['adresse']) AND isset($_POST['telc']) AND isset($_POST['email']) AND isset($_POST['nump'])AND isset($_POST['ddp'])AND isset($_POST['numpass'])AND isset($_POST['login'])AND isset($_POST['pass'])AND isset($_POST['cpass']) AND !empty($_POST['nom']) AND  !empty($_POST['prenom']) AND !empty($_POST['dnaiss']) AND !empty($_POST['adresse']) AND !empty($_POST['telc']) AND  !empty($_POST['email']) AND !empty($_POST['nump']) AND !empty($_POST['ddp']) AND !empty($_POST['numpass']) AND !empty($_POST['login'])AND !empty($_POST['pass'])AND !empty($_POST['cpass'])){
    
/* echo'hello';*/
 // Je mets aussi certaines sécurités ici…
$login = $_POST['login'];   
$passe = mysql_real_escape_string(htmlspecialchars($_POST['pass']));
$passe2 = mysql_real_escape_string(htmlspecialchars($_POST['cpass']));
//mot de passe 			
 if($passe == $passe2)
    {
   /*echo'mm mdp';*/
//plus de 25 ans    
    $date_naissance = $_POST['dnaiss']; 
    $annow=date('Y'); 
    $moisnow=date('m'); 
    $journow=date('d'); 
    list($annais,$moisnais,$journais)=explode('-',$date_naissance); 
     $age = $annow-$annais; 
     if ($moisnow<$moisnais) { $age=$age-1; } 
     if ($journow<$journais && $moisjour==$moisnais){$age=$age-1;} 
    /* echo $age;*/
    if($age>=25){
        /*echo'ccc';*/
// le permis plus de 2 ans    
   $d1 = new DateTime($_POST['ddp']);
   $d2 = new DateTime("now");
    $diff = $d1->diff($d2); 
    $nb_jours = $diff->days;  
    $ddp=$nb_jours /30;
    $ddp2=$ddp/12;
    if( $ddp2>2){
 
        $req= $bdd->prepare('SELECT * FROM client WHERE login = ? ');
		$req->execute(array($_POST['login']));
		$donner=$req->fetch();
		
		if (!$donner) {
            
        $req = $bdd->prepare('INSERT INTO client(nom,prenom,dnaiss,adresse,telc,email,nump,ddp,numpass,login,pass) VALUES(:nom,:prenom,:dnaiss, :adresse, :telc, :email, :nump,:ddp,:numpass,:login,:pass)');
        $req->execute(array(
				'nom'=> $_POST['nom'],
				'prenom'=> $_POST['prenom'],
                'dnaiss'=> $_POST['dnaiss'],
                'adresse'=> $_POST['adresse'],
                'telc'=> $_POST['telc'],
                'email'=> $_POST['email'],
                'nump'=> $_POST['nump'],
                'ddp'=> $_POST['ddp'],
                'numpass'=> $_POST['numpass'],
                'login'=> $_POST['login'],
                 'pass'=> $_POST['pass'] ));
            $req = $bdd->prepare('SELECT id_client,login, pass FROM client WHERE login = ? AND pass = ? ');
	        $req->execute(array($login,$pass));
            $userinfo = $req->fetch();
            $_SESSION['login'] = $userinfo['login'];
           $_SESSION['id_client'] = $userinfo['id_client'];
            header("location: ../client/espace client.php");
        exit();
               
        
                
            
                }else{echo" <script type'text/javascript'>alert('pseudo non disponible');</script>";}     

        
           }else{echo" <script type'text/javascript'>alert('desolé mais votre permis doit avoir plus de deux ans');</script>";}     

      }else{echo" <script type'text/javascript'>alert('vous devez avoir plus de 25 ans…');</script>";} 
    
 
     }else{echo" <script type'text/javascript'>alert('Les deux mots de passe que vous avez rentrés ne correspondent pas…');</script>";}
    
}else{echo" <script type'text/javascript'>alert('Tout les champs doivent etre remplis');</script>";}
}
?>







<!doctype html>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title></title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 <style>
    .login button:hover{
            padding: 0px 40px;
        }
    </style>
</head>
<body>


   <div class="row login">
     <div class="col s12 m8 offset-l2">
         <div class="card">
        <div class="card-action center teal white-text">
             <h4>Formulaire d'inscription </h4>
           
             </div>
        <div class="card-content"> 
        <form class="row" action="inscription.php" method="POST">
        <div class="input-field col s6">
          <input id="nom" type="text" class="validate" name="nom" required pattern="[a-z,A-Z]*"  >
          <label for="nom">Nom</label>
        </div>
       
        <div class="input-field col s6">
          <input id="prenom" type="text" class="validate" name="prenom" required pattern="[a-z,A-Z]*" >
          <label for="prenom">Prenom</label>
        </div>
     
     <div class="input-field col s6">
          <input id="dnaiss" type="date" class="validate" name="dnaiss" required>
          <label for="dnaiss">Date de naissance</label>
        </div>
       <div class="input-field col s6">
          <input id="adresse" type="text" class="validate" name="adresse" required>
          <label for="adresse">Adresse</label>
        </div>
         <div class="input-field col s6">
             <input id="tel" type="text" class="validate" name="telc" required pattern="^(?:0|\(?\+213\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$">
             <label for="tel">Numero de telephone</label>
         
        </div>        
    <div class="input-field col s6">
           <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Email</label>
        </div>    
         <div class="input-field col s6">
          <input id="nump" type="text" class="validate" name="nump" required  pattern="^[0-9]*" >
          <label for="nup">N° permis</label>
             
          
        </div>   
        <div class="input-field col s6">
            <input id="ddp" type="date" class="validate" name="ddp" required>
          <label for="ddp">Date delivrement du permis</label>
        </div>        
         <div class="input-field col s6">
          <input id="numpass" type="text" class="validate" name="numpass" required pattern="^[0-9]*">
          <label for="numpass">N° passeport</label>
        </div>        
        <div class="input-field col s6">
          <input id="identif" type="text" class="validate" name="login" required pattern="[a-zA-Z][a-z1-9]*" minlength="5">
          <label for="identif">Identifiant</label>
        </div> 
          <div class="input-field col s6">
          <input id="mdp" type="password" class="validate" name="pass" required  pattern="[A-Za-z1-9]*" minlength="6" >
          <label for="mdp">Mot de passe</label>
        </div>        
       
             <div class="input-field col s6">
          <input id="cpass" type="password" class="validate" name="cpass" required  pattern="[A-Za-z1-9]*" minlength="6" >
          <label for="cpass">Confirmer votre mot de passe</label>
          </div> <br>
         <div class="form-field center-align">
             <a href="inscription.php"> <button class="btn-large teal" name="inscrire">s'inscrire</button></a>
         </div>
            </form>
             </div>
         </div>
       </div>
    </div>
 <!--  Scripts-->
 <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
    
      </body>
</html> 
