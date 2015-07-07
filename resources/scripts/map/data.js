
function Data_Distrbution(result,operator) {
//    alert(operator);
   // alert("asdsa"); 
//    alert(result);
    var Dataobj=JSON.parse(result);
   var PS_image = "./resources/images/icon-images/data.png";
    for(var i in Dataobj.ps_samples){
        
        if(operator_msidn_map(operator,Dataobj.ps_samples[i].msisdn)){
//        alert(i);
             var myLatLng = new google.maps.LatLng(Dataobj.ps_samples[i].longitude,Dataobj.ps_samples[i].latitude);

             var cell_position= new google.maps.Marker({
                 position: myLatLng,
                 map: map,
                 icon: PS_image
             });
             cell_position.id=Dataobj.ps_samples[i].id;
            
             
             var PS_data = "<table><tr><td>Id</td><td>"+Dataobj.ps_samples[i].id+"</td></tr>" +
                     "<tr><td>time</td><td>"+Dataobj.ps_samples[i].time+"</td></tr>" +
                     "<tr><td>upload_rate</td><td>"+Dataobj.ps_samples[i].upload_rate+"</td></tr>" +
                     "<tr><td>data_status</td><td>"+Dataobj.ps_samples[i].data_status+"</td></tr>" +
                     "<tr><td>download_rate</td><td>"+Dataobj.ps_samples[i].download_rate+"</td></tr>" +
                     "<tr><td>data source</td><td>"+Data_source(Dataobj.ps_samples[i].data_source)+"</td></tr>" +
                     "<tr><td>data activity</td><td>"+data_activity(Dataobj.ps_samples[i].data_activity)+"</td></tr>" +
                     "<tr><td>loc provider</td><td>"+Location_provider(Dataobj.ps_samples[i].location_provider)+"</td></tr>" +
                     "<tr><td>longitude</td><td>"+Dataobj.ps_samples[i].longitude+"</td></tr>" +
                     "<tr><td>latitude</td><td>"+Dataobj.ps_samples[i].latitude+"</td></tr>" +
                     "<tr><td>signal_level</td><td>"+Dataobj.ps_samples[i].signal_level+" dbm</td></tr>" +
                     "<tr><td>speed</td><td>"+Dataobj.ps_samples[i].speed+"</td></tr>" +
                     "<tr><td>cid</td><td>"+Dataobj.ps_samples[i].cid+"</td></tr>" +
                     "<tr><td>Phone Number</td><td>0"+Dataobj.ps_samples[i].msisdn+"</td></tr>" +
                    "<tr><td>Data Packet Service</td><td>"+Data_PS(Dataobj.ps_samples[i].event)+"</td></tr>" +
                     "<tr><td>wifi_status</td><td>"+wifi_status(Dataobj.ps_samples[i].wifi_status)+"</td></tr>" +
                     "<tr><td>packet_service_status</td><td>"+Dataobj.ps_samples[i].packet_service_status+"</td></tr>" +
                     "<tr><td>GPS_status</td><td>"+Dataobj.ps_samples[i].GPS_status+"</td></tr>" +
                     "<tr><td>terminal_sim_sim_id</td><td>"+Dataobj.ps_samples[i].terminal_sim_sim_id+"</td></tr></table>";//IMEI
            cell_position.content=PS_data;
             
             var PS_data_container = new google.maps.InfoWindow({
                 content: "<p>asdajlkajksjkslaaljk</p>"
             });
             google.maps.event.addListener(cell_position, 'click', function () {
                
                 PS_data_container.setContent(this.content);
                         //alert(this.content);
                 PS_data_container.open(map, this);
              });
          }
    }
}

