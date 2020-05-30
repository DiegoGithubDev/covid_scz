<script src="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.css" rel="stylesheet" />    
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
       .marker {
            background-image: url('https://cdn.pixabay.com/photo/2020/04/29/08/24/coronavirus-5107804_960_720.png');
            background-size: cover;
            width: 22px;
            height: 22px;
            cursor: pointer;
        }
    </style>
    <h3 id="info">My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div class="container" > 
        <div class="">
             <div id="map"></div>
        </div>
        <div class="">
            <button id='btn_infectados' onclick="get_features()" type="button" class="btn btn-danger">listar infectados</button>
            <?php while ($row = mysqli_fetch_array($datos)) {
                    $json[]=array(
                                'latitud'=>$row['latitud'],
                                'longitud'=>$row['longitud']
                            ); 
            }?>
            <input id="input_cordenadas_json"value='<?php echo json_encode($json); ?>'>
        </div>
    </div> 
<script src="<?php echo URL ?>Views/ubicacion/ubicacion.js" type="text/javascript"></script>