<?php include 'conection.php'?>
<?php
  $query = mysqli_query($dbconnect, "SELECT * FROM titleUpdate ORDER BY RAND()
LIMIT 1")
     or die (mysqli_error($dbconnect));

  #while ($row = mysqli_fetch_array($query)) {
    if($row = mysqli_fetch_array($query)){
      echo"{$row['title']}";
    }
  mysqli_close($dbconnect);
?>