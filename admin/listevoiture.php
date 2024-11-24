
<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>ajouter/supprimer voiture</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 
</head>
<body>
<?php require 'headeradmin.php';?>
         <!-- section: Nos voiture   -->
    <section>
      <div class="container">
     <div class="icon-block">
     <h4 class="center">Supprimer ou Modifier voiture:</h4>
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
               <strong><?php echo'matricule:'?></strong><?php echo $donnees['mat'];?><br>
             <strong><?php echo'Marque:'?></strong><?php echo $donnees['marq'];?><br>
            <strong><?php echo'Prix:'?></strong><?php echo $donnees['prix'];?><?php echo'DA'?><br>
  
            </p>
        </div>
        <div class="card-action">
           
                
                    <a href='deletevoiture.php?mat=<?php echo $mat ?>' onclick='return confirm("Etes vous sur de vouloir supprimer cette voiture?");' class='btn btn-danger '>Supprimer</a>
                     <a href='updatevoiture.php?mat=<?php echo $mat ?>' class="btn btn-warning right" >modifier</a>
            
        </div>
      </div>
    </div>

                  
<?php

} ?>
</div> 
    </div>
</section>    
    <?php require 'footeradmin.php';?> 
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

    </body>
</html>

