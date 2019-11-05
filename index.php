<html>
<head>
</head>
<body>
<?php
// echo "testeando\n";
// $a=["hola","como","estas"];
//  $b=[
//      "perro"=> "Luna",
//       "mergus" => "Tomas",
//     ];
// // print_r($b);
// // echo "\n";
// echo "\n";
// var_dump($b);
// echo "ejercicio\n";
$persona = [
    "Nombre" => "Jon",
    "Apellido" => "Snow",
    "Edad" => 27,
    "Hobbies" => ["Netflix","Fútbol","Programar"],
];
var_dump($persona);
echo "\n";
$persona["Edad"]=25;
var_dump($persona);
echo "\n";
$persona["Dirección"] = "Winterfell";
$persona["Hobbies"] = ["Netflix","Fútbol","Programar","Dragonslayer de tias"];
var_dump($persona);
echo "\n";
//ejercidio 2
$var= 1;
$var2= 2;
echo "\n";
if ($var > $var2){
    echo "El numero mayor es N: ", $var;
    } else {
        echo "El numero menor es N: ", $var; 
    }
echo "\n";
//ejercicio 3 y 4
$valor = rand(1,5);
if ($valor == 3 || $valor == 5) {
    echo "El valor es: ",$valor;
} else if ($valor !=3 || $valor !=5){
    echo "El numero NO es 3";
}
echo "\n";
//ejercicio 5
$valor1 = rand(1,100);
if ($valor1 >50){
    echo "El numero es mayor a 50";
    echo "\n";
} else if ($valor1 <50) {
    echo "El numero es menor a 50";
    echo "\n";
} else {
    echo "El numero es 50\n";
    echo "\n";
}
//ejercicio 5
$nombreDeUsuario;
$contraseñaDeUsuario;

if ($nombreDeUsuario == "admin" && $contraseñaDeUsuario =="1234") {
    echo "Bienvenido"; 
} else {
    echo "Error en login";
}
//ejercicio 6
$nombreDeUsuario;
$contraseñaDeUsuario;

if ($nombreDeUsuario == "admin" && $contraseñaDeUsuario =="1234") {
    echo "Bienvenido"; 
} elseif ($nombreDeUsuario != "admin") {
    echo "Error en Usuario";
} elseif ($contraseñaDeUsuario != "1234"){
    echo "Error en Contraseña";
}
$edad=integer;
$casado=boolean;
$sexo=string;
if ($edad >= 18 && $casado != true) {
    echo "Bienvenido";
}
// ejercicio 6b
if (($edad >= 18 && $casado != true) || $sexo == "Otro" || $sexo == "otro") {
    echo "Bienvenido";
}
//ejercicio 7
$cantidadDeAlumnos= 50;


if ($cantidadDeAlumnos) {

    echo “true”;
    
    }
    
    else {
    
    echo “false”;
    
    }
    // todo es true menos 0
    // ejercicio 8
    
?>
</body>
</html>