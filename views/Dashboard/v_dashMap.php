<?php
include_once './models/Display.php';
include_once './models/links.php';
include_once './control/Dashboard/Dash_links.php';
//echo $_SESSION['phone']."<br/>";
$link=new Dash_links();
$Json_Cell=$link->Link_Cell_Map();
$json_TerminalSamples=$link->Link_Tsamples();
$json_EventDetected=$json_TerminalSamples;
$Json_PsSamples=$link->Link_PsSamples_Map();
//var_dump($json_TerminalSamples);echo '<br/>';
//var_dump($Json_PsSamples);echo '<br/>';
?>
<script src="./control/Dashboard/C_map_json.js" type="text/javascript"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>
 <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
    <script type="text/javascript">
        function initGeolocation()
        {
            if( navigator.geolocation )
            {

                // Call getCurrentPosition with success and failure callbacks
                navigator.geolocation.getCurrentPosition( success, fail );
            }
            else
            {
                alert("Sorry, your browser does not support geolocation services.");
            }
        }

        var map;
        function success()
        {
            //alert(position);
            // Define the coordinates as a Google Maps LatLng Object
            var coords = new google.maps.LatLng(30.0834931, 31.283184199999997);
         //   alert(position.coords.latitude); alert(position.coords.longitude);
            // Prepare the map options
            var mapOptions =
            {
                zoom: 9,
                center: coords,
                mapTypeControl: false,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
              //  mapTypeId:google.maps.mapTypeId.SATELLITE
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            
            // Create the map, and place it in the map_canvas div
            map = new google.maps.Map(document.getElementById("map_canvas_dash"), mapOptions);
              
        //search for schools within 1500 metres of our current location, and as a marker use school.png
        
        // Place the initial marker


        var ch1=document.getElementById('ch1'),
            ch2=document.getElementById('ch2'),
            ch4 = document.getElementById('ch4'),
            ch5 = document.getElementById('ch5');
        
        if (ch1.checked) {
//            alert("here"); 
            var Terminal_Samples=<?php echo json_encode($json_TerminalSamples); ?>;
//            alert(Terminal_Samples); alert(<?php echo $_SESSION['phone']; ?>);
            Samples_Distrbution(Terminal_Samples,<?php echo $_SESSION['phone']; ?>);
        }
        if (ch2.checked) {
            var Json_CellData=<?php echo json_encode($Json_Cell); ?>;
          //  var Json_FilterData=getJsonData(Json_CellData,'cells');
            Cells_Distrbution(Json_CellData,<?php echo $_SESSION['phone']; ?>);
        }
        if (ch4.checked) {
            var Terminal_Samples=<?php echo json_encode($json_TerminalSamples); ?>;
            event_Distrbution(Terminal_Samples,<?php echo $_SESSION['phone']; ?>);
        }
        if (ch5.checked) {
            var jsonData=<?php echo json_encode($Json_PsSamples); ?>;
            Data_Distrbution(jsonData,<?php echo $_SESSION['phone']; ?>);
        }

    }
        
        
        

        function fail()
        {
            // Could not obtain location
        }

        //Request places from Google
        function placesRequest(title,latlng,radius,types,icon)
        {
            //Parameters for our places request
            var request = {
                location: latlng,
                radius: radius,
                types: types
            };
            //Make the service call to google
            var callPlaces = new google.maps.places.PlacesService(map);
            callPlaces.search(request, function(results,status){
                //trace what Google gives us back
                $.each(results, function(i,place){
                    var placeLoc = place.geometry.location;
                    var thisplace = new google.maps.Marker({
                        map: map,
                        position: place.geometry.location,
                        icon: icon,
                        title: place.name
                    });
                });
            });

        }


    </script>
</head>
<body onload="initGeolocation();">
<!-- width:1000px;-->
<div style="position:absolute;  height: 100%; overflow:auto; float:left; padding-left:10px; padding-right:10px;">
</div>
<!-- map div container -->
<div id="map_canvas_dash" style="height:500px; margin-left:-2px; border-right: 1px solid #666666; border-bottom: 1px solid #666666; border-top: 1px solid #AAAAAA; border-left: 1px solid #AAAAAA;"></div>
</body>


