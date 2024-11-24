<?php
session_start();
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>boite de reception</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 
</head>
<body>
<?php require 'headeradmin.php';?> 
    <div class="container"> <br><br>
        <div class="row">
        <!-- basic-->
            <div class="col12 s12 m4">
                <div class="card">
                <div class="card-content">
                   
                     <table class="highlight" class="responsive-table">
        <thead>
          <tr>
              <th>id_res</th>
              <th>id_client</th>
               <th>Matricule</th>
              <th>Date depart</th>
               <th>Heure depaet</th>
               <th>Date retour</th>
               <th>Heure retour</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
            <?php 

             $bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
             $reponse = $bdd->query('SELECT * FROM reservation');

             while($donnees = $reponse->fetch()){
             ?>
          <tr>
             
            <td><?php echo $donnees['id_res'];?></td>
            <td><?php echo $donnees['id_client'];?></td>
            <td><?php echo $donnees['mat'];?></td>
               <td><?php echo $donnees['dated'];?></td>
               <td><?php echo $donnees['heured'];?></td>
               <td><?php echo $donnees['dater'];?></td>
               <td><?php echo $donnees['heurer'];?></td>
             <?php 
              $id_res= $donnees['id_res'];
              ?>  
           
            <td> <a href='deletereservation.php?id_res=<?php echo $id_res ?>'  onclick='return confirm("Etes vous sur de vouloir supprimer cette reservation?");' class='btn '>Supprimer</a>  </td>  
          </tr>
         <?php  } ?>
        </tbody>
      </table>
            
                    
                    
                    
                    
                    
                    </div>
                </div>
            </div>
        </div>    
        
    </div><br><br><br><br><br><br><br><br><br>
   
     <!-- section :follow-->
   <?php require 'footeradmin.php';?> 
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
    </body>
</html>
 
