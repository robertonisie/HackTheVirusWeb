<?php
session_start();

    session_destroy();
    session_unset($_SESSION['nume_sesiune']);
    session_destroy();
    header('Location: /shop/shop.php');
    exit();

?>
