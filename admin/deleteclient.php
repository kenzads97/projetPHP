<?php
if(isset($_GET["id_client"]))
{
    $id_client = $_GET["id_client"];
    if(!empty($id_client)){
        $bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
        $query = "delete from client where id_client=$id_client";
        $bdd->exec($query);
        header("Location:listeclient.php");
   
    
}}

