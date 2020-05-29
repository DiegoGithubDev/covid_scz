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
            <button id='btn_infectados' onclick="imprimir()" type="button" class="btn btn-danger">listar infectados</button>    
        </div>
    </div> 
    <?php echo var_dump($datos)?>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZGllZ29tYW5zaWxsYSIsImEiOiJja2Fwd3dzazMwM3o2MnlzMDZ5ZnA0aHZrIn0.pxaN-LPlpHRFOrlSwJgtMg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-63.179177, -17.78450],
        zoom: 11
    });
    var geojson = {
        type: 'FeatureCollection',
        features: [{
          type: 'Feature',
          geometry: {
            type: 'Point',
            coordinates: [-63.17008885934308, -17.759125881754017]
          },
          properties: {
            title: 'Mapbox',
            description: 'Washington, D.C.'
          }
        },
        {
          type: 'Feature',
          geometry: {
            type: 'Point',
            coordinates: [-63.175708113454675,-17.77039180290012]
          },
          properties: {
             'marker-color': '#3bb2d0',
                'marker-size': 'large',
                'marker-symbol': 'rocket'
          }
        },
        {
          type: 'Feature',
          geometry: {
            type: 'Point',
            coordinates: [-63.17097610999235,-17.791513491304954]
          },
          properties: {
            title: 'Mapbox',
            description: 'San Francisco, California'
          }
        }]
      };
      
        // add markers to map
        geojson.features.forEach(function(marker) {
            // create a HTML element for each feature
            var el = document.createElement('div');
            el.className = 'marker';

            // make a marker for each feature and add to the map
            new mapboxgl.Marker(el)
              .setLngLat(marker.geometry.coordinates)
              .addTo(map);
        });

    /*var marker = new mapboxgl.Marker()
    .setLngLat([-63.179177, -17.78450])
    .addTo(map);
    
    map.addControl(
        new mapboxgl.GeolocateControl({
            positionOptions: {
                enableHighAccuracy: true
            },
            trackUserLocation: true
        })
    );*/
    map.on('click', function(e) {
        console.log(e.point);
        console.log(e.lngLat.wrap());
        //document.getElementById('info').innerHTML =
        // e.point is the x, y coordinates of the mousemove event relative
        // to the top-left corner of the map
        
        //JSON.stringify(e.point) +
        //'<br />' +
        // e.lngLat is the longitude, latitude geographical position of the event
        //JSON.stringify(e.lngLat.wrap());
    });
    /*function listar_infectados(){
        $.ajax({
            type: "POST",
            url: 'login.php',
            data: '',
            success: function(response)
            {
                var jsonData = JSON.parse(response);
 
                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData)
                {
                    console.log(jsonData);
                }
                else
                {
                    console.log('no existe datos': jsonData);
                }
           }
       });
    }
     */
    function imprimir(){
         console.log("ingresando function imprimir");
        $.ajax({
            type:"POST",
            url:'index',
            data:'',
            dataType: 'JSON',
            success: function(response) 
            {    
                console.log("imprimiendo response = "+response);
                //var jsonData = JSON.parse(response);
                //console.log(jsonData);
            }
        });
        console.log("finalizando imprimir");
    }
</script>
    