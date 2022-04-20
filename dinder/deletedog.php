<?php 
    session_start();
    include "pdo.php";

    if(!isset($_SESSION["ID"]) && $_SESSION["STATUS"] != "ACTIEF"){
        echo "geen toegang";
    }else{

        include("header.php");
        }
        
        $query = $pdo->prepare("DELETE * FROM dogs WHERE ID = :id");
        $query->bindParam(":id", $_POST["id"]);
        $query->execute();
        header("location: dogs.php");
        
?>