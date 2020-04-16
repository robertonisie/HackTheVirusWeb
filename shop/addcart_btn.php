<?php
session_start();
include ("/var/db/dbconfig.php");

$pid = $_POST['id'];
$query = "SELECT * FROM anunturi WHERE id='$pid'";
            $result=mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($result);

            $ppoza_id = $row["poza"];
            $sql = "SELECT * FROM image_upload WHERE id='$ppoza_id'";
            $result2 = mysqli_query($db, $sql);
            $row2 = mysqli_fetch_assoc($result2);

            $puser = $row["user_id"];
            $sql = "SELECT * FROM users WHERE id='$puser'";
            $result3 = mysqli_query($db, $sql);
            $row3 = mysqli_fetch_assoc($result3);

            $puser_id = $row3['id'];
            $pnume_afacere = $row3['nume_afacere'];
            $ppoza = $row2['image'];
            $pid = $row["id"];
            $pnume_produs = $row["nume_produs"];
            $ppret = $row["pret"];
            $pdescriere = $row['descriere'];

    $pcantitate_aleasa = 1;

    $puser = $_SESSION["nume_sesiune"];
    $sql = "SELECT * FROM users WHERE email='$puser'";
    $result3 = mysqli_query($db, $sql);
    $row3 = mysqli_fetch_assoc($result3);
    $puser_id = $row3['id'];

    $query = "INSERT INTO produse_cart(nume_produs, pret, descriere, cantitate, poza, user_id) VALUES('$pnume_produs', '$ppret', '$pdescriere', '$pcantitate_aleasa', '$ppoza_id', '$puser_id')";
    mysqli_query($db, $query);
?>