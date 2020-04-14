<?php
    $valor1= $_POST['n1'];
    $valor2= $_POST['n2'];
    $op=$_POST['operacion'];

    if($op==1){
        ECHO "la suma es: ".($valor1+$valor2);
	}

    if($op==2){
        ECHO "la resta es: ".($valor1-$valor2);
	}

    if($op==3){
        ECHO "la multiplicacion es: ".($valor1*$valor2);
	}

    if($op==4){
        ECHO "la division es: ".($valor1/$valor2);
	}
?>