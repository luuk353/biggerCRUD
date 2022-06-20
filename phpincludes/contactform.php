<?php
    include_once("connect.php");    

    if(isset($_POST["submit"])){
        $sql = "INSERT INTO contact (naam, bericht, email) VALUES (:naam, :bericht, :email)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":naam", $_POST["naam"]);
        $stmt->bindParam(":bericht", $_POST["bericht"]);
        $stmt->bindParam(":email", $_POST["email"]);
        $stmt->execute();
    
        header("Location:../contact.php");
        exit();
    }

    else{    
        header("Location:../contact.php");
        exit();
    } 
    
?>