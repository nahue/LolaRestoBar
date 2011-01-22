<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fechas
{

    function cambiaf_a_castellano($string)
    {
        if (!$string) return null;
        preg_match('#([0-9]{4})-([0-9]{2})-([0-9]{2})#', $string, $matches);

        return $matches[3] . "/" . $matches[2] . "/" . $matches[1];
    }
    
    ////////////////////////////////////////////////////
    //Convierte fecha de español a mysql
    ////////////////////////////////////////////////////
    function cambiaf_a_mysql($fecha)
    {
        preg_match("#([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{2,4})#", $fecha, $mifecha);
        $lafecha = $mifecha[3] . "-" . $mifecha[2] . "-" . $mifecha[1];
        return $lafecha;
    }

}

/* Fin del fichero */
/* No necesito cerrar PHP y de hecho no se recomienda para no insertar saltos de línea al final */
