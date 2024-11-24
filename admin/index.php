<?php
session_start();
if (isset($_POST['connexion'])) { 

if (isset($_POST['login']) AND isset($_POST['pass']) AND !empty($_POST['login']) AND !empty($_POST['pass'])) {
	
		try
{
	$bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
     $login =htmlspecialchars ($_POST['login']);
    $pass =$_POST['pass'];

   
        


	$req = $bdd->prepare('SELECT login, pass FROM admin WHERE login = ? AND pass = ? ');
	$req->execute(array($login,$pass));
    $userexist = $req->rowCount();
    if( $userexist == 1){ 
	$userinfo = $req->fetch();
        $_SESSION['login'] = $userinfo['login'];
        header("location: admin.php?login=".$_SESSION['login']);
     }  else{ echo" <script type'text/javascript'>alert('Mauvais nom ou de mot de passe....');</script>"; }}
}
	?>

<html>
<link href="../css/materialize.min.css" type="text/css" rel="stylesheet"/>
<link href="../js/js/materialize.js" type="text/css" rel="stylesheet"/>
    <!-- add css style-->
    <style>
        body{
         /* background-image: url(../image/l.jpg);
            background-size: cover;*/
        }
        .login{
            margin-top: 50px;
        }
        .login .card{
           /* background: rgba(0,.2,.2,.6)*/
        }
        .login label{
            font-size: 16px;
            color:dimgray;
        }
        .login input{
            font-size: 20px !important;
            color:black;
        }
        .login button:hover{
            padding: 0px 40px;
        }
    </style>
    
 <!-- login form-->
    <div class="row login">
        
     <div class="col s12 l4 offset-l4">
         <div class="card">
         <div class="card-action center teal white-text">
             <h2>Se connecter</h2>
           
             </div>
        <form method="post" action="" class="card-content"> 
             <div class="form-field">
             <label for="username">Nom d'utilisateur </label>
            <input type="text" id="login" name="login" required>  
            </div><br>
            <div class="form-field">
             <label for="password">Mot de passe  </label>
            <input type="password" id="pass" name="pass" required>  
             </div><br>
            
           <div class="form-field">
          <p>
          <label>
            <input type="checkbox" />
            <span>m&eacute;moriser le mot de passe</span>
           </label>
            </p>
        
              </div><br>
               <div class="form-field center-align">
                  <a href="#"><button class="btn-large teal" name="connexion">connexion</button></a>
                   
             </div><br>
         
             </form>
          </div>
    </div> 
    </div>
    <!--  Scripts-->
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>






















</html>