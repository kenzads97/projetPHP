<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>gestion des client</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 <style>
     .container{ 
         margin-left: 100px
     
               }
     .card{
         width: 1150px;
         }
    
    </style>
</head>
<body>
<?php require 'headeradmin.php';?>
    <div class="container "> <br><br>
      
         <div class="row ">
             <div class="col12 s2 m12 l8 ">
            
                <div class="card">
                    
                <div class="card-content">
                   
                     <table class="highlight" class="responsive-table">
        <thead>
          <tr>
              <th>id_client</th>
              <th>Nom</th>
              <th>Prenom</th>
               <th>Date_naiss</th>
               <th>permis</th>
               <th>passeport</th>
                <th>adresse</th>
               <th>telephone</th>
               <th>Email</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
            <?php 

             $bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
             $reponse = $bdd->query('SELECT * FROM client');

             while($donnees = $reponse->fetch()){
             ?>
          <tr>
            <td><?php echo $donnees['id_client'];?></td>
            <td><?php echo $donnees['nom'];?></td>
            <td><?php echo $donnees['prenom'];?></td>
              <td><?php echo $donnees['dnaiss'];?></td>
              <td><?php echo $donnees['nump'];?></td>
              <td><?php echo $donnees['numpass'];?></td>
              <td><?php echo $donnees['adresse'];?></td>
              <td><?php echo $donnees['telc'];?></td>
              <td><?php echo $donnees['email'];?></td>
             <?php 
             $id_client= $donnees['id_client'];
              ?>  
            <td>
                <table>
                    <td> <a href='deleteclient.php?id_client=<?php echo $id_client ?>'  onclick='return confirm("Etes vous sur de vouloir supprimer cette voiture?");' class='btn '>Supprimer</a></td>
                    <td>  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">visualiser</a></td>
                </table>
              </td>
                    
          </tr>
         <?php  } ?>

            
        </tbody>
      </table> 
                    
                    </div>
                </div>
            </div>
        </div>    
        
    </div>
           
      <?php 
          
                
            $bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
             $reponse = $bdd->query('SELECT * FROM client');

             while($donnees = $reponse->fetch()){
               ?>  
                
            <div id="modal1" class="modal">
            <div class="modal-content">
                <h3>Les information de client--<?php echo $donnees['login'];?>-- </h3>
                <div class="">
               <strong><?php echo'id_client:'?></strong><?php echo $donnees['id_client'];?><br><br>
                  <strong><?php echo'Nom:'?></strong><?php echo $donnees['nom'];?><br><br>
                 <strong><?php echo'Prenom:'?></strong><?php echo $donnees['prenom'];?><br><br>
                 <strong><?php echo'Date de naissance:'?></strong><?php echo $donnees['dnaiss'];?><br><br>
                 <strong><?php echo'adresse:'?></strong><?php echo $donnees['adresse'];?><br><br>
                 <strong><?php echo'Numéro de téléphone:'?></strong><?php echo $donnees['telc'];?><br><br>
                 <strong><?php echo'Email:'?></strong><?php echo $donnees['email'];?><br><br>
                 <strong><?php echo'Numéro du pérmis:'?></strong><?php echo $donnees['nump'];?><br><br>
                 <strong><?php echo'date délivration du permis:'?></strong><?php echo $donnees['ddp'];?><br><br>
                 <strong><?php echo'Numéro du passeport:'?></strong><?php echo $donnees['nump'];?><br><br>
            
                </div> 
           </div>
           <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div> 
    </div>
              
    
    
    
    
    
    
    
                <?php }?> 
                   
                 
                 
                 
     <!-- section :follow--><br><br><br>
     <?php require 'footeradmin.php';?> 
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
   
    </body>
</html>

