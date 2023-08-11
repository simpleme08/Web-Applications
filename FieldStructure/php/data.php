 <?php
  //employees

  try {
    Include_once 'php/connection.php';
    $sql="Select TOP 10 {fn concat(elast,{fn concat(', ',{fn concat(efirst,{fn concat(' ',emiddle)})})})}  as [EmpName],empcode From Employees
          Where empstat <> 'RES' Order By elast";
    echo "<table id=emp'>";
    echo "<tr><th>Employee Name</th><th>Code</th></tr>";
    $stmt = sqlsrv_query($conn,$sql);
    if($stmt === false) {
      die(print_r(sqlsrv_errors(), true));
    }
    #Fetching Data by object
    while($row =sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)) {

      echo "<tr><td>$row[EmpName]</td><td>$row[empcode]</td></tr>";

    }
  }
  catch(error $e) {
    echo "Error: " . $e->getMessage();
  }
    echo "</table>";
   

?>
