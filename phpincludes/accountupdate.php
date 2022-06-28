
<?php
include_once("connect.php");

        if(isset($_POST["edit"])){  
                $sql = "UPDATE gebruikers 
                    SET username = :username, password = :password, forgotcode = :forgotcode
                    WHERE gebruikerID = :gebruikerID";
                    $stmt = $connect->prepare($sql);
                    $stmt->bindParam(":gebruikerID", $_POST["gebruikerID"]);
                    $stmt->bindParam(":username", $_POST["username"]);
                    $stmt->bindParam(":password", $_POST["password"]);
                    $stmt->bindParam(":forgotcode", $_POST["forgotcode"]);
                    $stmt->execute();
                    header("location: ../admin.php");
                    exit();
                }
                
                ?>