<script src="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.css" rel="stylesheet" />    
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="<?php echo URL ?>Views/ubicacion/grafica_datos.js" type="text/javascript"></script>
<link href="<?php echo URL ?>Views/ubicacion/mapa.css" rel="stylesheet" type="text/css"/>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<div class="container" style="padding: 20px 15px 0"> 
    <div class="card border-secondary mb-3" >
        <h3 class="card-header">Ubicacion de contagios</h3>
        <div id="map"></div>
        <div class="card-footer text-muted">
            <button id='btn_infectados' onclick="get_features()" type="button" class="btn btn-danger">listar infectados</button>
            Datos generados por los ciudadanos de SCZ.Por favor utilize la aplicacion de manera responsable
            recuerda que la informacion puede ayudarnos a prevenir los contagios de covid-19.
        </div>
    </div>
    <div class="">
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
    <div class="card border-secondary mb-3" >
        <h3 class="card-header">Curva de infectados</h3>
        <div class="card-body">
            <div id="chartContainer" style="height: 350px; width: 100%;"></div>
        </div>
        <div class="card-footer text-muted">
            Datos oficiales de Bolvia
        </div>
    </div>
    <div class="card border-secondary mb-3" >
        <h3 class="card-header">Curva de recuperados</h3>
        <div class="card-body">
            <canvas id="myChart" style="height: 350px; width: 100%;"></canvas>
        </div>
        <div class="card-footer text-muted">
            Datos oficiales de Bolvia
        </div>
    </div>
</div> 
<script src="<?php echo URL ?>Views/ubicacion/ubicacion.js" type="text/javascript"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
        datasets: [{
            label: 'My First dataset',
            borderColor: 'rgb(10,171,42)',
            data: [0, 10, 15, 22, 25, 30, 40]
        }]
    },

    // Configuration options go here
    options: {}
});


</script>
