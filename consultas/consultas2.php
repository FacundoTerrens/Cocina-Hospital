<?php

$sql2 = "SELECT COUNT(*) total2 FROM `datos_pacientes_cocina` WHERE `nom_sala`='hom' AND `dieta`='sin_sal' AND `dieta_variable`='C/Postre Blando'" ;
$homsspbq =  mysqli_query($conexion, $sql2);
$fila2 = mysqli_fetch_assoc($homsspbq);

?>