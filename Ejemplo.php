<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "Demo PHP" ?></title>
</head>

<body>
  <?php
  $numero1 = 25;
  $numero2 = 45;

  $suma = $numero1 + $numero2;

  echo $suma;
  echo "<br>";
  $edad = 38;

  if ($edad < 17) {
    echo "es menor de edad";
  } else {
    echo "es mayor de edad";
  }
  echo "<br>";
  $dia = 6;

  switch ($dia) {
    case '1':
      echo "Lunes";
      break;
    case '2':
      echo "Martes";
      break;
    case '3':
      echo "Miercoles";
      break;
    case '4':
      echo "Jueves";
    case '5':
      echo "Viernes";
      break;
    case '6':
      echo "Sabado";
      break;
    case '7':
      echo "Sabado";
      break;

    default:
      echo "Este dia es una mentira";
      break;
  }

  $resultado = sumar(5,6);

  function sumar ($a, $b){
    return $a + $b;
  }

  echo "<br>";
  echo $resultado;

  echo "<br>";

  $verdadero = !false;

  $nombre= "Jesus";
  
  var_dump($verdadero);
  var_dump($resultado);
  var_dump($nombre);

  echo "<br>";

//   $arreglo = ['Lunes', 
//   'Martes', 
//   'Miercoles', 
//   'Jueves', 
//   'Viernes'
// ];

//   $arreglo.array_push();

//   var_dump($arreglo);

//   for ($i=0; $i < count($arreglo) ; $i++) { 
//     echo "<br>";
//     echo "El dia es: ".$arreglo[$i];
//   }

  $arreglo = [];

  // $arreglo.array_push();

  $dias = [
      'Lunes',
      'Martes',
      'Miercoles',
      'Jueves',
      'Viernes', 
      'Sabado',
      'Domingo
      
      '
    ];
  for ($i=0; $i < count($dias) ; $i++) {
    $arreglo[] = $dias[$i];
  }
  var_dump($arreglo);
  for ($i=0; $i < count($arreglo) ; $i++) { 
    echo "<br>";
    echo "El dia es: ".$arreglo[$i];
  }
  


  ?>
</body>

</html>