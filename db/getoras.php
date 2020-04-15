<?php
include ("/var/db/dbconfig.php");

$judet_num =$_POST['judet']; 
echo $judet_num;

$id_oras = "SELECT id from judete where name = '$judet_num'";
$result = mysqli_query($db, $id_oras);

//if($result) echo '1234';
while($row = mysqli_fetch_array($result))
	{
		//echo $row['id'];
		$judet_id = $row['id'];
		
	}	
echo "   ";
$sql = "SELECT id, name FROM orase WHERE county_id='".$judet_id."'";

$result2 = mysqli_query($db, $sql);
//if($result2) echo '1234';
$oras_arr = array();

while( $row = mysqli_fetch_array($result2))
{
    //echo $row['id'];
    //echo $row['name'];
    //echo 'test';

    $oras_arr[] = array('jud_id' => $row['id'], 
    	'jud_name' => $row['name']
    );

}
echo print_r($oras_arr);
echo json_encode($oras_arr);

?>