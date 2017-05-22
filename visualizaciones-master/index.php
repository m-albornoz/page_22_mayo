<?php include('cabeza.php');?>
<section>
<p><?php echo($description);?></p>
  <h2>Estudiantes</h2>
<?php
$estudiantes = array_map('str_getcsv', file('data/estudiantes.csv'));
array_walk($estudiantes, function(&$a) use ($estudiantes) {$a = array_combine($estudiantes[0], $a);});
array_shift($estudiantes);
$all = count($estudiantes);
?>

<h4>1. Total de estudiantes matriculados en la carrera</h4>

<table class="table table-condensed">
  <tr>
    <th>Año</th>
    <th>Estudiantes matriculados</th>
  </tr>
<?php for($a=0; $a < $all; $a++){?>
  <tr>
    <td><?php echo$estudiantes[$a]["year"]?></td>
    <td><?php echo$estudiantes[$a]["total_matricula"]?></td>
  </tr>
<?php };?>
</table>

<img src="images/matriculas.png" class="img-responsive">

<hr>

<h4>2. Establecimientos educacionales de procedencia de los estudiantes que ingresan al primer año:</h4>

<table class="table table-condensed">
  <tr>
    <th>Año</th>
    <th>Ingreso total</th>
    <th>Establecimiento Municipal</th>
    <th>Establecimiento Subvencionado</th>
    <th>Establecimiento Particular</th>
  </tr>
<?php for($b=0; $b < $all; $b++){?>
  <tr>
    <td><?php echo$estudiantes[$b]["year"]?></td>
    <td><?php echo$estudiantes[$b]["total_ingreso"]?></td>
    <td><?php echo$estudiantes[$b]["ingreso_municipal"]?></td>
    <td><?php echo$estudiantes[$b]["ingreso_subvencionado"]?></td>
    <td><?php echo$estudiantes[$b]["ingreso_particular"]?></td>
  </tr>
<?php };?>
</table>

<img src="images/establecimientos_estudiantes.png" class="img-responsive">

<hr>

<h4>3. Edad, género y procedencia regional de los estudiantes que ingresaron a primer año en 2015:</h4>

<table class="table table-condensed">
  <tr>
    <th>Año</th>
    <th>Ingreso total</th>
    <th>Mujeres</th>
    <th>Hombres</th>
    <th>Menores de 18 años</th>
    <th>Entre 18 y 21 años</th>
    <th>Entre 21 y 25 años</th>
    <th>Mayores de 25 años</th>
    <th>Región Metropolitana</th>
    <th>Otras regiones</th>
</tr>
<?php for($c=0; $c < $all; $c++){?>
  <tr>
    <td><?php echo$estudiantes[$c]["year"]?></td>
    <td><?php echo$estudiantes[$c]["total_ingreso"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_mujeres"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_hombres"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_menores_18"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_18_21"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_21_25"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_mayores_25"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_metropolitana"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_regiones"]?></td>
  </tr>
<?php };?>
</table>

<img src="images/alumnos_2015.png" class="img-responsive">

<hr>

<h4>4. Puntajes de ingreso</h4>

<table class="table table-condensed">
  <tr>
    <th>Año</th>
    <th>Menor Puntaje</th>
    <th>Mayor Puntaje</th>
</tr>
<?php for($d=0; $d < $all; $d++){?>
  <tr>
    <td><?php echo$estudiantes[$d]["year"]?></td>
    <td><?php echo$estudiantes[$d]["puntajes_maximos"]?></td>
    <td><?php echo$estudiantes[$d]["puntajes_minimos"]?></td>
  </tr>
<?php };?>
</table>
<img src="images/puntajes.png" class="img-responsive">

</section>
<?php include('pie.php');?>
