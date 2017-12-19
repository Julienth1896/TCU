/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function init() {
    demo.initChartist();
    $.notify({
        icon: 'ti-gift',
        message: "Bienvenido a <b>CELIPA Admin</b>, evolucionando con nuestro futuro."

    }, {
        type: 'success',
        timer: 4000
    });
}

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
    geocoder.geocode({'address': address}, function (results, status) {
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

