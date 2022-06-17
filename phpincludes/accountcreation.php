<?php
    include_once("connect.php");    

    if(isset($_POST["submit"])){
        $sql = "INSERT INTO gebruikers (gebruikerID, username, password, forgotcode) VALUES (:gebruikerID, :username, :password, :forgotcode)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":gebruikerID", $_POST["gebruikerID"]);
        $stmt->bindParam(":username", $_POST["username"]);
        $stmt->bindParam(":password", $_POST["password"]);
        $stmt->bindParam(":forgotcode", $_POST["forgotcode"]);
        // $stmt->bindParam(":admin", $_POST["admin"]); // ADMIN BLIJFT GECOMMENT ZODAT DE WAARDE AUTOMATISCH NUL IS
        $stmt->execute();
    
        header("Location:../login.php");

        exit();
    }

    else{    
        header("Location:../register.php");
        exit();
    } 
    
?>