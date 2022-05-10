<?php
#while ($row = mysqli_fetch_array($query)) {
    $ahora=date("Y-m-d");
    $fecha_actual = strtotime(date("Y-m-d",time()));
// fecha

  echo "<table>
	<tr>Tabla Conteo de tablas Areas X Empleados</tr>
	<tr align='center'><td>No.</td><td>Nombre</td><td>Puesto</td><td>Area</td><td>Turno</td></tr>";
	while($row4 = mysqli_fetch_array($query4)){
		echo "<tr><td># {$row4['count(*)']}</td><td>";
    }
   while($rowa = mysqli_fetch_array($aquerya)){
 			   echo "{$rowa['count(*)']} <b>{$rowa['nombre_empleado']}</b><br>";
 			   //echo "{$rowa['nombre_puesto']} ::: {$rowa['nombre_area']} ::: {$rowa['nombre_turno']}<br>";
		}
	echo "</td><td>";
   while($rowab = mysqli_fetch_array($aqueryab)){
 			   echo "{$rowab['nombre_puesto']}<br>";
		}
	echo "</td><td>";
   while($rowaba = mysqli_fetch_array($aqueryaba)){
 			   echo "{$rowaba['nombre_area']}<br>";
		}
	echo "</td><td>";
   while($rowabab = mysqli_fetch_array($aqueryabab)){
 			   echo "{$rowabab['nombre_turno']}<br>";
		}
	echo "</td></tr>";

	echo "</table>";
	echo "<table>
		<tr>Resumen Empleado</tr>
		<tr align='center'><td>#</td><td>Nombre</td><td>XNombreyPuesto</td><td>TotalxPuesto</td><td>xPuestoyArea</td><td>TotalxArea</td><td>xAreayTurno</td><td>TotalxTurno</td></tr><td>";
	while($row45 = mysqli_fetch_array($query45)){
		echo "# {$row45['count(*)']}";
    }
    echo "</td><td>";
   
   while($rowa5 = mysqli_fetch_array($aquerya5)){
 			   echo "<b>{$rowa5['count(*)']}</b> <b>{$rowa5['nombre_empleado']}</b><br>";
 			   //echo "{$rowa['nombre_puesto']} ::: {$rowa['nombre_area']} ::: {$rowa['nombre_turno']}<br>";
		}
    echo "</td><td>";

    while($row11 = mysqli_fetch_array($query11)){
    	echo "<b>{$row11['count(*)']}</b></b> / <b>{$row11['nombre_empleado']}</b> / <b>{$row11['nombre_puesto']}</b></b><br>";
    	}
	echo "</td><td>";

    while($row110 = mysqli_fetch_array($query110)){
    	echo "<b>{$row110['count(*)']}</b> <b>{$row110['nombre_puesto']}</b><br>";
    	}
	echo "</td><td>";

    while($row10 = mysqli_fetch_array($query10)){
    	echo "<b>{$row10['count(*)']}</b> <b>{$row10['nombre_puesto']}</b> / <b>{$row10['nombre_area']}</b></b><br>";
    	}
	echo "</td><td>";
    
    while($row5 = mysqli_fetch_array($query5)){
		echo "<b>{$row5['count(*)']}</b> de <b>{$row5['nombre_area']}</b><br>";
    }
	echo "</td><td>";
   
    while($row101 = mysqli_fetch_array($query101)){
    	echo "<b>{$row101['count(*)']}</b> <b>{$row101['nombre_area']}</b> / <b>{$row101['nombre_turno']}</b></b><br>";
    	}
	echo "</td><td>";
   
	while($rowb = mysqli_fetch_array($aquery1)){
 			   echo "<b>{$rowb['count(*)']}</b> en el <b>{$rowb['nombre_turno']}</b><br>";
		}
	echo "</td><td>";
   while($rowb21 = mysqli_fetch_array($aquery121)){
 			   echo "<b>{$rowb21['count(*)']}</b> <b>{$rowb21['nombre_puesto']}</b> </b> ... <b>{$rowb21['nombre_turno']}</b><br>";
		}
    echo "</td></tr>";
    

    echo "</table>";

echo "<table>
	<tr>Tabla Empleado</tr>
	<tr align='center'><td>Id</td><td>Area</td><td>Puesto</td><td>Nombre Empleado</td><td>Turno</td><td>Ingreso</td><td>JOb's Day</td><td>Telefono</td><td>Email</td><td>Salario</td></tr>";

    while($row = mysqli_fetch_array($query)){
		$ingresoEmpleado = ("{$row['ingreso']}");
    	$ingresoEmpleado = date(strtotime($ingresoEmpleado));
    	$format =  -1*(($ingresoEmpleado) - ($fecha_actual));
    	$formatIngreso = floor(abs($format/86400));
  	
      echo"<tr><td>{$row['id_empleado']}.-</td><td>{$row['nombre_area']}</td><td>{$row['nombre_puesto']}</td><td>{$row['nombre_empleado']}</td> <td>{$row['nombre_turno']}</td><td>{$row['ingreso']}</td><td>Dia $formatIngreso</td><td>+{$row['telefono']}</td><td>{$row['email']}</td><td>$ {$row['salario']}.oo</td></tr>";
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
	<tr>Tabla Area</tr>
	<tr align='center'><td>Id</td><td>Nombre Area</td><td>Id puesto</td><td>Nombre Puesto</td></tr>";
	while($row3 = mysqli_fetch_array($query3)){
		echo"<tr><td>{$row3['id_area']}</td><td>{$row3['nombre_area']}</td><td>{$row3['id_puesto']}</td><td>{$row3['nombre_puesto']}</td></tr>";
    }
echo "</table>";

echo "<table>
	<tr>Tabla Puesto</tr>
	<tr align='center'><td>Id</td><td>Puesto</td><td>Rango</td></tr>";
	while($row2 = mysqli_fetch_array($query2)){
		echo"<tr><td>{$row2['id_puesto']}</td><td>{$row2['nombre_puesto']}</td><td>{$row2['rango']}</td></tr>";
    }
echo "</table>";

  mysqli_close($dbconnect);
?>