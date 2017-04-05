/**
 * Created by xuezhou on 1/19/17.
 */

function initMap() {
    var uluru = {lat: 42.367, lng: -71.080};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}





