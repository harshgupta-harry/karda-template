<?php
// $locationData = $data['location']['data']['arrayOne']['data'];
// $locationArray = [];
// foreach($locationData as $x => $value) {
  
//   $locationArray[$x] = [$value['name']['text'], $value['longitude']['text'], $value['latitude']['text']];
// }
// $locationJSON = json_encode($locationArray);



$locationData = $data['featured']['data']['projects'];
$locationArray = [];
$index = 0;
foreach($locationData as $x => $value) {
  $locationArray[$index] = [$value['location']['text'], $value['location']['longitude'], $value['location']['latitude']];
  $index++;
}
$locationJSON = json_encode($locationArray);


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
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, marker);
            };
          })(marker, i)
        );
      }
    </script>

</section>";


?>
<!-- echo '<section class="project-location wow fadeInDown" data-wow-delay="0.3s">

<div id="map" style="height: 400px; width: 500px;">
</div>
<div class="container">

    <div class="row">

        <div class="col-12">

            <div class="section-title">

                <span class="count">02</span>

                <h2>View Our Project on Live MAP</h2>

                <a href="#" class="button">Explore Now <i class="fas fa-caret-right"></i></a>

            </div>

        </div>

    </div>

</div>

</section>'; -->
