<?php
session_start();
$pid = $_GET['id'];
    session_destroy();
    session_unset($_SESSION['nume_sesiune']);
    session_destroy();
    header('Location: /shop/product-single?id='.$pid.'');
    exit();

?>