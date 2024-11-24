<?php
session_start();
if(isset($_GET["mat"]))
{
    $mat = $_GET["mat"];
  
    if(!empty($mat)){
          $bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
        if (isset($_POST['res'])) { 
     if (isset($_POST['dated']) AND isset($_POST['heured']) AND isset($_POST['dater']) AND isset($_POST['heurer']) AND !empty($_POST['dated']) AND !empty($_POST['heured']) AND !empty($_POST['dater']) AND !empty($_POST['heurer'])) {
         
       
          $dated=$_POST['dated'];
          $dater=$_POST['dater'];
          $daten=$date=date('y-m-d'); 
          $id_client=$_SESSION['id_client'];
         $result=$bdd->prepare('SELECT * FROM reservation WHERE (mat="'.$mat.'") AND(
      (DATE("'.$dated.'") <= DATE(dated) AND DATE("'.$dater.'") >= DATE(dater)) or 
      (DATE("'.$dated.'") >= DATE(dated) AND DATE("'.$dater.'") <= DATE(dater)) or 
      (DATE("'.$dated.'") <= DATE(dated) AND DATE("'.$dater.'") >= DATE(dated)) or
      (DATE("'.$dated.'") >= DATE(dated) AND DATE("'.$dated.'") <= DATE(dated) AND DATE("'.$dater.'") >= DATE(dater)))');
      $result->execute();
      $data=$result->fetchAll();
if (strtotime (date($dater)) - strtotime (date($dated)) <0){

  echo" <script type'text/javascript'>alert('veuillez choisir une date correcte ') ;</script>";
 
      }
else if (strtotime(date($dated)) - strtotime ($daten)<0) {
  
  echo" <script type'text/javascript'>alert('veuillez choisir une date correcte ') ;</script>";
    }
else if(count($data)==0){
     $req = $bdd->prepare('INSERT INTO  reservation(id_res,id_client,mat,dated,heured,dater,heurer)VALUES(NULL,:id_client,:mat,:dated,:heured,:dater,:heurer)');
			$req->execute(array(
				'id_client'=>$id_client,
				'mat'=>$mat,
                'dated'=> $_POST['dated'],
                'heured'=> $_POST['heured'],
                'dater'=> $_POST['dater'],
                'heurer'=> $_POST['heurer']
            
			));
         
   echo" <script type'text/javascript'>alert('votre réservation a bien été enregistrée ') ;</script>";
     }else{echo" <script type'text/javascript'>alert('Date de reservation déja choisie ! veuillez choisire une autre date');</script>";}
      }else{echo" <script type'text/javascript'>alert('veullez remplire les shamp');</script>";}
       }
        }
         }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Reserver voiture</title>

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
        }
    
    </style>
    </head>
    <body>
        <?phh
       $d=NOW();?>
      <section class="section">
           <div style="text-align:center">
          <header style="font-family:initial;font-weight:bold;font-style:italic">
          <h4>RESERVER UNE VOITURE</h4>
          </header>
        </div>
 
    <div class="container">
        <div class="row">
          <div class="col4 l8 m3 s12">
               <div class="card">
              <div class="card-content">
               <div class="pa221 "style="width:100%;margin-top:5%">
              <div class="row" >
         <form class="col s12" method="post" action="#">
                <div class="row">
                  <div class="input-field col s6">
                     <i class="material-icons prefix">date_range</i>
                    <input id="date" type="date"  name="dated" required min=>
                    <label for="date">Date de depart</label>
                  </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix">access_alarm</i>
                    <input id="time" type="text" class="timepicker" name="heured" required>
                    <label for="time">Heure de depart</label>
                  </div>
                </div>
         
    
                <div class="row">
                  <div class="input-field col s6">
                     <i class="material-icons prefix">date_range</i>
                    <input id="date2" type="date"  name="dater" required>
                    <label for="date2">Date retour</label>
                  </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix">access_alarm</i>
                    <input id="time2" type="text" class="timepicker" name="heurer" required>
                    <label for="time2">Heure retour</label>
                  </div>
                </div>
          
        
             <div class="input-field ">
          <p>
            <label for="age">
             <input id="age" type="checkbox" class="filled-in" required>
            <span>j'ai lu et j'accepte les condition </span>
          </label>
          </p>
          <div style="margin-left:50%;margin-top:5%">
          <button class="btn waves-effect waves-light"  name="res">Réserver</button>
        </div>
      </div>          
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
<script src="js/init.js"></script>
<script>
  const Calender =document.querySelector('.datepicker');
  M.Datepicker.init(Calender,{
    format:'dd/mmmm/yyyy',
    i18n:{
     
      default:'now',
      done:'ok',
      cancel:'ANNULER',
    }
   });
  
   
    const elems = document.querySelectorAll('.timepicker');
     M.Timepicker.init(elems,{
      i18n:{ 
        default:'now',
        done:'ok',
        cancel:'ANNULER',
       
       } 
    
    });{}
 
  $(document).ready(function(){
    $('select').formSelect();
  });
        

</script> 
    
    
    
    
    
    
    
    
    </body>
</html>