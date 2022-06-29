<?php
    include_once("connect.php");   
    if(isset($_GET["gebruikerID"]) && isset($_GET["reisID"])){
        $sql = "INSERT INTO boekingen (gebruikerID, reisID) VALUES (:gebruikerID, :reisID)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":gebruikerID", $_GET["gebruikerID"]);
        $stmt->bindParam(":reisID", $_GET["reisID"]);
        $stmt->execute();

            if(isset($_POST["car"]) && isset($_POST["hotel"])){
                $sql = "UPDATE boekingen SET  car = :car, hotel = :hotel";
        $stmt = $connect -> prepare($sql);
        $stmt->bindParam(":car", $_POST["car"]);
        $stmt->bindParam(":hotel", $_POST["hotel"]);
        $stmt ->execute();
            }
        header("Location:../vluchtboeken.php");
        exit();
    }

    else{    

        header("Location:../vluchtboeken.php");

        exit();
    } 
?>
    
