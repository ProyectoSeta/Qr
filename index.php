<?php


include('consulta.php');
extract($_REQUEST);
$talonario = $_GET['id'];
$db = new Consulta($talonario);
$query=$db->Consulta();


$result=mysqli_num_rows($query);
$data=mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info - QR</title>
    <script src="{{ asset('jss/bundle.js') }}" defer></script>
    <link href="{{asset('css/datatable.min.css') }}" rel="stylesheet">
    <script src="{{asset('vendor/sweetalert.js') }}"></script>
    <script src="{{ asset('jss/jquery-3.5.1.js') }}" ></script>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="card w-75">
            <div class="row mx-3 mt-3 mb-4 d-flex align-items-center">
                <div class="col-sm-3 d-flex justify-content-center">
                    <img src="../GuiaC/public/assets/aragua.png" alt="" width="100px">
                </div>
                <div class="col-sm-6 d-flex flex-column text-center pt-4">
                    <span class="fs-6 fw-bold">GUÍA DE CIRCULACIÓN DE MINERALES NO METÁLICOS</span>
                    <span>GOBIERNO BOLIVARIANO DEL ESTADO ARAGUA <br>SERVICIO TRIBUTARIO DE ARAGUA (SETA)</span>
                </div>
                <div class="col-sm-3 d-flex justify-content-center">
                    <img src="../GuiaC/public/assets/logo-seta-2.png" alt="" class="mt-3 ms-2" width="110px">
                </div>
            </div>
            <div class="mb-4 mx-4" style="font-size:14px" id="content_info_guia">
                <div class="row d-flex justify-content-end mb-4">
                    <div class="col-sm-4 text-end fs-5 fw-bold text-muted">
                        
                        <?php 
                            $length = 6;
                            $formato_desde = substr(str_repeat(0, $length).$data["desde"], - $length);
                            $formato_hasta = substr(str_repeat(0, $length).$data["hasta"], - $length);
                        ?>
                        Desde: <span class="text-danger" id="nro_guia_view"><?php echo $formato_desde  ?></span><br>
                        Hasta: <span class="text-danger" id="nro_guia_view"><?php echo $formato_hasta  ?></span></span>
                    </div>
                </div>

                <div class="table-responsive">                    
                    <!-- DATOS DE LA EMPRESA Y CANTERA -->
                    <table class="table">
                        <tr>
                            <th>Razon Social:</th>
                            <td><?php echo $data["razon_social"]  ?></td>
                            <th>R.I.F.:</th>
                            <td><?php echo $data["rif_condicion"]  ?>-<?php echo $data["rif_nro"]  ?></td>
                        </tr>
                        <tr>
                            <th>Nombre de la Cantera:</th>
                            <td><?php echo $data["nombre"]  ?></td>
                            <th>Municipio y Parroquia:</th>
                            <td>Municipio <?php echo $data["municipio_cantera"]  ?>, Parroqruia <?php echo $data["parroquia_cantera"]  ?></td>
                        </tr>
                        <tr>
                            <th>Lugar de Aprovechamiento:</th>
                            <td colspan="3"><?php echo $data["lugar_aprovechamiento"]  ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

    
    

