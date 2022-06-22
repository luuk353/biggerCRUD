<?php
    include_once("connect.php");    

    if(isset($_GET["gebruikerID"]) && isset($_GET["reisID"])){
        $sql = "INSERT INTO boekingen (gebruikerID, reisID) VALUES (:gebruikerID, :reisID)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":gebruikerID", $_GET["gebruikerID"]);
        $stmt->bindParam(":reisID", $_GET["reisID"]);
        $stmt->execute();
    
        header("Location:../vluchtboeken.php");
        exit();
    }

    else{    
        header("Location:../vluchtboeken.php");
        exit();
    } 
    
?>