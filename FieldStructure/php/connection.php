<?php

$serverName = "rizal";
$connectionInfo = array("Database" => "Mercury", "UID" => "sa", "PWD" => "kalayaan");
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn === false) {
  die(print_r(sqlsrv_errors(), true));
}



?>