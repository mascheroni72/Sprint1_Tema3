<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function comprobarCaracter (array $disciplinas, string $caracter){
    
    foreach ($disciplinas as $disciplina) { 
        if (str_contains ($disciplina, $caracter)){ 
            return true;
        }else{ 
            break;
        }
    }
}
$disciplinas = array ("musica","pintura", "literatura"); 
$caracter = 'i'; 
$resultado = comprobarCaracter($disciplinas,$caracter); 

        if ($resultado == true){
            echo "true" . "<br>";
        } else {
            echo "false" . "<br>"; 
        }
$disciplinas = array ("musica","pintura", "literatura");
$caracter = "r"; 
$resultado = comprobarCaracter($disciplinas, $caracter);
          
        if ($resultado == true){
            echo "true". "<br>";
        } else {
            echo "false" . "<br>"; 
        }
?>
</body>
</html>