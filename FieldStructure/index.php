<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Field Structure</title>
</head>

<body>
    
    <?php include "php/data.php" ?>
    
    <script> var table = document.getElementById('emp');

for(var i = 1; i < table.rows.length; i++)
{
    table.rows[i].onclick = function()
    {
        //rIndex = this.rowIndex;
        document.getElementById(name).value = this.cells[0].innerHTML;
        document.getElementById(empcode).value = this.cells[1].innerHTML;

    };
}
</script>
    <table id="dev">
        <tr>
            <th>Mobile/Email</th>
            <th>Account No</th>
            <th>Status</th>
        </tr>
        <tr onclick="getData(this)">
            <td>6300000000000</td>
            <td>123</td> 
            <td>1</td>
        </tr>
    </table>
    <table id="area">
        <tr>
            <th>Old Code</th>
            <th>Area Description</th>
        </tr>
        <tr onclick="getData(this)">
            <td>OFFC10</td>
            <td>LOREMIPSUM</td> 
        </tr>
    </table>
    Covered Areas:
    <table id="assignment">
        <tr onclick="getData(this)">
            <th>Division</th>
            <th>Area Type</th>
            <th>Area Code</th>
            <th>Area Description</th>
            <th>Start Date</th>
            <th>End Date</th>
        </tr>
        <tr onclick="getData(this)">
            <td>OFFICE</td>
            <td>Terr</td> 
            <td>OFFC10</td>
            <td>OFFICE</td> 
            <td>2016/05/31</td>
            <td>2030/12/31</td> 
        </tr>
    </table> -
        
    
        
</body>

</html>