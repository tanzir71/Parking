<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Places Searchbox</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map_canvas {
        height: 600px;
      }
      
    </style>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <body>

<input type="text" id="address" size="40"><br><br>
<input type="text" id="lat" size="40"><br><br>
<input type="text" id="lng" size="40"><br><br>

    <input id="search_city" class="controls" type="text" placeholder="Search Box1"><br>

    <div id="map_canvas"></div>


  <script>
    var map;
    var geocoder;

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map_canvas'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 3,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.

        var input = document.getElementById('search_city');


        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location,
              zoom: 16
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        }); //end of auto search



        geocoder = new google.maps.Geocoder();
        google.maps.event.addListener(map, 'click', function(event) {
            placeMarker(event.latLng);
        });

        var marker;
        function placeMarker(location) {
            if(marker){ //on vérifie si le marqueur existe
                marker.setPosition(location); //on change sa position
            }else{
                marker = new google.maps.Marker({ //on créé le marqueur
                    position: location, 
                    map: map
                });
            }
            document.getElementById('lat').value=location.lat();
            document.getElementById('lng').value=location.lng();
            getAddress(location);
        }

        function getAddress(latLng) {
          geocoder.geocode( {'latLng': latLng},
          function(results, status) {
              if(status == google.maps.GeocoderStatus.OK) {
                if(results[0]) {
                  document.getElementById("address").value = results[0].formatted_address;
                }
                else {
                  document.getElementById("address").value = "No results";
                }
              }
              else {
                document.getElementById("address").value = status;
              }
            });
        }//end 

      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKf3D0CKv98W_EGTk5QfKANDh0CZuAlNc&libraries=places&callback=initAutocomplete"
         async defer></script>
  </body>
</html>