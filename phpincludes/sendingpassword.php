<?php
    include_once("connect.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sql = "SELECT * FROM gebruikers WHERE username = :username AND forgotcode = :forgotcode";
        $stmt = $connect -> prepare ($sql);
        $stmt->bindParam (":username", $_POST["username"]);
        $stmt->bindParam (":forgotcode", $_POST["forgotcode"]);
        $stmt ->execute();
        $result = $stmt -> fetchAll();

        foreach($result as $res){
            if ($_POST["username"] == $res ["username"]){
                echo $res["password"];
        }
    }
}
      ?>