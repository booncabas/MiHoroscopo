<?php

function convertir($fecha) {
    $vec_fecha= explode('/', $fecha);
    if (count($vec_fecha)==2) {
        $dia=$vec_fecha[0];
        $mes=$vec_fecha[1];
        if (validar_fecha($mes, $dia)) {
            if ($mes == 1){
                if ($dia >= 21 ) { $cadena = 'ACUARIO'; }
                else{ $cadena = 'CAPRICORNIO'; }
            }
            elseif ($mes == 2) {
                if ($dia >= 19) { $cadena = 'PISCIS'; }
                else{ $cadena = 'ACUARIO'; }
            }
            elseif ($mes == 3) {
                if ($dia >= 21) { $cadena = 'ARIES'; }
                else{ $cadena = 'PISCIS'; }
            }
            elseif ($mes == 4) {
                if ($dia >= 21) { $cadena = 'TAURO'; }
                else{ $cadena = 'ARIES'; }
            }
            elseif ($mes == 5) {
                if ($dia >= 22) { $cadena = 'GEMINIS'; }
                else{ $cadena = 'TAURO'; }
            }
            elseif ($mes == 6) {
                if ($dia >= 22) { $cadena = 'CANCER'; }
                else{ $cadena = 'GEMINIS'; }
            }
            elseif ($mes == 7) {
                if ($dia >= 23) { $cadena = 'LEO'; }
                else{ $cadena = 'CANCER'; }
            }
            elseif ($mes == 8) {
                if ($dia >= 24) { $cadena = 'VIRGO'; }
                else{ $cadena = 'LEO'; }
            }
            elseif ($mes == 9) {
                if ($dia >= 24) { $cadena = 'LIBRA'; }
                else{ $cadena = 'VIRGO'; }
            }
            elseif ($mes == 10) {
                if ($dia >= 24) { $cadena = 'ESCORPION'; }
                else{ $cadena = 'LIBRA'; }
            }
            elseif ($mes == 11) {
                if ($dia >= 23) { $cadena = 'SAGITARIO'; }
                else{ $cadena = 'ESCORPION'; }
            }
            elseif ($mes == 12) {
                if ($dia >= 22) { $cadena = 'CAPRICORNIO'; }
                else{ $cadena = 'SAGITARIO'; }
            }
        
        }
        else {
            $cadena = 'Error en la fecha';
        }
            
    }//FIN SI FECHA CORRECTA
    else {
        $cadena = 'Error en la fecha';
    }
    return $cadena;
}

function validar_fecha($mes, $dia) {
    $resp = false;
    if ($mes > 0 && $mes <= 12) {
        if ($mes == 1){
            if ($dia > 0 && $dia <= 31 ) { $resp = true; }
        }
        elseif ($mes == 2) {
            if ($dia > 0 && $dia <= 29 ) { $resp = true; }
        }
        elseif ($mes == 3) {
            if ($dia > 0 && $dia <= 31 ) { $resp = true; }
        }
        elseif ($mes == 4) {
            if ($dia > 0 && $dia <= 30 ) { $resp = true; }
        }
        elseif ($mes == 5) {
            if ($dia > 0 && $dia <= 31 ) { $resp = true; }
        }
        elseif ($mes == 6) {
            if ($dia > 0 && $dia <= 30 ) { $resp = true; }
        }
        elseif ($mes == 7) {
            if ($dia > 0 && $dia <= 31 ) { $resp = true; }
        }
        elseif ($mes == 8) {
            if ($dia > 0 && $dia <= 31 ) { $resp = true; }
        }
        elseif ($mes == 9) {
            if ($dia > 0 && $dia <= 30 ) { $resp = true; }
        }
        elseif ($mes == 10) {
            if ($dia > 0 && $dia <= 31 ) { $resp = true; }
        }
        elseif ($mes == 11) {
            if ($dia > 0 && $dia <= 30 ) { $resp = true; }
        }
        elseif ($mes == 12) {
            if ($dia > 0 && $dia <= 31 ) { $resp = true; }
        }
        
    }
    return $resp;

}//fin validar fecha

//Acuario (21 de enero-18 de febrero) 
//Piscis (19 de febrero-20 de marzo)
//Aries (21 de marzo-20 de abril)
//Tauro (21 de abril- 21 de mayo)
//Géminis (22 de mayo-21 de junio) 
//Cáncer (22 de junio-22 de julio) 
//Leo (23 de julio-23 de agosto) 
//Virgo (24 de agosto-23 de septiembre) 
//Libra (24 de septiembre-23 de octubre) 
//Escorpión (24 de octubre-22 de noviembre) 
//Sagitario (23 de noviembre-21 de diciembre) 
//Capricornio (22 de diciembre-20 de enero)
 
// just addin some test for git




