<?php
define('user','root');
define('pass','facuterrens123');
define('host','localhost');
define('database','hospital-zonal');

$conexion = mysqli_connect(host,user,pass,database);
//encontrar errores:
if(!$conexion){
   die("fallo la conexion: ".mysqli_error());
};
 ?>
   