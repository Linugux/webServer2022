<?php include 'conection.php'?>
  <?php
  $query = mysqli_query($dbconnect, "SELECT * FROM phonebook order by id desc")
     or die (mysqli_error($dbconnect));

  #while ($row = mysqli_fetch_array($query)) {
    while($row = mysqli_fetch_array($query)){
      echo"<a style='color: #aaaaee; font-size:13px;'>{$row['id']}";
      echo".- ";
      echo"{$row['firstname']} ";
      echo"{$row['lastname']}</a> ";
      echo"<a style='color: #aaaaee; font-size:13px;' href='https://wa.me/{$row['phone']}'>{$row['phone']}</a> ";
      echo"<a style='font-size:13px;'href='mailto:{$row['email']}'>{$row['email']}</a><br>";
    }
  mysqli_close($dbconnect);
  ?>
  </table>
</div>

  
