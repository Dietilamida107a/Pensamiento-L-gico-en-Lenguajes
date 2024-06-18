<?php

//tener una lista de ciudades con un clima y una ubicacion especifica

  //definir una funcion + de nombre recomendacion + que no recibe ningun parametro
  function recomendacion() {
    
    //asignacion de valor a nivel de clima
    $clima = array (
      "Bogota" => "frio", "Monteria" => "calido", "Medellin" => "templado");

    //asignacion de valor a nivel de ubicacion
    $ubicacion = array ("Guajira" => "norte", "Leticia" => "sur", "Santander" => "este", "Antioquia" => "oeste"
    );
  
    //asignacion de valor a nivel de turismo
    $turismo = array ("Santa Marta" => "mar", "Villavicencio" => "llano", "Richardson" => "desierto", "Quindi" => "valle");

    //condicion sobre la cual se hace la busqueda (en caso de que la condicion sea clima, ubicacion o turismo)
    switch("turismo") {
      
      //el caso se abre con case y se cierra con break
      case "clima":
        //imprimir una busqueda que cumpla con frio dentro de clima
        echo array_search("frio", $clima);
      //indica hasta donde termina el caso
      break;
      
      case "ubicacion":
        echo array_search("norte", $ubicacion);
      break;

      case "turismo":
        echo array_search("mar", $turismo);
      break;

    }
  }

  recomendacion();
?>