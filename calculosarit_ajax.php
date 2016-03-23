<?php

require 'funciones.php';
/*
 * var_dump($_POST);
echo $_POST["val_a"];
echo $_POST["val_b"];
echo $_POST["operacion"];
*/
/*validación del envio del INPUT*/
if (!isset($_POST["val_a"])|| !isset($_POST["val_b"])) {
    echo json_encode("No fue recibida la variable de A o B");  
    exit();
}
    
   

/*validación del envio del envio de valores*/
if ($_POST["val_a"]=="" || $_POST["val_b"]=="")
    {
    echo json_encode("No envió el valor de A o B");  
    exit();
}

$valA=$_POST["val_a"];
$valB=$_POST["val_b"];
$oper=$_POST["operacion"];


switch($oper){
case "+": $resultado=  sumar($valA,$valB);
                break;
    case "-":$resultado=restar($valA,$valB);
                break;
    case "*": $resultado=  multiplicar($valA,$valB);
                break;
    case "/":$resultado=  dividir($valA,$valB);
                break;
    default: $resultado="Simbolo no registrado";
}

/*respuesta en formato AJAX(JSON)*/
echo json_encode("El resultado de $valA $oper $valB es $resultado");

exit();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

