<?php
    session_start();
    if(isset($_GET["search"])){
        $search = "%".$_GET['search']."%";
        $search1 = $_GET['search'];
        // var_dump($search); 
            $sql = "SELECT * FROM reizen WHERE :search1 BETWEEN begindatum AND einddatum OR hotel LIKE :search";
            $stmt = $connect -> prepare($sql);
            $stmt -> bindParam(":search1", $search1);
            $stmt -> bindParam(":search", $search);
            
        } else {
            $sql = "SELECT * FROM reizen";
            $stmt = $connect -> prepare($sql);
        }
    
    $stmt ->execute();
    $result = $stmt -> fetchAll();

    foreach($result as $res) {
?>


<div class="container1">
    <div class="fototemplatebox">
        <img id="fototemplate" src="<?php echo $res['image'] ?>">
    </div>
    <div class="tekstvakreistemplate">
        <p>datum:<p><?php echo $res["begindatum"]; ?></p>
            <p>-->></p><?php echo $res["einddatum"]; ?>
        </p>
    </div>
    <div class="tekstvakreistemplate">
        <p>hotel:<p><?php echo $res["hotel"]; ?></p>
    </div>
    <div class="tekstvakreistemplate">
        <p>prijs:<p><?php echo $res["hotel_prijs"]; ?></p>
    </div>
    <div class="tekstvakreistemplate">
        <p>sterren:<p><?php echo $res["sterren"]; ?></p>
    </div>
    <div class="tekstvakreistemplate">    
        <form action= "phpincludes/boeken.php" method="post">
            <select name="car">
                <option value="default">Select a car to hire</option>
                <option value="audi">Audi</option>
                <option value="vw">Volkswagen</option>
                <option value="mercedes">Mercedes</option>
            </select>
            <select name="hotel">
                <option value="default">Select a hotel to stay at</option>
                <option value="turk">Grand hotel Turkey</option>
                <option value="sp">Grand hotel Spain/Portugal</option>
                <option value="au">Grand hotel Australia</option>
            </select>
            
            <input type="hidden" name="gebruikerID" value=<?php echo $_SESSION['gebruikerID']; ?>>
            <input type="hidden" name="reisID" value=<?php echo $res['reisID']; ?>>

            <input type="submit" name="boeken" value="submit">
        </form>
    </div>
</div>

<?php 
    }
?>