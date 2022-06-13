<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<header>
<?php
include_once ("phpincludes/connect.php");
session_start();
// if(!$_SESSION["gebruikers"] == 'admin') {
//     header("Location:admin.php");
// }
?>
</header>
<a href = "login.php"> inloggen </a>
<a href = "contact.php"> contacten </a>
<a href = "index.php"> indexen</a>
<a href = "overons.php"> overonsen </a>
    <main id ="admin-main">
        <div class="admin-powers">
            <form action="php/create.php" method="post" id="admin-add">
                <P>vul hier de naam in van wat je wilt toevoegen </P><br>
                <input type="text" name="titel" placeholder="titel"><br>
                <p>vul de prijs in</p><br>
                <input type="text" name="prijs" placeholder="prijs"><br>
                <p>geef een beschrijving</p><br>
                <input type="text" name="beschrijving" placeholder="beschrijving"><br>
                <input type="submit" name="submit" placeholder="submit"><br>
            </form>
            <form action="php/update.php" method="post" id="admin-update">
                <p>vul hier het ID in van wat je wilt aanpassen</p>
                <input type="text" name="id" placeholder="ID">
                <P>vul hier de naam in </P><br>
                <input type="text" name="titel" placeholder="titel"><br>
                <p>vul de prijs in</p><br>
                <input type="text" name="prijs" placeholder="prijs"><br>
                <p>geef een beschrijving</p><br>
                <input type="text" name="beschrijving" placeholder="beschrijving"><br>
                <input type="submit" name="edit" placeholder="edit"><br>
            </form>
</div>
<div class = "admin-destroy">
            <form action="php/delete.php" method="post" id="admin-delete">
                <p>vul hier het ID in van het item dat je wilt deleten</p>
                <input type="text" name="id" placeholder="ID">
                <input type="submit" name="delete">
            </form>
        </div>
        <div class="database-table">
            <table id="var-dumped" style="border:1px solid">
                <tr>
                    <th>ID</th>
                    <th>titel</th>
                    <th>prijs</th>
                    <th>beschrijving</th>
                </tr>
                <?php
            $sql = "SELECT * FROM boekingen";
            $stmt = $connect -> prepare($sql);
            $stmt -> execute();
            $result = $stmt -> fetchAll();

            foreach($result as $res) { 
                echo "<tr>";
                echo "<td>{$res['id']}</td>";
                echo "<td>{$res['titel']}</td>";
                echo "<td>{$res['prijs']}</td>";
                echo "<td>{$res['beschrijving']}</td>";
                echo "</tr>";
            }
            ?>
        </div>
</main>

</body>

</html>