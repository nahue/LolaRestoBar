<?php

function cambiaf_a_castellano($string)
    {
        if (!$string) return null;
        preg_match('#([0-9]{4})-([0-9]{2})-([0-9]{2})#', $string, $matches);

        return $matches[3] . "/" . $matches[2] . "/" . $matches[1];
    }
    function cambiaf_a_mysql($fecha)
    {
        preg_match("#([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{2,4})#", $fecha, $mifecha);
        $lafecha = $mifecha[3] . "-" . $mifecha[2] . "-" . $mifecha[1];
        return $lafecha;
    }
    
    echo cambiaf_a_mysql("18/01/2011");