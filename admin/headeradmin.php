
     <div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo logo"><img class="responsive-img" src='../image/logo8.PNG' alt='logo'></a>
      <ul class="right hide-on-med-and-down">
          <li><a class='dropdown-trigger' href="#" data-target='dropdown1' ><b>gestion voiture<i class="material-icons right ">arrow_drop_down</i></b></a>
               <ul id='dropdown1' class='dropdown-content'>   
                   <li><a href="ajout.php" ><b>ajouter voiture</b></a></li>  
                    <li><a href='listevoiture.php?login=<?php echo $_SESSION['login'] ?> ' ><b>supprimer/modifier voiture</b></a></li>
                 
              </ul></li>
           <li><a   href='listeclient.php?login=<?php echo $_SESSION['login'] ?>' ><b>gestion locataire</b></a>
            </li>
           <li><a href="gerer%20resevation.php"><b>gérer reservation</b></a></li>
          <li><a href='boitedereception.php?login=<?php echo $_SESSION['login'] ?>' ><b>boite de reception</b></a></li>
          <li><a href="#nos voiture"><b> nos voitures</b></a></li>
          <li><a class='dropdown-trigger' href='admin.php?login=<?php echo $_SESSION['login'] ?>' data-target='dropdown3'><?php echo $_SESSION['login'] ?><i class="material-icons right ">arrow_drop_down</i></a>
                  <ul id='dropdown3' class='dropdown-content'>    
                  <li><a href="modifiermotdepasseadmin.php"><b>Mdifier mot de passe</b></a></li>  
                  <li><a href="deconnectionadmin.php"><b>Déconnexion</b></a></li>
             </ul></li>
    
    </ul>

      <ul id="nav-mobile" class="sidenav" data-target='dropdown3'>
          <li><a class='dropdown-trigger' href="#" data-target='dropdown'>gestion voiture</a>
          <ul id='dropdown' class='dropdown-content'>
               <li><a href="ajout.php">ajouter voiture</a>
               <li><a href="listevoiture.php">supprimer/modifier voiture</a>   
              
              </ul></li>
         
          <li><a  href="listeclient.php"  >gestion locataire</a>
             
          </li>
          
        <li><a href="gerer%20resevation.php"><b>gérer reservation</b></a></li>
          <li><a href='boitedereception.php?login=<?php echo $_SESSION['login'] ?>'><b>boite de reception</b></a></li>
          <li><a href="#"><b> nos voitures</b></a></li>
          <li><a href="deconnectionadmin.php" style="color:teal">deconnexion</a></li>
    
      </ul>
      <a href="#" data-target="nav-mobile" class="black-text sidenav-trigger"><i class="material-icons">menu</i></a>
   </div>
            
      
    </nav>
    </div>