<?php 
$sql1 = "SELECT COUNT(*) total1 FROM `datos_pacientes_cocina` WHERE `nom_sala`='ped' AND `dieta`='sin_sal' AND `dieta_variable`='C/Postre Blando'" ;
$pedssgq =  mysqli_query($conexion, $sql1);
$fila1 = mysqli_fetch_assoc($pedssgq);
?>