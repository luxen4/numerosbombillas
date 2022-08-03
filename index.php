<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php


//nº2

$bombilla2=array('fila'=>0, 'columna'=>1);
$bombilla3=array('fila'=>0, 'columna'=>2);
$bombilla4=array('fila'=>0, 'columna'=>3);
$bombilla5=array('fila'=>0, 'columna'=>4);
$bombilla6=array('fila'=>0, 'columna'=>5);

$bombilla8=array('fila'=>1, 'columna'=>0);
$bombilla9=array('fila'=>1, 'columna'=>1);
$bombilla10=array('fila'=>1, 'columna'=>2);
$bombilla11=array('fila'=>1, 'columna'=>3);
$bombilla12=array('fila'=>1, 'columna'=>4);
$bombilla13=array('fila'=>1, 'columna'=>5);
$bombilla14=array('fila'=>1, 'columna'=>6);

$bombilla15=array('fila'=>2, 'columna'=>0);
$bombilla16=array('fila'=>2, 'columna'=>1);
$bombilla20=array('fila'=>2, 'columna'=>5);
$bombilla21=array('fila'=>2, 'columna'=>6);




for($i=0; $i<=10; $i++){ ?>
    <div style="display: flex"><?php
        for($k=0; $k<=6; $k++){ 
            
            if($i==0){
                if( $i==$bombilla2['fila'] && $k==$bombilla2['columna'] || 
                    $i==$bombilla3['fila'] && $k==$bombilla3['columna'] ||
                    $i==$bombilla4['fila'] && $k==$bombilla4['columna'] || 
                    $i==$bombilla5['fila'] && $k==$bombilla5['columna'] ||
                    $i==$bombilla6['fila'] && $k==$bombilla6['columna']){ ?>

                    <div style="width: 25px; height:25px; border:1px solid black; border-radius:1em; background-color:red;"></div><?php
                }else{ ?>
                    <div style="width: 25px; height:25px; border:1px solid black; border-radius:1em"></div><?php
                }
            }


            if($i==1){
                if( $i==$bombilla8['fila'] && $k==$bombilla8['columna'] || 
                    $i==$bombilla9['fila'] && $k==$bombilla9['columna'] ||
                    $i==$bombilla10['fila'] && $k==$bombilla10['columna'] || 
                    $i==$bombilla11['fila'] && $k==$bombilla11['columna'] ||
                    $i==$bombilla12['fila'] && $k==$bombilla12['columna'] ||
                    $i==$bombilla13['fila'] && $k==$bombilla13['columna'] ||
                    $i==$bombilla14['fila'] && $k==$bombilla14['columna']){ ?>

                    <div style="width: 25px; height:25px; border:1px solid black; border-radius:1em; background-color:red;"></div><?php
                }else{ ?>
                    <div style="width: 25px; height:25px; border:1px solid black; border-radius:1em"></div><?php
                }
            }

            if($i==2){
                if( $i==$bombilla15['fila'] && $k==$bombilla15['columna'] || 
                    $i==$bombilla16['fila'] && $k==$bombilla16['columna'] ||
                    $i==$bombilla20['fila'] && $k==$bombilla20['columna'] ||
                    $i==$bombilla21['fila'] && $k==$bombilla21['columna']){ ?>

                    <div style="width: 25px; height:25px; border:1px solid black; border-radius:1em; background-color:red;"></div><?php
                }else{ ?>
                    <div style="width: 25px; height:25px; border:1px solid black; border-radius:1em"></div><?php
                }
            }

           
} ?></div><?php
}?> </div>



 
    
</body>
</html>

<style>
    
</style>