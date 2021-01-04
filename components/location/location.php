<?php

$locationData = $database->getReference('template/userData/featured/data/locations/')->getValue();

// $locationData = $data['featured']['data']['projects'];
$locationArray = [];
$index = 0;
foreach($locationData as $x => $value) {
  if($value['location'] && $value['longitude'] && $value['latitude']){
     
    $locationArray[$index] = [$value['location'], $value['longitude'], $value['latitude'], $value['slug']];
    $index++;
  }
  
}
$locationJSON = json_encode($locationArray);

if($locationArray){
echo "<section>
<div id='map' style='height: 400px; width: 100%'></div>
    <script type='text/javascript'>
      var locations = ".$locationJSON.";

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: new google.maps.LatLng(".$locationArray[0][1].", ".$locationArray[0][2]."),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
      });

      var infowindow = new google.maps.InfoWindow();

      var marker, i;

      for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          map: map,
        });

        google.maps.event.addListener(
          marker,
          'click',
          (function (marker, i) {
            return function () {
              infowindow.setContent(locations[i][0] + '</br>' + '<a href=http://sterlingweb.in/projects/karda/beta/projects/' + locations[i][3] + ' target=_blank >View Project</a>');
              infowindow.open(map, marker);
            };
          })(marker, i)
        );
      }
    </script>

</section>";

    }
?>