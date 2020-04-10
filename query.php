<html>
<body>
<?php 
$server = "localhost";
$username = "root";
$password = "";
$db="tk1";
   $con=mysqli_connect($server,$username,$password,$db);
   if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error($con));
}
$query = "SELECT * FROM "tk1";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">stdid</font> </td> 
          <td> <font face="Arial">stname</font> </td> 
          <td> <font face="Arial">math</font> </td> 
          <td> <font face="Arial">physics</font> </td> 
          <td> <font face="Arial">computer</font> </td> 
          <td> <font face="Arial">total</font> </td> 
          <td> <font face="Arial">grade</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
          $stname = $row["stname"];
           $math = $row["math'];
           $scinece = $row["science"];
          $physics = $row["physicsr"];
           $computer = $row["computer"]; 
 
        echo '<tr> 
                  <td>'.stname.'</td> 
                  <td>'.$math.'</td> 
                  <td>'.$scinece.'</td> 
                  <td>'.$physics.'</td> 
                  <td>'.$computer.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>
