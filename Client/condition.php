<?php
session_start();
 
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Espace client</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 <style>
    
    
    
    </style>
</head>
    <body>
 <nav class="white" role="navigation">
      <div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo logo"><img class="responsive-img" src='../image/logo8.PNG' alt='logo'></a>
        
    <ul class="right hide-on-med-and-down">
          
          <li><a href="../Client/espace%20client.php"><b> Catalogue de voitures</b></a></li>
          <li><a href="mes%20reservation.php"><b> Mes réservations</b></a></li>
          <li><a href="condition.php"style=" border-bottom: 5px solid #2bbbad;background-color: transparent;"><b>Conditions  </b></a></li>
          <li><a href="contactclient.php"><b>Contacter l'agence</b></a></li>
          <li><a class='dropdown-trigger'href='espace%20client.php?login=<?php echo $_SESSION['login'] ?>' data-target='dropdown3'> <?php echo $_SESSION['login'] ?><i class="material-icons right ">arrow_drop_down</i> </a>
               <ul id='dropdown3' class='dropdown-content'>    
                  <li><a href="modifiermotdepasse.php"><b>Modifier mot de passe</b></a></li>  
                  <li><a href="deconnectionclient.php"><b>Déconnexion</b></a></li>
             </ul></li>
     </ul>
          
          <!-- menu pour mobile   -->

      <ul id="nav-mobile" class="sidenav" >
          
          <li><a href="#"><b> Catalogue de voitures</b></a></li>
          <li><a href="#"><b> Mes réservations</b></a></li>
          <li><a href="conditions%20de%20r%C3%A9servations.html"><b>Conditions de réservation </b></a></li>
          <li><a href="#"><b>Contacter l'agence</b></a></li>
          <li><a href="#"><b>Modifier mot de passe</b></a></li>
          <li><a href="#" style="color:teal">Déconnexion</a></li>
    
      </ul>
      <a href="#" data-target="nav-mobile" class="black-text sidenav-trigger"><i class="material-icons">menu</i></a>
   </div>
  </nav> 
    
   <!--conditions-->
   
           <h4  style="text-align:center;font-weight:bold"> CONDITIONS GENERALES</h4>
    <div class="row">
    <div class="col s6 ">
        <p class="container "><strong style="text-decoration:underline;font-weight:bold">1-Principe :</strong> <br/> la prise en charge de nos véhicules implique l'acceptation sans réserves de nos conditions générales.<br/>
 <strong style="text-decoration:underline;font-weight:bold">2- Conditions de location </strong><br/>
      <strong style=" font-weight:bold">2-1 Age requis:</strong>
    pour tous les véhicules,l'age minimum du/des conducteur(s) est de 25 ans.<br/>
    <strong style="font-weight:bold">2-2 validite du permis de conduire </strong>
le conducteur du véhicule loué doit être en possession d'un permis de conduire en cours de validité et délivré depuis au moins 2ans.<br/>
<strong style="font-weight:bold">2-3 un passeport à votre nom en cours de validité.</strong><br/>
<strong style="font-weight:bold">2-4 Dépôt de garantie : </strong> une caution suivant la catégorie du véhicule est déposée lors de la signature du contrat de location.Elle sera restituée sauf sinistre à la fin du contrat<br/>
<strong style="font-weight:bold">2-5 Paiement :</strong> Toute location est payable d'avance. <br/>
<strong style="font-weight:bold">2-6 Forfaits:</strong> le locataire dispose d'un forfait de 300km/jour, chaque kilométre supplémentaire lui sera facture à 15DA.<br/>

<strong style="text-decoration:underline;font-weight:bold">3- Etat de véhicule :</strong><br/>
Le véhicule est délivré au locataire en parfait état de marche .Il fait l'objet au départ d'un descriptif signé par les deux parties.Il devra être restitue dans le même état,a défaut le locataire devra s'acquitter des frais de remise en état de vehicule.<br/>
        
<strong style="text-decoration:underline;font-weight:bold">- 4-Reponsabilité :</strong><br/>
 -Du locataire :le locataire demeure seul responsable des amendes contraventions et procés verbaux établis contre lui.<br/>
