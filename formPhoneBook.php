<div class="navigation" align="center" style="background-color: black; color: white">
 <p>Add Contact New</p>

  <form action="#" method="POST">

      <input type="text" placeholder="Your Firstname : " name="firstname">
      <input type="text" placeholder="Your Lastname : " name="lastname"><br>
      <input type="text" placeholder="Your Phone : " name="phone">
      <input type="email" placeholder="Your Email : " name="email"><br>
      <input type="text" placeholder="Your Address : " name="address"><br>
      <input type="submit" value="Submit" name="submit" onclick="myFunction()">
  </form>
</div>

<?php

$hostname = "localhost";
$username = "root";
$password = "my";
$db = "server0";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}
    echo 'Connected successfully Db Server0';
    echo $_SERVER['PHP_SELF'];


if(isset($_POST['submit'])) {
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  
  $query = "INSERT INTO phonebook (firstname, lastname, phone, address, email) VALUES ('$firstname', '$lastname', '$phone', '$address', '$email')";

    if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      echo "<br>Thanks for your review.<br>";
      mysqli_close($dbconnect);
    }

}

?>

<script>      
  function myFunction() {
    document.getElementById("firstname").value = '';
  }
</script>