<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


if (isset($_POST['ajouter'])) {  
 if (isset($_POST['mat']) AND isset($_POST['marq']) AND isset($_POST['modele']) AND isset($_POST['couleur']) AND isset($_POST['prix']) AND !empty($_POST['mat']) AND !empty($_POST['marq']) AND !empty($_POST['modele']) AND !empty($_POST['couleur']) AND !empty($_POST['prix'])) {
	if (isset($_FILES['image']) AND !empty($_FILES['image']['name'])) {
    	$extensionvalide = array('jpeg','jpg','png','gif');
		$taillemaxe = 2097152;
        $file_name = $_FILES['image']['name'];
		if ($_FILES['image']['size'] <= $taillemaxe ) {
		$extensionupload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
		
		if (in_array($extensionupload, $extensionvalide)) {
			
	

		$req= $bdd->prepare('SELECT * FROM voiture WHERE mat = ? ');
		$req->execute(array($_POST['mat']));
		$donner=$req->fetch();
		
		if (!$donner) {
				$image = $file_name;
        
			$req = $bdd->prepare('INSERT INTO voiture(mat,marq,modele,couleur,dispo,prix,image)VALUES(:mat,:marq,:modele,:couleur,:dispo,:prix,:image)');
			$req->execute(array(
				'mat'=> $_POST['mat'],
				'marq'=> $_POST['marq'],
                'modele'=> $_POST['modele'],
                'couleur'=> $_POST['couleur'],
                'dispo'=> $_POST['dispo'],
                'prix'=> $_POST['prix'],
                'image'=> $image

			));
		
					
					 


				    echo" <script type'text/javascript'>alert('votre vehicule a etait ajouter avec succes');</script>";

				 }else{echo" <script type'text/javascript'>alert('ce vehicule existe dans la base de donne');</script>";}



		 }else{echo" <script type'text/javascript'>alert('format non pris en charge');</script>";}



		 }else{echo" <script type'text/javascript'>alert('taille importante');</script>";}


		 }else{echo" <script type'text/javascript'>alert('selectioner un fichier');</script>";}

	
	 }else{echo" <script type'text/javascript'>alert('remplisser les champs');</script>";}


}

					
				


?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ajout voiture</title>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 <style>
       body{
         background-color:;
       }
    
     </style> 
</head>
<body>
 
    <div id="flayer">
          <div id="slayer">
    
    <div class="container" id="content">
        
       
        <div class="row">
          <div class="col l3 m3 s12"></div>
          <div class="col l6 m6 s12">
            <form action="ajout.php" method="POST" enctype="multipart/form-data">
                 <div class="card-panel z-depth-5">
                  <h4 class="center">Ajouter voiture</h4>
                   <div class="input-field">
                    <input type="text" name="mat" pattern="[0-9]{5}[ ]1[1][0-9][ ][0-4][1-8]*" maxlength="12" minlength="12" required>
                    <label for="mat">Matricule</label>
                  </div>
                  
                   <div class="input-field">
                    <input type="text" name="marq" class="validate"required pattern="[a-z,A-Z]*" >
                    <label for="marq">Marque</label>
                  </div>
                  
                   <div class="input-field">
                    <input type="text" name="modele"required pattern="[A-Za-z1-9 ]*">
                    <label for="modele">Modele</label>
                  </div>
                  
                    
                   <div class="input-field">
                    <input type="text" name="couleur"required pattern="[a-z,A-Z]*">
                    <label for="couleur">Couleur</label>
                  </div>
                     
                     
                     
                      <div class="input-field col2 s12">
                      <select name="dispo">
                      <option value="disponible">Disponible</option>
                      <option value="non disponible">Non disponible</option>
                      </select>
                      </div>

                      <div class="input-field">
                    <input type="text" name="prix"required pattern="[0-9]*">
                    <label for="prix">Prix</label>
                  </div> 
                     <div class="file-field input-field">
                     <div class="btn">
                         <span>image</span>
                         <input type="file" name="image">
                         </div>
                         <div class="file-path-wrapper">
                         <input class="file-path validate" type="text" >
                         </div>
 
                   </div>
                   
                  <input type="submit" name="ajouter" value="Ajouter" class="btn left col s12">
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
