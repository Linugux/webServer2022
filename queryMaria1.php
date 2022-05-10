<b>6May</b>

<hr>
<style type="text/css">
	td {
		font-size: 11px;
		padding: 3px; 
		border: .5px solid white; 
		border-collapse: collapse;
	}
	table {
		width: 1200px;
		display:block;
		border: 1px solid white;
	}
</style>
<?php 
$hostname = "localhost";
$username = "root";
$password = "my";
$db = "empresaTest";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
    }


#$query = mysqli_query($dbconnect, "SELECT * FROM empleado ORDER BY RAND() LIMIT 1")

//include 'querys.php'; //All file querrys
//include 'querys2.php'; // all echos
echo $batery = "cat /sys/class/power_supply/BAT0/capacity";
?>
