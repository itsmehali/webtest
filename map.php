<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/resetstyle.css">
    <title></title>
    <style>
        #map {
          height: 500px;
          width: 100%;
        }
    </style>
  </head>
  <body>
    <div id="map"></div>

    <script>
      function initMap() {
        var location = {lat:48.208176, lng:16.373819};
        var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: location
        });
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDH5ZcFzUUzBKf-xtaQUiZiuPpGkIxRBDs&callback=initMap"></script>
  </body>
</html>
