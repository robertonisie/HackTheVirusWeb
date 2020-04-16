<?php
session_start();
include ("/var/db/dbconfig.php");

if(!isset($_SESSION['nume_sesiune']))
{
 header("Location: ../index.php");
 die("Not logged in"); 
} 

$id = $_GET['id'];

$sql =  "DELETE FROM produse_cart WHERE id='$id'"; 
$result = mysqli_query($db, $sql);
header("Location: ../shop/cart.php");
?>