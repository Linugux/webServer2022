
<table>
<?php

$hostname = "localhost";
$username = "root";
$password = "my";
$db = "server0";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
    }

  #$query = mysqli_query($dbconnect, "SELECT * FROM msgUpdate ORDER BY id DESC")
  #$query = mysqli_query($dbconnect, "SELECT * FROM msgUpdate ORDER BY RAND() LIMIT 1")
  $query = mysqli_query($dbconnect, "SELECT * FROM msgUpdate ORDER BY RAND() LIMIT 1")
     or die (mysqli_error($dbconnect));

  #while ($row = mysqli_fetch_array($query)) {
    if($row = mysqli_fetch_array($query)){
      echo"<a style='color: white; max-widthdth: 380px; font-size: 13px; position: relative;'> {$row['msg65']}</a><br>";
    }
  mysqli_close($dbconnect);
  ?>
  </table>