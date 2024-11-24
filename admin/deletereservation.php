<?php
if(isset($_GET["id_res"]))
{
    $id_res = $_GET["id_res"];
    if(!empty($id_res)){
        $bdd = new PDO('mysql:host=localhost;dbname=location;charset=utf8', 'root', '');
        $query = "delete from reservation where id_res=$id_res";
        $bdd->exec($query);
        header("Location:gerer resevation.php");
   
    
}}






















?>