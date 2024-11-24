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
              <th>Nom</th>
              <th>EMail</th>
              <th>Message</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
            <?php 

             $bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
             $reponse = $bdd->query('SELECT * FROM contact');

             while($donnees = $reponse->fetch()){
             ?>
          <tr>
            <td><?php echo $donnees['nom'];?></td>
            <td><?php echo $donnees['mail'];?></td>
            <td><?php echo $donnees['message'];?></td>
             <?php 
              $id= $donnees['id'];
              ?>  
            <td> <a href='deletemessage.php?id=<?php echo $id ?>'  onclick='return confirm("Etes vous sur de vouloir supprimer cette voiture?");' class='btn '>Supprimer</a>  </td>  
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
 

