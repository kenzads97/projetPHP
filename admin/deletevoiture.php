<?php
if(isset($_GET["mat"]))
{
    $mat = $_GET["mat"];
    if(!empty($mat)){
        $bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
        $query = "delete from voiture where mat=$mat";
        $bdd->exec($query);
        header("Location:listevoiture.php");
   
    
}}






















?>