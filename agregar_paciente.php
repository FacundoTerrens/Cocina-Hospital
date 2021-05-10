<?php
include("conexion.php");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nombre_sala = $_POST['nombresala'];
$numero_cama = $_POST['numerocama'];
$dieta = $_POST['provincia'];
$dieta_variable = $_POST['pueblo'];



$insertar = "INSERT INTO `datos_pacientes_cocina` (`id`, `nom_paciente`, `apell_paciente`, `nom_sala`, `num_cama`, `dieta`, `dieta_variable`) VALUES (NULL, '$nombre', '$apellido', '$nombre_sala', '$numero_cama' , '$dieta' , '$dieta_variable'  )";
$resultado = mysqli_query($conexion, $insertar);


if(!$resultado){
  echo "error al registrarse";
}else {
header("location: cargar_paciente.php");

}
?>

