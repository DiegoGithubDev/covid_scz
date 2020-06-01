window.onload = function () {
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
            coordinates: [-63.17009885934309,-17.77039180290012]
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
     };     
    function get_json_from_input(){
        var string_json= $('#input_cordenadas_json').val();
        var json =JSON.parse(string_json);
        //console.log(geojson);
        //create_fictures2(json);
        return json;
    }
    function get_features(){
        //console.log(geojson["features"]);
        //console.log(get_features()[0].geometry.coordinates[0]);
        var geojson = {
            type: 'FeatureCollection',
            features:create_fictures2( get_json_from_input() )
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
        console.log(create_fictures2(get_json_from_input()));
        return create_fictures2( get_json_from_input() );
    }

    function create_fictures2(json_ubicacion){
        var vecto_of_json = [];
        $.each(json_ubicacion, function(idx, obj) {
            var json ={"type":"Feature",
                        "geometry":{"type":"Point",
                                    "coordinates":[Number(obj.latitud), Number(obj.longitud)]
                                    },
                        "properties":{"title":"Mapbox",
                                      "description": "San Francisco California"
                                     }
                       };
            vecto_of_json.push(json);
        });
        //var  obj_json = JSON.parse(vecto_of_json);
        //console.log(vecto_of_json);
        return vecto_of_json;
    }
    
     /*   
        var object_features= 
                {
                    type: 'Feature',
                    geometry: {
                      type: 'Point',
                      coordinates: [-63.17008885934308, -17.759125881754017]
                    },
                    properties: {
                      title: 'Mapbox',
                      description: 'Washington, D.C.'
                    }
                };
    }
*/

    function create_fictures(json_ubicacion){
        var text = "";
        $.each(json_ubicacion, function(idx, obj) {
            text = '{ "features" : [' +
                                    '{ "type":"Feature" ,\n\
                                       "geometry":' +`{"type":"Point",
                                                       "coordinates": [${obj.latitud}, ${obj.longitud}]
                                                      }`+
                                     '},'+
                                             
                                     '{ "properties":'+`{"title": "Mapbox",
                                                         "description": "San Francisco California"
                                                        }`+
                                      '}'+
                        ']}';  
        });
        var  obj_json = JSON.parse(text);
        console.log(obj_json);
    }
    function imprimir(){
         console.log("ingresando function imprimir");
       /* $.ajax({
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
        console.log("finalizando imprimir");*/
        
    }


