<?php
    include_once("connect.php");    

    if(isset($_POST["submit"])){
        $sql = "INSERT INTO recensies (gebruiker, bericht, sterren) VALUES (:gebruiker, :bericht, :sterren)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":gebruiker", $_POST["gebruiker"]);
        $stmt->bindParam(":bericht", $_POST["bericht"]);
        $stmt->bindParam(":sterren", $_POST["sterren"]);
        $stmt->execute();
    
        header("Location:../contact.php");
        exit();
    }

    else{    
        header("Location:../contact.php");
        exit();
    } 
    
?>