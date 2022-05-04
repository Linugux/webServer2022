<?php
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
										on empleado.id_area = area.id_area
									ORDER BY id_empleado;")
     or die (mysqli_error($dbconnect));

$query1 = mysqli_query($dbconnect, "SELECT * from turno ;")
     or die (mysqli_error($dbconnect));

$query2 = mysqli_query($dbconnect, "SELECT * from puesto ;")
     or die (mysqli_error($dbconnect));

$query3 = mysqli_query($dbconnect, "SELECT *,puesto.id_puesto,puesto.nombre_puesto 
									from area 
									INNER JOIN puesto 
									ON area.id_puesto=puesto.id_puesto;")
     or die (mysqli_error($dbconnect));

$query4 = mysqli_query($dbconnect, "SELECT count(*) from empleado;")
     or die (mysqli_error($dbconnect));

$query45 = mysqli_query($dbconnect, "SELECT count(*) from empleado;")
     or die (mysqli_error($dbconnect));

$query5 = mysqli_query($dbconnect, "SELECT count(*),nombre_area,nombre_empleado,puesto.nombre_puesto
									 from empleado 
									 inner join area 
									 	on empleado.id_area=area.id_area
									 INNER JOIN puesto
									 	ON empleado.id_puesto=puesto.id_puesto 
									 GROUP BY nombre_area
									 ORDER BY nombre_empleado;")
     or die (mysqli_error($dbconnect));

 $query10 = mysqli_query($dbconnect, "SELECT count(*),nombre_area,puesto.nombre_puesto,puesto.id_puesto 
									from empleado 
									inner join area 
									on empleado.id_area=area.id_area 
									INNER JOIN puesto
									ON empleado.id_puesto=puesto.id_puesto
									group by nombre_empleado
									ORDER BY id_empleado;")
     or die (mysqli_error($dbconnect));

 $query101 = mysqli_query($dbconnect, "SELECT count(*),nombre_area,turno.id_turno,turno.nombre_turno 
									from empleado 
									inner join area 
									on empleado.id_area=area.id_area 
									INNER JOIN turno
									ON empleado.id_turno=turno.id_turno
									group by nombre_empleado
									ORDER BY id_empleado;")
     or die (mysqli_error($dbconnect));

 $query11 = mysqli_query($dbconnect, "SELECT count(*),nombre_empleado,puesto.nombre_puesto,puesto.id_puesto,area.id_puesto,area.nombre_area
									from empleado 
									inner join area 
									on empleado.id_area=area.id_area 
									INNER JOIN puesto
									ON empleado.id_puesto=puesto.id_puesto
									group by nombre_empleado
									ORDER BY id_empleado;")
     or die (mysqli_error($dbconnect));

 $query110 = mysqli_query($dbconnect, "SELECT count(*),nombre_empleado,puesto.nombre_puesto,puesto.id_puesto,area.id_puesto,area.nombre_area
									from empleado 
									inner join area 
									on empleado.id_area=area.id_area 
									INNER JOIN puesto
									ON empleado.id_puesto=puesto.id_puesto
									group by puesto.nombre_puesto
									ORDER BY id_empleado;")
     or die (mysqli_error($dbconnect));

$aquerya = mysqli_query($dbconnect, "SELECT count(*),nombre_area,id_empleado,nombre_empleado,nombre_turno,nombre_puesto 
									from empleado 
									inner join area 
										on empleado.id_area=area.id_area
									INNER JOIN turno
										ON empleado.id_turno=turno.id_turno
									INNER JOIN puesto
										ON empleado.id_puesto=puesto.id_puesto
									group by nombre_empleado
									ORDER BY id_empleado;")
     or die (mysqli_error($dbconnect));

$aquerya5 = mysqli_query($dbconnect, "SELECT count(*),nombre_area,id_empleado,nombre_empleado,nombre_turno,nombre_puesto 
									from empleado 
									inner join area 
										on empleado.id_area=area.id_area
									INNER JOIN turno
										ON empleado.id_turno=turno.id_turno
									INNER JOIN puesto
										ON empleado.id_puesto=puesto.id_puesto
									group by nombre_empleado
									ORDER BY id_empleado;")
     or die (mysqli_error($dbconnect));

$aqueryab = mysqli_query($dbconnect, "SELECT count(*),nombre_area,id_empleado,nombre_empleado,nombre_turno,nombre_puesto 
									from empleado 
									inner join area 
										on empleado.id_area=area.id_area
									INNER JOIN turno
										ON empleado.id_turno=turno.id_turno
									INNER JOIN puesto
										ON empleado.id_puesto=puesto.id_puesto
									group by nombre_empleado
									ORDER BY id_empleado;")
     or die (mysqli_error($dbconnect));

$aqueryaba = mysqli_query($dbconnect, "SELECT count(*),nombre_area,id_empleado,nombre_empleado,nombre_turno,nombre_puesto 
									from empleado 
									inner join area 
										on empleado.id_area=area.id_area
									INNER JOIN turno
										ON empleado.id_turno=turno.id_turno
									INNER JOIN puesto
										ON empleado.id_puesto=puesto.id_puesto
									group by nombre_empleado
									ORDER BY id_empleado;")
     or die (mysqli_error($dbconnect));

$aqueryabab = mysqli_query($dbconnect, "SELECT count(*),nombre_area,id_empleado,nombre_empleado,nombre_turno,nombre_puesto 
									from empleado 
									inner join area 
										on empleado.id_area=area.id_area
									INNER JOIN turno
										ON empleado.id_turno=turno.id_turno
									INNER JOIN puesto
										ON empleado.id_puesto=puesto.id_puesto
									group by nombre_empleado
									ORDER BY id_empleado;")
     or die (mysqli_error($dbconnect));

$aquery1 = mysqli_query($dbconnect, "SELECT count(*),nombre_area,id_empleado,nombre_empleado,nombre_turno,turno.id_turno,area.id_area 
									from empleado 
									inner join area 
										on empleado.id_area=area.id_area
									INNER JOIN turno
										ON empleado.id_turno=turno.id_turno
									group by nombre_turno
									ORDER BY id_turno;")
     or die (mysqli_error($dbconnect));
?>