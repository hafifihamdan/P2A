<!DOCTYPE html>
<html>
    <head>
        <title>maps</title>
        
        <style>
            *{
                margin:0;
                padding: 0;
            }
            #map{
                height: 500px;
                width: 50%;
            }
        
        </style>
        
        
    </head>
    <body>
    
        
        <div id="map"></div>
        
        
        <script>
            function initMap(){
                var location = {lat: -25.363,lng: 131.044}
                var map = new google.maps.Map(document.getElementById("map"),{
                    zoom: 4,
                    center: location
                } );
            }
        </script>
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" type="text/javascript"></script>
    
    </body>
</html>