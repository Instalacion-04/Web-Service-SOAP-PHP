<?php
require_once "lib/nusoap.php";

function getAlumnos( $datos )
{
    if ( $datos == "Alumno" ) {
        return join( ",", array(
            "Alexis Castillejos Montreal",
            "Fernando del Solar",
            "Carlos Hernandez Lopez",
            "Zacarias Tercero",
            "Carlos Quinto",
            "Juan Gonzales" ) );

    } else {
        return "No hay alumos";
    }
}

$server = new soap_server();
$server->register( "getAlumnos" );
if ( !isset( $HTTP_RAW_POST_DATA ) ) 
    $HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
$server->service( $HTTP_RAW_POST_DATA );

?>