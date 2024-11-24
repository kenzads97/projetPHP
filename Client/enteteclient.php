  <!-- barre de menu    -->
    <nav class="white" role="navigation">
      <div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo logo"><img class="responsive-img" src='../image/logo8.PNG' alt='logo'></a>
        
    <ul class="right hide-on-med-and-down">
          
          <li><a href="#" style=" border-bottom: 5px solid #2bbbad;background-color: transparent;"><b> Catalogue de voitures</b></a></li>
          <li><a href="#"><b> Mes réservations</b></a></li>
          <li><a href="conditions%20de%20r%C3%A9servations.html"><b>Conditions  </b></a></li>
          <li><a href="#"><b>Contacter l'agence</b></a></li>
          <li><a class='dropdown-trigger' href="#" data-target='dropdown3'><b> <?php echo $_SESSION['login'] ?></b><i class="material-icons right ">arrow_drop_down</i> </a>
               <ul id='dropdown3' class='dropdown-content'>    
                  <li><a href="#"><b>Modifier mot de passe</b></a></li>  
                  <li><a href="#"><b>Déconnexion</b></a></li>
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