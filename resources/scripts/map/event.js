
function event_Distrbution(result,operator) {
//    alert(result);
//    alert(operator);
    var event_image = "./resources/images/icon-images/event2.png";
    var obj_ev=JSON.parse(result);
   // alert(obj_ev);
    for(var i in obj_ev.terminal_samples){
 //       alert("ddd");
          if(obj_ev.terminal_samples[i].event!=0 && operator_msidn_map(operator,obj_ev.terminal_samples[i].msisdn)==true){
//   alert(obj_ev.terminal_samples[i].longitude+","+obj_ev.terminal_samples[i].latitude); 
            var myLatLng = new google.maps.LatLng(obj_ev.terminal_samples[i].longitude,obj_ev.terminal_samples[i].latitude);

             var Samples_position= new google.maps.Marker({
                 position: myLatLng,
                 map: map,
                 icon: event_image
             });
             Samples_position.id=obj_ev.terminal_samples[i].idterminal_samples;
//            alert(obj_ev.terminal_samples[i].signal_quality);
             
             var Samples_data = "<table><tr><td>name</td><td>"+obj_ev.terminal_samples[i].idterminal_samples+"</td></tr>"+
                "<tr><td>Time</td><td>"+obj_ev.terminal_samples[i].time+"</td></tr>"+
                "<tr><td>Loc Provider</td><td>"+Location_provider(obj_ev.terminal_samples[i].location_provider)+"</td></tr>"+
                "<tr><td>Signal Level</td><td>"+obj_ev.terminal_samples[i].signal_level+" dbm</td></tr>"+
                "<tr><td>Signal Quality</td><td>"+obj_ev.terminal_samples[i].signal_quality+"</td></tr>"+
                "<tr><td>Bit Error Rate</td><td>"+obj_ev.terminal_samples[i].BER+"</td></tr>"+
                "<tr><td>Event Detected</td><td>"+Event(obj_ev.terminal_samples[i].event)+"</td></tr>"+
                "<tr><td>Speed</td><td>"+obj_ev.terminal_samples[i].speed+"</td></tr>"+
                "<tr><td>Battery Level</td><td>"+obj_ev.terminal_samples[i].battary_level+"</td></tr>"+
                "<tr><td>Phone Number</td><td>0"+obj_ev.terminal_samples[i].msisdn+"</td></tr>"+
                "<tr><td>Network Type</td><td>"+network_type(obj_ev.terminal_samples[i].network_type)+"</td></tr>"+
                "<tr><td>terminal_sim</td><td>"+obj_ev.terminal_samples[i].terminal_sim_sim_id+"</td></tr>"+
                "<tr><td>Battery Status</td><td>"+obj_ev.terminal_samples[i].battery_status+"</td></tr></table>";
            Samples_position.content=Samples_data;
             
             var Samples_data_container = new google.maps.InfoWindow({
                 content: "<p>asdajlkajksjkslaaljk</p>"
             });
             google.maps.event.addListener(Samples_position, 'click', function () {
                
                 Samples_data_container.setContent(this.content);
                         //alert(this.content);
                 Samples_data_container.open(map, this);
              });
        
          }
    }
}

 