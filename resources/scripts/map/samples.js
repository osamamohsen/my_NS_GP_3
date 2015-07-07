
function Samples_Distrbution(result,operator) {
//    alert(result);
//    alert(operator);
//    alert("her");
    var event_image = "./resources/images/icon-images/event2.png";
    var S_Ev=JSON.parse(result);
   // alert(S_Ev);
    for(var i in S_Ev.terminal_samples){
//        alert("ddd");
          if(S_Ev.terminal_samples[i].event==0 && operator_msidn_map(operator,S_Ev.terminal_samples[i].msisdn)){
  // alert(i); 
            var myLatLng = new google.maps.LatLng(S_Ev.terminal_samples[i].longitude,S_Ev.terminal_samples[i].latitude);

             var Samples_position= new google.maps.Marker({
                 position: myLatLng,
                 map: map,
                 title: "event_image"
             });
             Samples_position.id=S_Ev.terminal_samples[i].idterminal_samples;
            
             
             var Samples_data = "<table><tr><td>name</td><td>"+S_Ev.terminal_samples[i].idterminal_samples+"</td></tr>"+
                "<tr><td>Time</td><td>"+S_Ev.terminal_samples[i].time+"</td></tr>"+
                "<tr><td>Loc Provider</td><td>"+Location_provider(S_Ev.terminal_samples[i].location_provider)+"</td></tr>"+
                "<tr><td>Signal Level</td><td>"+S_Ev.terminal_samples[i].signal_level+" dbm</td></tr>"+
                "<tr><td>Signal Quality</td><td>"+S_Ev.terminal_samples[i].signal_quality+"</td></tr>"+
                "<tr><td>Bit Error Rate</td><td>"+S_Ev.terminal_samples[i].BER+"</td></tr>"+
                "<tr><td>Event Detected</td><td>"+Event(S_Ev.terminal_samples[i].event)+"</td></tr>"+
                "<tr><td>Speed</td><td>"+S_Ev.terminal_samples[i].speed+"</td></tr>"+
                "<tr><td>Battery Level</td><td>"+S_Ev.terminal_samples[i].battary_level+"</td></tr>"+
                "<tr><td>Phone Number</td><td>0"+S_Ev.terminal_samples[i].msisdn+"</td></tr>"+
                "<tr><td>Network Type</td><td>"+network_type(S_Ev.terminal_samples[i].network_type)+"</td></tr>"+
                "<tr><td>terminal_sim</td><td>"+S_Ev.terminal_samples[i].terminal_sim_sim_id+"</td></tr>"+
                "<tr><td>Battery Status</td><td>"+S_Ev.terminal_samples[i].battery_status+"</td></tr></table>";
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

 