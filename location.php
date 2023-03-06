<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  echo "Your location is " . getCurrentLocation();
} else {
  echo "Please use a GET request";
}

function getCurrentLocation() {
  $lat = $_GET['lat'];
  $lng = $_GET['lng'];
  $url = "https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=$lat&lon=$lng";
  $data = file_get_contents($url);
  $location = json_decode($data, true);
  return $location['display_name'];
}
?>
