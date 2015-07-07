function Cells_Distrbution(result,operator) {
   var obj=JSON.parse(result);
//    alert(operator);
   var cell_image = "./resources/images/icon-images/cell_tower.png";
    for(var i in obj.cells){
             var myLatLng = new google.maps.LatLng(obj.cells[i].long,obj.cells[i].lat);

             var cell_position= new google.maps.Marker({
                 position: myLatLng,
                 map: map,
                 icon: cell_image
             });
             cell_position.id=obj.cells[i].id;
            
             
             var cell_data = "<table><tr><td>Id</td><td>"+obj.cells[i].id+"</td></tr>" +
                     "<tr><td>Long</td><td>"+obj.cells[i].long+"</td></tr>" +
                     "<tr><td>Lat</td><td>"+obj.cells[i].lat+"</td></tr>" +
                     "<tr><td>Lac</td><td>"+obj.cells[i].lac+"</td></tr>" +
                     "<tr><td>Type</td><td>"+obj.cells[i].type+"</td></tr>" +
                     "<tr><td>Info</td><td>"+obj.cells[i].information+"</td></tr></table>";//IMEI
            cell_position.content=cell_data;
             
             var cell_data_container = new google.maps.InfoWindow({
                 content: "<p>asdajlkajksjkslaaljk</p>"
             });
             google.maps.event.addListener(cell_position, 'click', function () {
                
                 cell_data_container.setContent(this.content);
                         //alert(this.content);
                 cell_data_container.open(map, this);
              });
    }
}

