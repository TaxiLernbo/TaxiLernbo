window.onerror = function (errorMsg, url, lineNumber, column, errorObj) {
    alert('Error: ' + errorMsg + ' Script: ' + url + ' Line: ' + lineNumber
    + ' Column: ' + column + ' StackTrace: ' +  errorObj);
};

var map;
var previousMarker; // global variable to store previous marker
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {
      lat: 60.139858069631984, 
      lng: 15.31889432345281
    },
    zoom: 15
  });
  map.addListener('click', function(e) {
      // if the previousMarker exists, remove it
      if (previousMarker)
        previousMarker.setMap(null);

      latLng = e.latLng;

      console.log(e.latLng.lat());
      console.log(e.latLng.lng());

      //image = clientURL + "/common/images/markers/red.png";
      console.log("Marker");
      previousMarker = new google.maps.Marker({
        position: latLng,
        map: map
      });
    }

  );
}