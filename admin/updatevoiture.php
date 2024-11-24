<?php

$mat="";
$marq="";
$modele="";
$couleur="";
$dispo="";
$prix="";
$image="";
if(isset($_GET["mat"]))
{
    $mat= $_GET["mat"];
  if(!empty($mat) && is_numeric($mat)){    
      
      
    $bdd2 = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
    $query = "select * from voiture where mat=$mat";
   $result = $bdd2->query($query);
   $data = $result->fetchAll();
    $mat = $data[0]["mat"];
    $marq = $data[0]["marq"];
     $modele = $data[0]["modele"];
     $couleur = $data[0]["couleur"];
     $dispo = $data[0]["dispo"];
     $prix = $data[0]["prix"];
     $image = $data[0]["image"];
      
}
}

 if(isset($_POST['marq']) AND isset($_POST['modele']) AND isset($_POST['couleur'])AND isset($_POST['prix']) AND isset($_POST['image'])){
     echo'111111';
  $mat=$_POST["mat"];   
   $marq=$_POST["marq"]; 
      $modele=$_POST["modele"]; 
      $couleur=$_POST["couleur"]; 
      $dispo=$_POST["dispo"];
      $prix=$_POST["prix"]; 
      $image=$_POST["image"]; 
     if(!empty($mat)){   
      $bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
        $query ="update voiture set  marq='$marq', modele='$modele', couleur='$couleur', prix='$prix', image='$image' where mat=$mat";
         $bdd->exec( $query);
         header("Location:listevoiture.php");
     
     
     }
 };




?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>modifier voiture</title>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 <style>
     
    
     </style> 
</head>
<body>
 
    <div id="flayer">
          <div id="slayer">
    
    <div class="container" id="content">
        
       
        <div class="row">
          <div class="col l3 m3 s12"></div>
          <div class="col l6 m6 s12">
            <form action="#" method="POST">
                 <div class="card-panel z-depth-5">
                  <h4 class="center">modifier voiture</h4>
                   <div class="input-field">
                    <input type="hidden" name="mat" pattern="^[0-9\+\s\(\)]*$" maxlength="10" minlength="10" required value="<?php echo $mat  ?>">
                   
                  </div>
                  
                   <div class="input-field">
                    <input type="text" name="marq" class="validate"required value=" <?php echo $marq  ?>">
                    <label for="marq">Marque</label>
                  </div>
                  
                   <div class="input-field">
                    <input type="text" name="modele"required  value="<?php echo $modele ?>">
                    <label for="modele">Modele</label>
                  </div>
                  
                    
                   <div class="input-field">
                    <input type="text" name="couleur"required value="<?php echo $couleur ?>">
                    <label for="couleur">Couleur</label>
                  </div>
                     
                     
                     
                      <div class="input-field col2 s12">
                      <select name="dispo" value="<?php echo $dispo ?>">
                      <option value="disponible">Disponible</option>
                      <option value="non disponible">Non disponible</option>
                      </select>
                      </div>

                      <div class="input-field">
                    <input type="text" name="prix"required value="<?php echo $prix  ?>">
                    <label for="prix">Prix</label>
                  </div> 
                     <div class="file-field input-field">
                     <div class="btn">
                         <span>image</span>
                         <input type="file" name="image" value="<?php echo $image ?>" >
                         </div>
                         <div class="file-path-wrapper">
                         <input class="file-path validate" type="text" name="image" value="<?php echo $image ?>">
                         </div>
 
                   </div>
                   
                     <input type="submit" name="modifier" value="modifier" class="btn left col s12">
                          <div class="clearfix"></div>
                  </div>
                  
            </form>
            
          </div>
          
      
        
          
        </div>
    </div>
     </div>
          </div>
     
     
               
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
     <script>
    $(document).ready(function(){
    $('select').formSelect();
  });
        
    </script>

  </body>
</html>
