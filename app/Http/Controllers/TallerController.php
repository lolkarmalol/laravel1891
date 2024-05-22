<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{
 public function esPrimo($num1){
    $cont=0;
    for($k=1;$k<=$num1;$k++){
if($num1 % $k==0){
$cont++;
}
}

if($cont==2){
    return 'es primo: ';
}
else {
    return 'no es primo: ';
}
 }

public function numerosAmigos ($num1, $num2){
    $suma1=0;
    $suma2=0;
    for ($i=0;$i < $num1;$i++){
        if($num1%$i==0){
            $suma1+=$i;
        }
    }

    for($k = 1; $k < $num2; $k++)
{
    if($num2%$k==0){
        $suma2+=$k;
    }
}

if ($suma1==$suma2 && $suma2==$num1){
return 'son amigos';
}
else{
    return ' no son amigos';
}
}
}



