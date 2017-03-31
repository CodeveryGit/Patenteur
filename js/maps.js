var map1, map2;

function initMap() {
        var image = '../img/point.png';
        map1 = new google.maps.Map(document.getElementById('google-map-1'), {
            center: {lat: -31.9549352, lng: 115.854656},
            zoom: 17,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true
        });
        var marker1 = new google.maps.Marker({
            position: {lat: -31.9549352, lng: 115.854656},
            icon: image,
        });
        marker1.setMap(map1);
        map2 = new google.maps.Map(document.getElementById('google-map-2'), {
            center: {lat: -33.86197, lng: 151.209989},
            zoom: 20,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true
        });
        var marker2 = new google.maps.Marker({
            position: {lat: -33.86197, lng: 151.209989},
            icon: image,
        });
        marker2.setMap(map2);
}