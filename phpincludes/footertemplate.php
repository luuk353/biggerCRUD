<?php 
include_once("connect.php");
?>
<footer>
    <div id="account-profile" href="myaccount.php">
        <a href = 'myaccount.php'><img id="profileiconfooter" src="img/profile.png" alt=""></a>
       <?php
       if(isset($_SESSION["username"])) {
        echo $_SESSION["username"];
       }
         else{
            echo '<p> u bent nog niet ingelogd! </p>';
         }
       
       ?>
    </div>
</footer>