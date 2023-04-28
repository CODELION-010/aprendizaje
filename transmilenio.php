<?php

include 'transmilenio.html';

define ('USNR' , 2950);
define ('USSIV' , 2500);
define ('USAM' , 2200);

$saldo = 0;

if ($_POST) {
    $select = $_POST['select'];
     $saldo = $_POST['saldo'];
    
    switch ($select) {
        case 'USNR':
            if ($_POST['saldo'] < USNR) {
                echo "Saldo insuficiente para viajar en Transmilenio";
            } else{
         echo 'usted es usuario no registrado y
         el valor de su pasaje es ' . USNR . 'y su saldo AHORA
         es de ' . $_POST['saldo'] - USNR;
        }

         break;
        
        case 'USSIV':
            if ($_POST['saldo'] < USSIV) {
                echo "Saldo insuficiente para viajar en Transmilenio";
            } else{
         echo 'usted es usuario Sisben IV y
         el valor de su pasaje es ' . USSIV . 'y su saldo AHORA
         es de ' . $_POST['saldo'] - USSIV;
        }
        
            break;

        case 'USAM':
            if ($_POST['saldo'] >= USAM) {
                echo 'usted es usuario Sisben IV y
                el valor de su pasaje es ' . USAM . 'y su saldo AHORA
                es de ' . $_POST['saldo'] - USAM;
            } else{
         echo 'Estimado Cliente, no tiene saldo, 
         por favor recargue para utilizar el sistema';
        }
            
            break;

        }
    
}


?>