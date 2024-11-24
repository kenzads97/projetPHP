<?php
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    if(!empty($id)){
        $bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
        $query = "delete from contact where id=$id";
        $bdd->exec($query);
        header("Location:boitedereception.php");
   
    
}}






















?>