<script src="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.css" rel="stylesheet" />    
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="<?php echo URL ?>Views/ubicacion/grafica_datos.js" type="text/javascript"></script>
<link href="<?php echo URL ?>Views/ubicacion/mapa.css" rel="stylesheet" type="text/css"/>
<div class="container" > 
    <div class="">
        <div id="map"></div>
    </div>
    <div class="">
        <button id='btn_infectados' onclick="get_features()" type="button" class="btn btn-danger">listar infectados</button>
        <?php
        while ($row = mysqli_fetch_array($datos)) {
            $json[] = array(
                'latitud' => $row['latitud'],
                'longitud' => $row['longitud']
            );
        }
        ?>
        <input style="display: none" id="input_cordenadas_json"value='<?php echo json_encode($json); ?>'>
    </div>
    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
</div> 
<script src="<?php echo URL ?>Views/ubicacion/ubicacion.js" type="text/javascript"></script>

