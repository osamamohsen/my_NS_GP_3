<!-- End menu website -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script> 
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        initialize();
    });

    function initialize() {
        var map_options = {
            center: new google.maps.LatLng(30.044281, 31.340002),
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var google_map = new google.maps.Map(document.getElementById("loc_map_canvas"), map_options);

        var info_window = new google.maps.InfoWindow({
            content: 'loading'
        });

        var t = [];
        var x = [];
        var y = [];
        var h = [];

        t.push('Location Name 1');
        x.push(30.044281);
        y.push(31.340002);
        h.push('<p><strong>You are here</strong><br/>Your Address</p>');


        t.push('Location Name 2');
        x.push(32.044281);
        y.push(33.340002);
        h.push('<p><strong>Location Name 2</strong><br/>Address 2</p>');

        var i = 0;
        for (item in t) {
            var m = new google.maps.Marker({
                map: google_map,
                animation: google.maps.Animation.DROP,
                title: t[i],
                position: new google.maps.LatLng(x[i], y[i]),
                html: h[i]

            });

            google.maps.event.addListener(m, 'click', function () {
                info_window.setContent(this.html);
                info_window.open(google_map, this);
            });
            i++;
        }
    }
</script>
<style>
    .map{
        width: 600px; height: 293px;border: 5px khaki solid;float: right;display: block; margin-top: 10px;
        margin-top: 16px; margin-right: -8px;
    }
</style>
<div id="loc_map_canvas" class="map">Google Map</div>
