<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  

  <form name="f1"> 
    <select name=dietas2 onchange="cambia_dieta()"> 
    <option value="0" selected>Seleccione... 
    <option value="1">Sin Sal
    <option value="2">Liviana 
    <option value="3">Blanca 
    <option value="4">DBT 
    </select>
    
    <select name=dieta> 
    <option value="-">- 
    </select> 
  </form>


  <script>
  var dietas_1=new Array("-","Andalucía","Asturias","Baleares","Canarias","Castilla y León","Castilla-La Mancha","...");
  var dietas_2=new Array("-","Salta","San Juan","San Luis","La Rioja","La Pampa","...");
  var dietas_3=new Array("-","Cali","Santamarta","Medellin","Cartagena","...");
  var dietas_4=new Array("-","Aisne","Creuse","Dordogne","Essonne","Gironde ","...");

  var todasdietas = [
    [],
    dietas_1,
    dietas_2,
    dietas_3,
    dietas_4,
  ];

  function cambia_dieta(){ 
   	//tomo el valor del select del dietas2 elegido 
   	var dietas2 
   	dietas2 = document.f1.dietas2[document.f1.dietas2.selectedIndex].value 
   	//miro a ver si el dietas2 está definido 
   	if (dietas2 != 0) { 
      	//si estaba definido, entonces coloco las opciones de la dieta correspondiente. 
      	//selecciono el array de dieta adecuado 
      	mis_dietas=todasdietas[dietas2]
      	//calculo el numero de dietas 
      	num_dietas = mis_dietas.length 
      	//marco el número de dietas en el select 
      	document.f1.dieta.length = num_dietas 
      	//para cada dieta del array, la introduzco en el select 
      	for(i=0;i<num_dietas;i++){ 
         	document.f1.dieta.options[i].value=mis_dietas[i] 
         	document.f1.dieta.options[i].text=mis_dietas[i] 
      	}	
   	}else{ 
      	//si no había dieta seleccionada, elimino las dietas del select 
      	document.f1.dieta.length = 1 
      	//coloco un guión en la única opción que he dejado 
      	document.f1.dieta.options[0].value = "-" 
      	document.f1.dieta.options[0].text = "-" 
   	} 
   	//marco como seleccionada la opción primera de dieta 
   	document.f1.dieta.options[0].selected = true 
}

  </script>
</body>
</html>