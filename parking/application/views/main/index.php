<div class="navbar-section">
    <nav class="navbar navbar-inverse find-park-nav" role="navigation">
        <div class="container" style="margin-top: 110px">
            
            <div class="collapse-in navbar-collapse navbar-ex1-collapse">
                <form class="navbar-form text-center" role="search" id="location_search">
                    <div class="form-group">
                        <input type="text" id="location_input" autofocus="1" placeholder="Enter location" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" id="from" class="picker" placeholder="Check In">
                    </div>
                    <button type="submit" id="final_search">Search <img src="<?php echo base_url() ?>assets/images/icons/search.png" alt="" /> </button>
                </form>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>

<div id="demo"></div>

<div class="search-content blog-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="side-widget space30">
                    <div class="side-cat2" style="padding: 10px">
                        <div id="maps" style="min-height: 580px"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 dir-search" id="test-list">

              <p id="current_location"></p>
              <div class="lists">
                <div id="filterig_result" class="list"></div>
              </div>

              <ul class="pagination"></ul>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
/*
var monkeyList = new List('test-list', {
  valueNames: ['name'],
  page: 3,
  pagination: true
});
*/







var map, infoWindow;
function initAutocomplete() {
    map = new google.maps.Map(document.getElementById('maps'), {
      //center: {lat: 23.81054861928934, lng: 90.41211605072021},
      //zoom: 10,gestureHandling: 'greedy'
    });
    infoWindows = new google.maps.Marker;

    // Try HTML5 geolocation.
      navigator.geolocation.getCurrentPosition(function(position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
          //showpos(position.coords.latitude,position.coords.longitude); //the function call the ajax
          codeLatLng(position.coords.latitude,position.coords.longitude); 
          //alert(position.coords.longitude);

          /*infoWindows.setPosition(pos);
          infoWindows.setContent('<p class="map-infoWindow"><img src="<?php echo base_url(); ?>assets/images/marker.png" class="img-responsive"></p>');
          infoWindows.open(map);
          map.setCenter(pos);*/

          /*var uluru = {lat: position.coords.latitude, lng: position.coords.longitude};
          var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'assets/images/marker.png'
          });*/
      }, function() {
      });

}


function codeLatLng(lat, lng) {
  var latlng = new google.maps.LatLng(lat, lng);
  geocoder.geocode({'latLng': latlng}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
    console.log(results)
      if (results[1]) {
        //formatted address
        //alert(results[0].formatted_address);
        //$("#current_location").text(results[0].formatted_address);
        //find country name
        for (var i=0; i<results[0].address_components.length; i++) {
            for (var b=0;b<results[0].address_components[i].types.length;b++) {
                if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
                  city= results[0].address_components[i];
                  break;
                }
            }
        }
        //city data
        //alert(city.short_name)
        var with_div = city.short_name;
        var exp_city = with_div.split(" ");
        showpos(exp_city[0], lat,lng);
        //alert(exp_city[0]);
      } else {
        alert("No results found");
      }
    } else {
      alert("Geocoder failed due to: " + status);
    }
  });
}


$(document).ready(function() {
  find_disallow_location_result(); //show last hosting
});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKf3D0CKv98W_EGTk5QfKANDh0CZuAlNc&libraries=places&callback=initAutocomplete" async defer></script>