<?php
include('conex.php');


class  Consulta{
    public function Consulta(){
        $conex = mysqli_connect("localhost","root","","guia_mnm","3306 ");
        $query=mysqli_query($conex,"SELECT detalle_talonarios.desde, detalle_talonarios.hasta,
            talonarios.id_solicitud, sujeto_pasivos.razon_social, sujeto_pasivos.rif_condicion, 
            sujeto_pasivos.rif_nro, canteras.nombre, canteras.municipio_cantera, 
            canteras.parroquia_cantera, canteras.lugar_aprovechamiento 
            FROM detalle_talonarios  
            INNER JOIN sujeto_pasivos ON detalle_talonarios.id_sujeto = sujeto_pasivos.id_sujeto 
            INNER JOIN canteras ON detalle_talonarios.id_cantera = canteras.id_cantera 
            INNER JOIN talonarios ON detalle_talonarios.id_talonario = talonarios.id_talonario 
            WHERE detalle_talonarios.id_talonario = $talonario");

            return $query;
        }
    }

?>