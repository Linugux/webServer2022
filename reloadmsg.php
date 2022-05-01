
<?php include 'conection.php'?>
  <?php
  #$query = mysqli_query($dbconnect, "SELECT * FROM msgUpdate ORDER BY id DESC")
  $query = mysqli_query($dbconnect, "SELECT * FROM msgUpdate ORDER BY RAND()
LIMIT 1")
     or die (mysqli_error($dbconnect));

  #while ($row = mysqli_fetch_array($query)) {
    if($row = mysqli_fetch_array($query)){
      echo"<a style='color: white; font-size: 13px;'> {$row['msg65']}</a><br>";
    }
  mysqli_close($dbconnect);
  ?>

  