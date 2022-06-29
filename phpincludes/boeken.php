<?php
    include_once("connect.php");

    var_dump($_POST);

    if(!isset($_POST['boeken'])) {
        header("Location: ../vluchtboeken.php");
    }

    $sql = "INSERT INTO boekingen (gebruikerID, reisID, car, hotel) VALUES (:gebruikerID, :reisID, :car, :hotel)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":gebruikerID", $_POST["gebruikerID"]);
    $stmt->bindParam(":reisID", $_POST["reisID"]);
    $stmt->bindParam(":car", $_POST["car"]);
    $stmt->bindParam(":hotel", $_POST["hotel"]);
    $stmt->execute();

    header("Location: ../vluchtboeken.php");
?>
    
