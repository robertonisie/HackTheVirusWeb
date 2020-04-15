<?php
include ("/var/db/dbconfig.php");

$judetid = mysqli_real_escape_string($db, $_POST['judet']); 

$sql = "SELECT id,name FROM orase WHERE county_id=".$judetid;

$result = mysqli_query($db, $sql);

if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}

$oras_arr = array();

while( $row = mysqli_fetch_array($result) ){
    $orasid = $row['id'];
    $oras_name = $row['name'];

    $oras_arr[] = array("id" => $orasid, "name" => $oras_name);
}

echo json_encode($oras_arr);

?>