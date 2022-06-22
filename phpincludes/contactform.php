<?php
    include_once("connect.php");    

    if(isset($_POST["submit"])){
        $sql = "INSERT INTO contact (naam, bericht, contactID) VALUES (:naam, :bericht, :contactID)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":naam", $_POST["naam"]);
        $stmt->bindParam(":bericht", $_POST["bericht"]);
        $stmt->bindParam(":contactID", $_POST["contactID"]);
        $stmt->execute();
    
        header("Location:../contact.php");
        exit();
    }

    else{    
        header("Location:../contact.php");
        exit();
    } 
    
?>