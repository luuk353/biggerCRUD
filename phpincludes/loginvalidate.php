<?php
    session_start();
    include_once("connect.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql = "SELECT * FROM gebruikers WHERE username = :username";
        $stmt = $connect -> prepare($sql);
        $stmt -> bindParam(":username", $_POST["username"]);
        $stmt -> execute();
        $result = $stmt -> fetchAll();

        foreach($result as $res)  { 
            if($_POST["password"] == $res["password"]) {
                $_SESSION['gebruikerID'] = $res['gebruikerID'];
                $_SESSION["admin"] = $res["admin"];
                break;
            }
        }
    }
    if(isset($_SESSION["admin"]) && $_SESSION["admin"] == '1') {
        header("Location: ../admin.php");
    } elseif (isset($_SESSION["admin"]) && $_SESSION["admin"] == '0') 
    {
        echo '<script> window.location.href ="../index.php";</script>';
    }
    
        ?>