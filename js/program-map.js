/**
 * Created by xuezhou on 2/3/17.
 */


function initMap() {
    var uluru = {lat: 42.367, lng: -71.080};
    var map = new google.maps.Map(document.getElementById('pro-map1'), {
        zoom: 16,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });



    var uluru2 = {lat: 42.367, lng: -71.080};
    var map2 = new google.maps.Map(document.getElementById('pro-map2'), {
        zoom: 16,
        center: uluru2
    });
    var marker2 = new google.maps.Marker({
        position: uluru2,
        map: map2
    });
}