- Du loueur : la responsabilité du loueur ne peut être engagé au-delà de la couverture fournie par l'assureance.<br/>
        
<strong style="text-decoration:underline;font-weight:bold">5- Durée de location :</strong><br/>
la période minimal de location est de 24 heures. La durée fixée au contrat est ferme et non révisable.En cas de restitution anticipe de véhicule,aucun remboursement ne sera effectue.<br/>

<strong style="text-decoration:underline;font-weight:bold">6- Restitution du véhicule </strong><br/>
            Le locataire est tenu de restituer le véhicule à la date et au lieu prévu au contrat.La restitution doit intervenir pendant l'heure d'ouverture de l'agence.  En cas de non restitution dans les délais impartis, le loueur se réserve le droit d'entreprendre toutes les démarches nécessaires pour réserver ses intérêts.</p><br/> </div>
 <div class="col s6 ">
<p> <strong style="text-decoration:underline;font-weight:bold">7- Prorogation de la durée de location :</strong><br/>
 La prorogation du contrat n’est possible qu’avec le consentement du loueur.la demande doit être formuler 48 avant la fin du contrat de location en cours et après paiement des frais correspondants à la durée sollicitée.<br/>

<strong style="text-decoration:underline;font-weight:bold">8- Réservation / annulation : </strong><br/>
Pour toutes réservations, un acompte de 30% de cout de location est exigé. En cas d’annulation notifiée, plus de 48 heure avant le départ, le montant de l’acompte sera remboursé déduction faites des frais de dossier, passé ce délai l’acompte ne sera pas restitué <br/>

 <strong style="text-decoration:underline;font-weight:bold">9- Carburant/lubrifiant :</strong><br/>
Le véhicule est livré avec le plein de carburant et doit être restitué avec le plein de carburant. Tout manquement à cette règle, le locataire fera une facturation selon les tarifs .Le locataire doit vérifier en permanence le niveau d’huile et d’eau.<br/>

<strong style="text-decoration:underline;font-weight:bold">10-Assurances :</strong><br/>
<strong style="font-weight:bold">10-1 Type d'assurance:</strong> nos véhicules sont couvert par une assurance dommage collusion et brise glace valable seulement en Algérie. L'assurance ne couvre pas les conducteurs en état d'ivresse.Tout sinistre non remboursé par les assurances sera facturé au locataire.<br/>
<strong style="font-weight:bold">10-2 Bénéficiaire:</strong>seuls les conducteurs autorisés peuvent se prévaloir de la qualité d'assuré.<br/>
<strong style="font-weight:bold">10-3 Déclaration  :</strong>sous peine d'être déchu du bénéfice de l'assurance, le locataire s'engage à déclarer dans les 24h à l'agence et aux autorités de police tout accident , vol ou incendie même partiel.<br/>
<strong style="font-weight:bold">10-4 :</strong> l'agence décline toute responsabilité pour les accidents causés aux tiers ou dégâts au véhicule que le locataire pourrait causer pendant la période de location si ce dernier a délabrement fournis de fausses informations à l'agence.<br/>
<strong style="font-weight:bold">10-5 Vols/Accidents :</strong>en cas de vol , une poursuite judiciaire est entamées et les frais de la procédure ainsi que le manque à gagner sont à la charge du locataire .<br/>
Si le locataire est responsable d'un accident au cours duquel le véhicule est endommagé ou immobilisé , les frais de réparations ou d'immobilisations sont à sa charge .<br/>
Dans les deux cas , l'agence se réserve le droit de mettre fin au contrat de location sans remboursement compensation.<br/>
<strong style="text-decoration:underline;font-weight:bold">11- Droit applicable/juridiction compétente:</strong><br/>
    Le présent contrat est régi par le droit algérien la juridiction compétente et le tribunal de commerce de TIZI OUZOU .</p> <br/>
    
    </div>
        </div> 
    
    <!-- section :follow-->
    
 <?php require 'queuclient.php';?> 
  
  <!--  Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
    </body>
</html>
 