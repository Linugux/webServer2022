<b>Tablas Relacionadas MariaDB</b>
<a href="webServerEmpresaTest.txt">QuerySqlFile</a>
<hr>


<style type="text/css">
	td {
		font-size: 11px;
		padding: 5px; 
		border: 1px solid white; 
		border-collapse: collapse;
	}
	table {
		width: 1000px;
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

$query = mysqli_query($dbconnect, "SELECT id_empleado,
									 nombre_empleado ,
									 empleado.id_turno,
									 ingreso,
									 turno.id_turno,
									 turno.nombre_turno,
									 turno.horario_inicial,
									 empleado.id_puesto,
									 puesto.nombre_puesto, 
									 area.nombre_area,
									 telefono,
									 email,
									 salario
									FROM empleado 
									INNER JOIN turno 
										on empleado.id_turno = turno.id_turno 
									INNER JOIN puesto 
										on empleado.id_puesto = puesto.id_puesto
									INNER JOIN area
										on empleado.id_area = area.id_area;")
     or die (mysqli_error($dbconnect));

$query1 = mysqli_query($dbconnect, "SELECT * from turno ;")
     or die (mysqli_error($dbconnect));

$query2 = mysqli_query($dbconnect, "SELECT * from puesto ;")
     or die (mysqli_error($dbconnect));

$query3 = mysqli_query($dbconnect, "SELECT * from area ;")
     or die (mysqli_error($dbconnect));

  #while ($row = mysqli_fetch_array($query)) {
    $ahora=date("Y-m-d");
    $fecha_actual = strtotime(date("Y-m-d",time()));
// fecha 1
echo "<table>
	<tr>Tabla Empleado</tr>
	<tr align='center'><td>Id</td><td>Area</td><td>Puesto</td><td>Nombre Empleado</td><td>Turno</td><td>Ingreso</td><td>JOb's Day</td><td>Telefono</td><td>Email</td><td>Salario</td></tr>";

    while($row = mysqli_fetch_array($query)){
		$ingresoEmpleado = ("{$row['ingreso']}");
    	$ingresoEmpleado = date(strtotime($ingresoEmpleado));
    	$format =  -1*(($ingresoEmpleado) - ($fecha_actual));
    	$formatIngreso = floor(abs($format/86400));
  	
      echo"<tr><td>{$row['id_empleado']}.-</td><td>{$row['nombre_area']}</td><td>{$row['nombre_puesto']}</td><td>{$row['nombre_empleado']}</td> <td>{$row['nombre_turno']}</td><td>{$row['ingreso']}</td><td>$formatIngreso</td><td>+{$row['telefono']}</td><td>{$row['email']}</td><td>$ {$row['salario']}.oo</td></tr>";
    }
echo "</table>";

echo "<table>
	<tr>Tabla Turno</tr>
	<tr align='center'><td>Id</td><td>Turno</td><td>Inicio</td><td>Termina</td></tr>";
	while($row1 = mysqli_fetch_array($query1)){
		echo"<tr><td>{$row1['id_turno']}</td><td>{$row1['nombre_turno']}</td><td>{$row1['horario_inicial']}</td><td>{$row1['horario_terminal']}</td></tr>";
    }
echo "</table>";

echo "<table>
	<tr>Tabla Puesto</tr>
	<tr align='center'><td>Id</td><td>Puesto</td><td>Rango</td></tr>";
	while($row2 = mysqli_fetch_array($query2)){
		echo"<tr><td>{$row2['id_puesto']}</td><td>{$row2['nombre_puesto']}</td><td>{$row2['rango']}</td></tr>";
    }
echo "</table>";

echo "<table>
	<tr>Tabla Area</tr>
	<tr align='center'><td>Id</td><td>Area</td></tr>";
	while($row3 = mysqli_fetch_array($query3)){
		echo"<tr><td>{$row3['id_area']}</td><td>{$row3['nombre_area']}</td></tr>";
    }
echo "</table>";

  mysqli_close($dbconnect);
?>