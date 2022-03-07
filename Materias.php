<?php
$matematicas=$_POST['matematicas'];
$español=$_POST['español'];
$historia=$_POST['historia'];
$quimica=$_POST['quimica'];
$fisica=$_POST['fisica'];

$promedio=($matematicas+$español+$historia+$quimica+$fisica)/5;


if ($promedio >= 90) {

    echo "Tu promedio es $promedio , Eres buen alumno.";
    
    } else if ($promedio<90 && $promedio>=80) {
    
        echo "Tu promedio es $promedio , Vas bien pero debes mejorar.";
    
    } else if ($promedio>=70 && $promedio<80) {
    
        echo "Tu promedio es $promedio , Estas aprobando de panzazo.";
    
    } else if ($promedio<70 ) {
    
        echo "Tu promedio es $promedio , Ya fuiste...";
    
    }



?>