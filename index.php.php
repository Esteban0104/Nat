<?php
    $preunta1 =_POST['PreguntaUno'];
    $preunta2 =_POST['PreguntaDos'];
    $preunta3 =_POST['PreguntaTres'];
    $preunta4 =_POST['PreguntaCuatro'];
    $preunta5 =_POST['PreguntaCinco'];
    $mensaje = "";
    $puntos = 0;

    if($preunta1 == "v"){
        $puntos = $puntos +1;

    }
    if($preunta2 == "v"){
        $puntos = $puntos +1;

    }
    if($preunta3 == "v"){
        $puntos = $puntos +1;

    }
    if($preunta4 == "v"){
        $puntos = $puntos +1;

    }
    if($preunta5 == "v"){
        $puntos = $puntos +1;

    }
    if($puntos == 3){
        $mensaje = "Es igual a 3";
    }
    echo "Termino: $puntos <br>$mensaje <br>";
?>