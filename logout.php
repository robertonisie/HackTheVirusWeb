<?php
session_start();

    session_destroy();
    unset($_SESSION['nume_sesiune']);
    header("location: index.html");
?>