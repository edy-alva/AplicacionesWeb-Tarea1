<?php 
/*
	Tarea 1 de Aplicaciones Web
	Por: Eduardo Alvarado
	Curso: Sexto Modalidad Online
*/

// Declaracion de variables y asignacion de valores

 $notaMinima = 6.95;
 $nombre = "Eduardo";
 $apellido = "Alvarado";
 $nombrecompleto;
 $asignatura;
 $nivel = 6;
 $modalidad = "Modalidad Online";
 $esOnline = true;
 $listaNotas[] = NULL;
 $listaNotasMateria[] = NULL;

$asignatura = "Aplicaciones Web";

// Uso de Condicionales

switch ($nivel)
{
	case 1: $nivel = "Primero";
	break;
	case 2: $nivel = "Segundo";
	break;
	case 3: $nivel = "Tercero";
	break;
	case 4: $nivel = "Cuarto";
	break;
	case 5: $nivel = "Quinto";
	break;
	case 6: $nivel = "Sexto";
	break;
	case 7: $nivel = "Septimo";
	break;
	case 8: $nivel = "Octavo";
	break;
	case 9: $nivel = "Noveno";
	break;
}

if ($esOnline)
	$modalidad = "Online";
else
	$modalidad = "Presencial";

// Manipulación de Cadenas

$nombrecompleto = $nombre . " " . $apellido;

echo("<center> <h1>  Tarea 01 </h1> </center>");
echo("<center> <h2>  ".$asignatura." </h2> </center>");
echo("<center> <h3> Por: ".$nombrecompleto." </h3> </center>"); 
echo("<center> <h4> Curso: ".$nivel." Modalidad: " .$modalidad. " </h4> </center>");
echo("<center> <h5> Longitud del nombre: ".strlen($nombrecompleto). " caracteres </h5> </center>");
echo("<center> <h5> Valor para aprobar: ".$notaMinima. "</h5> </center>");

// Creación de un Array

$listaMaterias = array("Arquitectura de Software","Gestion Empresarial","Aplicaciones Web","Proyectos informaticos","Inteligencia Artificial","Inteligencia de Negocios");

echo "                         
<table>
<tr>
  <th>Materia</th>
  <th>Nota Parcial</th>
  <th>Nota Final</th>
  <th>Promedio</th>
  <th>Aprobacion</th>
</tr>
";

foreach($listaMaterias as $clave => $materia)
{
	$i = 0;
	for($i = 0; $i <= 1; $i++ )
	{
		$listaNotasMateria[$i] = rand(0,10);
	}
	//  Operaciones Aritméticas
	$promedio = ($listaNotasMateria[0] + $listaNotasMateria[1]) / 2 ;
	$i++;
	$listaNotasMateria[$i] = $promedio;
	$i++;
	if ($promedio >  $notaMinima)
		$listaNotasMateria[$i] = "Aprobado";
	else
		$listaNotasMateria[$i] = "Reprobado";	
	$listaNotas[$clave] = $listaNotasMateria;

	echo "<tr> <td>".$listaMaterias[$clave]."</td>";
	foreach($listaNotasMateria as $clave => $nota )
		echo  "<td>".$nota."</td>";
		
	echo "</tr>";
	
}
echo "</table> ";

?>