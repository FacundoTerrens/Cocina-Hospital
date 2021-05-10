<?php
session_start();
include("seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Carga</title>

    <!-- Icons font CSS-->
    <link href="carga_paciente/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="carga_paciente/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="carga_paciente/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="carga_paciente/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="carga_paciente/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Cargar Paciente</h2>
                </div>
                <div class="card-body">
                    <form name="f1" method="POST" action="agregar_paciente.php" id="alta"> 
                        <div class="form-row m-b-55">
                            <div class="name">Nombre Completo</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nombre">
                                            <label class="label--desc">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="apellido">
                                            <label class="label--desc">Apellido</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nombre Sala</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select  required name="nombresala">
                                            <option disabled="disabled" selected="selected">Nombre Sala</option>
                                            <option>ped</option>
                                            <option>hom</option>
                                            <option>muj</option>
                                            <option>mat</option>
                                            <option>uci</option>
                                            <option>neo</option>
                                        </select>
                                        
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Numero Cama</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select  required name="numerocama">
                                            <option disabled="disabled" selected="selected">Numero Cama</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Dieta</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">

                                    <select required name="provincia" id="provincia" onchange="cargarPueblos();">
              <!-- Hay que terminar los options -->
              <!-- 
                   Eliminado de value la llamada a la función,
                   si eso funciona lo desconocía, y aunque 
                   lo haga es totalmente innecesario, 
                   lo correcto es usar el evento onchange 
                -->
              <option value="">Seleccione una Dieta...</option>
          </select>


                                        <div class="select-dropdown"></div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>



                        <div class="form-row">
                            <div class="name">Variante</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select required name="pueblo" id="pueblo">
              <!-- Hay que terminar los options -->
              <!-- 
                   Eliminado de value la llamada a la función,
                   si eso funciona lo desconocía, y aunque 
                   lo haga es totalmente innecesario, 
                   lo correcto es usar el evento onchange 
                -->
              <option value="">Seleccione una Variante...</option>
          </select>


                                        <div class="select-dropdown"></div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>

                            <button class="btn btn--radius-2 btn--red" type="submit">Cargar Paciente</button>
                            <a  class="btn btn--radius-2 btn--red" href="index.php">Volver</a>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <script>

function cargarProvincias() {
    var array = ["General", "Sin_Sal", "Liviana", "Blanda", "Blanda_C_Pollo", "Astringente", "DBT", "Liquido", "Licuado"];
    array.sort();
    addOptions("provincia", array);
}


//Función para agregar opciones a un <select>.
function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    for (provincia in array) {
        var opcion = document.createElement("option");
        opcion.text = array[provincia];
        // Añadimos un value a los option para hacer mas facil escoger los pueblos
        opcion.value = array[provincia].toLowerCase()
        selector.add(opcion);
    }
}



function cargarPueblos() {
    // Objeto de provincias con pueblos
    var listaPueblos = {
      general: ["General","C/Postre Blando","Cortado","Desc","Acompañante Terapeutico",],
      sin_sal: ["Sin Sal","C/Postre Blando","C/Pollo o Carne Triturada",],
      liviana: ["Liviana","C/Postre Blando","C/Pollo o Carne Triturada",],
      blanda: ["Blanda"],
      blanda_c_pollo: ["Blanda C/Pollo"],
      astringente: ["Astringente","C/Postre Blando","C/Pollo o Carne Triturada",],
      dbt: ["DBT","C/Postre Blando","C/Pollo o Carne Triturada",],
      liquido: ["Liquido"],
      licuado: ["Licuado"]
    }
    
    var provincias = document.getElementById('provincia')
    var pueblos = document.getElementById('pueblo')
    var provinciaSeleccionada = provincias.value
    
    // Se limpian los pueblos
    pueblos.innerHTML = '<option value="">Seleccione una Dieta...</option>'
    
    if(provinciaSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      provinciaSeleccionada = listaPueblos[provinciaSeleccionada]
      provinciaSeleccionada.sort()
    
      // Insertamos los pueblos
      provinciaSeleccionada.forEach(function(pueblo){
        let opcion = document.createElement('option')
        opcion.value = pueblo
        opcion.text = pueblo
        pueblos.add(opcion)
      });
    }
    
  }
  
 // Iniciar la carga de provincias solo para comprobar que funciona
cargarProvincias();</script>


    <!-- Jquery JS-->
    <script src="carga_paciente/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="carga_paciente/vendor/select2/select2.min.js"></script>
    <script src="carga_paciente/vendor/datepicker/moment.min.js"></script>
    <script src="carga_paciente/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="carga_paciente/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->