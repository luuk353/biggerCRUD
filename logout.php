<?php
session_start();

unset($_SESSION);

session_destroy();

header('Location: login.php');
?>

<!-- include bij elke logout ding -->