

        height: 400px;  /* The height is 400 pixels */
        parseFloat(markerElem.getAttribute('lat')),
        parseFloat(markerElem.getAttribute('lng')));
        width: 100%;  /* The width is the width of the web page */
       /* Set the size of the div element that contains the map */
       }
      #map {
      document.getElementById('map'), {zoom: 4, center: uluru});
      label: icon.label
      map: map,
      position: point,
    * The async attribute allows the browser to render the page while the API loads
    * The callback parameter executes the initMap() function
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    -->
    <!--Load the API from the specified URL
    <!--The div element for the map -->
    </script>
    </script>
    </style>
    <div id="map"></div>
    <h3>My Google Maps Demo</h3>
    <script defer
    <script>
    <style>
    downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
    infowincontent.appendChild(document.createElement('br'));
    infowincontent.appendChild(strong);
    infowincontent.appendChild(text);
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    strong.textContent = name
    text.textContent = address
    var address = markerElem.getAttribute('address');
    var icon = customLabel[type] || {};
    var id = markerElem.getAttribute('id');
    var infowincontent = document.createElement('div');
    var marker = new google.maps.Marker({
    var name = markerElem.getAttribute('name');
    var point = new google.maps.LatLng(
    var strong = document.createElement('strong');
    var text = document.createElement('text');
    var type = markerElem.getAttribute('type');
    });
  // The location of Uluru
  // The map, centered at Uluru
  // The marker, positioned at Uluru
  </body>
  </head>
  <body>
  <head>
  Array.prototype.forEach.call(markers, function(markerElem) {
  var map = new google.maps.Map(
  var marker = new google.maps.Marker({position: uluru, map: map});
  var markers = xml.documentElement.getElementsByTagName('marker');
  var uluru = {lat: -25.344, lng: 131.036};
  var xml = data.responseXML;
// Initialize and add the map
<!DOCTYPE html>
</html>
<html>
function initMap() {
}