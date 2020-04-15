<?php

$host = "193.226.29.22"; /* Host name */
$user = "htv"; /* User */
$password = "HTVpass1@"; /* Password */
$dbname = "hackthevirus"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}