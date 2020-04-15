<?php
include ("/var/db/dbconfig.php");

$judet_num =$_POST['judet']; 
//echo $judet_num;

$id_oras = "SELECT id from judete where name = ".$$judet_num."'";
$result = mysqli_query($db, $id_oras);
$row = mysqli_fetch_array($result);

echo $row;
$sql = "SELECT id, name FROM orase WHERE county_id='".$judetid."'";

$result = mysqli_query($db, $sql);
$oras_arr = array();

while( $row = mysqli_fetch_array($result) )
{
    $orasid = $row['id'];
    $oras_name = $row['name'];

    echo $row['id'];
    echo $row['name'];

    $oras_arr[] = array("id" => $orasid, "name" => $oras_name);

}

echo json_encode($oras_arr);

?>