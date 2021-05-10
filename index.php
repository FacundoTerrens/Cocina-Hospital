<?php 
session_start();

include("conexion.php");
include("seguridad.php");
include "consultas/consultas.php";
include "consultas/consultas2.php";
?>
<link rel="stylesheet" href="estilos/estilos.css">
<body >
    

<table class="egt">
  <tr>
    <th ></th>
    <th>S/SAL</th>
    <th>LIVI</th>
    <th>BLAN</th>
    <th>ASTR</th>
    <th>DBT</th>
    <th>LIC</th>
    <th>LIQ</th>
    <th>S/SAL</th>
    <th>LIVI</th>
    <th>BLAN</th>
    <th>ASTR</th>
    <th>DBT</th>
    <th>LIC</th>
    <th>LIQ</th>
    <th>S/SAL</th>
    <th>LIVI</th>
    <th>BLAN</th>
    <th>ASTR</th>
    <th>DBT</th>
    <th>LIC</th>
    <th>LIQ</th>
    
    
  </tr>
  <tr>
    <th><a href="salas/ped.php">PED</a></th>
    <td> <?php echo $fila1['total1'] ?></td>
    <td><?php echo $fila2['total2'] ?></td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  <tr>
    <th><a href="salas/uci.php">UCI</a></th>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  <tr>
    <th><a href="salas/mat.php">MAT</a></th>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  <tr>
    <th><a href="salas/muj.php">MUJ</a></th>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  <tr>
    <th><a href="salas/hom.php">HOM</a></th>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  <tr>
    <th><a href="salas/neo.php">NEO</a></th>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>

  <tr>
    <th>TOTAL</th>
    <td>6</td>
    <td>12</td>
    <td>18</td>
    <td>24</td>
    <td>30</td>
    <td>36</td>
    <td>42</td>
    <td>6</td>
    <td>12</td>
    <td>18</td>
    <td>24</td>
    <td>30</td>
    <td>36</td>
    <td>42</td>
    <td>6</td>
    <td>12</td>
    <td>18</td>
    <td>24</td>
    <td>30</td>
    <td>36</td>
    <td>42</td>
    
    
  </tr>
</table>

<button class="boton"><a href="cargar_paciente.php">Agregar Paciente</a></button>
<input class="boton" type="button" value="Eliminar Dietas">
<button class="boton"><a href="salir.php" >salir</a></button>


</body>

