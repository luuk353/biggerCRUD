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
    <a href="login.php"> inloggen </a>
    <a href="contact.php"> contacten </a>
    <a href="index.php"> indexen</a>
    <a href="overons.php"> overonsen </a>
    <div id="admin-main">
        <div class="admin-powers">
            <form action="phpincludes/create.php" method="post" id="admin-add">
                <P>vul hier de naam in van wat je wilt toevoegen </P>
                <input type="text" name="hotel" placeholder="hotelnaam"><br>
                <p> vul de begindatum in </p>
                <input type="text" name="begindatum" placeholder="begindatum"><br>
                <p> vul de einddatum in </p>
                <input type="text" name="einddatum" placeholder="einddatum"><br>
                <p> geef de prijs aan </p>
                <input type="text" name="hotel_prijs" placeholder="prijs"><br>
                <p> vul de beoordeling in (aantal sterren)</p>
                <input type="text" name="sterren" placeholder="beoordeling"><br>
                <input type="text" name="image" placeholder="IMAGELINK"><br>
                <input type="submit" name="submit" placeholder="submit"><br>
            </form>
            <form action="phpincludes/update.php" method="post" id="admin-update">
                <p>vul hier het ID in van wat je wilt aanpassen</p>
                <input type="text" name="reisID" placeholder="ID">
                <P>vul hier de naam in </P>
                <input type="text" name="hotel" placeholder="hotelnaam"><br>
                <p>vul de begindatum in</p>
                <input type="text" name="begindatum" placeholder="begindatum"><br>
                <p> vul de einddatum in</p>
                <input type="text" name="einddatum" placeholder="eindddatum"><br>
                <p> geef de prijs aan </p>
                <input type="text" name="hotel_prijs" placeholder="prijs"><br>
                <p> vul de beoordeling in (aantal sterren)</p>
                <input type="text" name="sterren" placeholder="beoordeling"><br>
                <input type="text" name="image" placeholder="IMAGELINK"><br>
                <input type="submit" name="edit" placeholder="edit"><br>
            </form>
        </div>
        <div class="admin-destroy">
            <form action="phpincludes/delete.php" method="post" id="admin-delete">
                <p>vul hier het ID in van het item dat je wilt deleten</p>
                <input type="text" name="reisid" placeholder="ID">
                <input type="submit" name="delete">
            </form>
        </div>
        <div class = "onderste-main">
        <div class="onderste-deel">
        <div class = "ja">
            <table id="var-dumped" style="border:1px solid">
                <tr>
                    <th>ID</th>
                    <th>titel</th>
                    <th>begindatum</th>
                    <th>einddatum</th>
                    <th>prijs</th>
                    <th>beoordeling</th>
                </tr>
        </table>
                <?php
            $sql = "SELECT * FROM reizen";
            $stmt = $connect -> prepare($sql);
            $stmt -> execute();
            $result = $stmt -> fetchAll();

            foreach($result as $res) { 
                echo "<table>";
                echo "<tr>";
                echo "<td>{$res['reisID']}</td>";
                echo "<td>{$res['hotel']}</td>";
                echo "<td>{$res['begindatum']}</td>";
                echo "<td>{$res['einddatum']}</td>";
                echo "<td>{$res['hotel_prijs']}</td>";
                echo "<td>{$res['sterren']}</td>";
                echo "</tr>";
                echo "</table>";
            }
            ?>
            </div>
    <div class = "ertussenin">
<div class = "boekingentekst">
                    <h1>boekingen van gebruikers</h1>
                    <?php
                          
                    $sql = "SELECT * FROM boekingen";
            $stmt = $connect -> prepare($sql);
            $stmt -> execute();
            $result = $stmt -> fetchAll();
        
        ?>
        </div>
<?php

            foreach($result as $res) { 
                echo "<tr>";
                echo "<td>het reisID = {$res['reisID']}</td><br>";
                echo "<td>van gebruiker= {$res['gebruikerID']}</td><br>";
                echo "<td> waarvan het boekingID is : {$res['boekingID']}</td><br>";
                echo "</tr>";
            }
               ?>
        </div>
                
                <div class = "useradmindelete">
                <form action="phpincludes/useradmindelete.php" method="post">
                    <b>vul hier het boekingID in van het item dat je wilt annuleren</b>
                    <input type="text" name="boekingID" placeholder="boekingID">
                    <input type="submit" name="delete">
                </form>
            </div>
        </div>


                <div class="gebruiker-updater">
                    <form action="phpincludes/accountupdate.php" method="post" id="admin-update">
                        <p>vul hier het ID in van de gebruiker die je wilt aanpassen</p>
                        <input type="text" name="gebruikerID" placeholder="ID">
                        <P>vul hier de nieuwe naam in </P>
                        <input type="text" name="username" placeholder="username"><br>
                        <p>vul hier het nieuwe wachtwoord in</p>
                        <input type="text" name="password" placeholder="password"><br>
                        <p> vul de nieuwe code in</p>
                        <input type="text" name="forgotcode" placeholder="forgotcode"><br>
                        <input type="submit" name="edit" placeholder="edit"><br>
                    </form>
                    <?php
                        $sql = "SELECT * FROM gebruikers";
                        $stmt = $connect -> prepare($sql);
                        $stmt -> execute();
                        $result = $stmt -> fetchAll();
                        ?>
                        <table id="var-dumped" style="border:1px solid">
                <tr>
                    <th>ID</th>
                    <th>username</th>
                    <th>password</th>
                    <th>forgotcode</th>
                </tr>
        </table>
                        <?php
                        foreach($result as $res) { 
                        echo "<table>";
                        echo "<tr>";
                        echo "<td>{$res['gebruikerID']}</td>";
                        echo "<td>{$res['username']}</td>";
                        echo "<td>{$res['password']}</td>";
                        echo "<td>{$res['forgotcode']}</td>";
                        echo "</tr>";
                        echo "</table>";
            }
            ?>
             <div class = "useradmindelete">
                <form action="phpincludes/userdeletion.php" method="post">
                    <b>vul hier het gebruikersID in van het account dat je wilt verwijderen</b>
                    <input type="text" name="gebruikerID" placeholder="gebruikerID">
                    <input type="submit" name="delete">
                </form>
            </div>
                </div>
             </div>
        </div>

    </div>

</body>

</html>