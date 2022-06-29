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
    <div class="form-template">    
    <form id="form-template"action= "phpincludes/boeken.php" method="post">
            <select id="select-form-template" name="car">
                <option id="select-form-template" value=""> select car</option>
                <option id="select-form-template" value="audi"> audi</option>
                <option id="select-form-template" value="vw"> Volkswagen</option>
                <option id="select-form-template" value="mercedes"> mercedes</option>
            </select>
            <select id="select-form-template" name="hotel">
                <option value=""> select a hotel</option>
                <option value="turk"> Grand hotel Turkey</option>
                <option value="sp"> Grand hotel Spain/Portugal</option>
                <option value="au"> Grand hotel Australia</option>
            </select>


            
            <input type="hidden" name="gebruikerID" value=<?php echo $_SESSION['gebruikerID']; ?>>
            <input type="hidden" name="reisID" value=<?php echo $res['reisID']; ?>>
            <div class="knop-form-template">
                <input type="submit" value="submit">
            </div>
        </form>
    </div>
</div>

<?php 
    }
?>