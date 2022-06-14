<?php

include_once ("connect.php");
if(isset($_POST["delete"])) {
        $sql = "DELETE FROM menukaart 
                WHERE id = :id";
        $stmt = $connect -> prepare($sql);
        $stmt -> bindParam(":id", $_POST["id"]);
        $stmt -> execute();

        header("Location: ../bestel.php");
        exit();
}
else {
    header("Location: ../admin.php");

}


?>