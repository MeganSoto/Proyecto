<?php
 $Valor1=$_POST['n1'];
 $Valor2=$_POST['n2'];
 $Operacion=$_POST['operacion'];
 $resultado;
 
  
  if($Operacion =='suma')
  {
   $resultado=($Valor1 + $Valor2);
  }
   if($Operacion == 'resta')
  {
  $resultado=($Valor1 - $Valor2);
  }
   if($Operacion == 'multiplicaci�n')
  {
  $resultado=($Valor1 * $Valor2);
  }
   if($Operacion == 'divisi�n')
  {
  $resultado=($Valor1 / $Valor2);
  }
 
?>