<?php

$serverName = "MIS8\MIS8";
$database = "natrapha_employee";
$uid = "sa";
$pwd = "Password11";
$connectionInfo = array("Database" =>$database,"UID" => $uid,"PWD" => $pwd);
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn === false) {
  die(print_r(sqlsrv_errors(), true));
} else {
  echo "Hello Database!.";
}

?> 




