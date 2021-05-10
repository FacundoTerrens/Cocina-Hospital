<?php 
session_start();
include("../seguridad.php");
include("../conexion.php");
?>

<link rel="stylesheet" href="../estilos/estilos.css">

<table class="egt">
  <tr>
  <th class="tabla1">Maternidad</th>
    <th class="tabla1">Nombre</th>
    <th class="tabla1">Apellido</th>
    <th class="tabla1">N° Cama</th>
    <th class="tabla1">Tipo de Dieta</th>
    <th class="tabla1">Variable</th>

  </tr>
  <?php

    $sql= "SELECT * FROM `datos_pacientes_cocina` WHERE `nom_sala` = 'mat'";
    $result= mysqli_query($conexion, $sql);

    while($mostrar=mysqli_fetch_array($result)){
  ?>
  <tr>
    <td class="tabla1"><?php echo $mostrar['nom_sala'] ?></td>
    <td class="tabla1"><?php echo $mostrar['nom_paciente'] ?></td>
    <td class="tabla1"><?php echo $mostrar['apell_paciente'] ?></td>
    <td class="tabla1"><?php echo $mostrar['num_cama'] ?></td>
    <td class="tabla1"><?php echo $mostrar['dieta'] ?></td>
    <td class="tabla1"><?php echo $mostrar['dieta_variable'] ?></td>

  </tr>


  <?php
  }
  ?>


</table>

<input type="button" value="Imprimir">
<a href="../index.php" class="login100-form-btn2">Volver</a>