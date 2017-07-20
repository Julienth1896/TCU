var geocoder;
var map;

function codeAddress() {
    geocoder = new google.maps.Geocoder();

    //Ubicacion de Costa Rica
    var latlng = new google.maps.LatLng(9.7539596, -83.6773928);
    var myOptions = {
        zoom: 8,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    //Ubicacion del parque nacional en el mapa
    var address = document.getElementById('address').innerText;
    geocoder.geocode({'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                zoom: 1,
                map: map,
                position: results[0].geometry.location,
                draggable: true
            });
            marker.setPosition(results[0].geometry.location);
            map.setZoom(14);
        }
    });
}//codeAddress()