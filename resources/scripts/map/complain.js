function Complain_Distrbution() {
    var complain_image = "./resources/images/icon-images/complain.png";
    var loc2 = new google.maps.LatLng(28.297582, 30.632728);
    var c_marker1 = new google.maps.Marker({
        position: loc2,
        map: map,
        icon: complain_image
    });
    var s = "<table><tr><td>Id</td><td>158792</td></tr>"+
                "<tr><td>From</td><td>mahmmoudHfz2015@gmail.com</td></tr>"+
                "<tr><td>Complain</td><td>Bad Signals</td></tr>"+
                "<tr><td>Floor_Number</td><td>2</td></tr>"+
                "<tr><td>Address</td><td>Ali Lesy Street Msr We Sudan</td></tr>"+
                "<tr><td>Operator</td><td>Etislat</td></tr>"+
                "<tr><td>Problem Type</td><td>0</td></tr>"+
                "<tr><td>Problem Details</td><td>3</td></tr>"+
                "<tr><td>Start Date</td><td>12:8:2015</td></tr>"+
                "<tr><td>Access_network</td><td>0</td></tr>"+
                "<tr><td>Contract_Number</td><td>0127822056</td></tr></table>";
    var infowindow = new google.maps.InfoWindow({
        content: s
    });
    google.maps.event.addListener(c_marker1, 'click', function () {
        infowindow.open(map, c_marker1);
    });
    var loc3 = new google.maps.LatLng(29.208139, 29.627130);

    var c_marker2 = new google.maps.Marker({
        position: loc3,
        map: map,
        icon: complain_image
    });

    var s22 = "<table><tr><td>Id</td><td>158793</td></tr>"+
                "<tr><td>From</td><td>mahmmoudHfz2015@gmail.com</td></tr>"+
                "<tr><td>Complain</td><td>Bad Signals</td></tr>"+
                "<tr><td>Floor_Number</td><td>2</td></tr>"+
                "<tr><td>Address</td><td>Ali Lesy Street Msr We Sudan</td></tr>"+
                "<tr><td>Operator</td><td>Etislat</td></tr>"+
                "<tr><td>Problem Type</td><td>0</td></tr>"+
                "<tr><td>Problem Details</td><td>3</td></tr>"+
                "<tr><td>Start Date</td><td>12:8:2015</td></tr>"+
                "<tr><td>Access_network</td><td>0</td></tr>"+
                "<tr><td>Contract_Number</td><td>0127822056</td></tr></table>";
    var myinfowindow = new google.maps.InfoWindow({
        content: s22
    });
    google.maps.event.addListener(c_marker2, 'click', function () {
        myinfowindow.open(map, c_marker2);
    });


    var loc4 = new google.maps.LatLng(30.256107, 29.641763);

    var c_marker3 = new google.maps.Marker({
        position: loc4,
        map: map,
        icon: complain_image
    });

    var c_marker3_text = "<table><tr><td>Id</td><td>158794</td></tr>"+
                "<tr><td>From</td><td>mahmmoudHfz2015@gmail.com</td></tr>"+
                "<tr><td>Complain</td><td>Bad Signals</td></tr>"+
                "<tr><td>Floor_Number</td><td>2</td></tr>"+
                "<tr><td>Address</td><td>Ali Lesy Street Msr We Sudan</td></tr>"+
                "<tr><td>Operator</td><td>Etislat</td></tr>"+
                "<tr><td>Problem Type</td><td>0</td></tr>"+
                "<tr><td>Problem Details</td><td>3</td></tr>"+
                "<tr><td>Start Date</td><td>12:8:2015</td></tr>"+
                "<tr><td>Access_network</td><td>0</td></tr>"+
                "<tr><td>Contract_Number</td><td>0127822056</td></tr></table>";

    var c_marker3_content = new google.maps.InfoWindow({
        content: c_marker3_text
    });
    google.maps.event.addListener(c_marker3, 'click', function () {
        c_marker3_content.open(map, c_marker3);
    });

    var loc5 = new google.maps.LatLng(31.112139, 30.186842);

    var c_marker4 = new google.maps.Marker({
        position: loc5,
        map: map,
        icon: complain_image
    });


    var c_marker4_text = "<table><tr><td>Id</td><td>158795</td></tr>"+
                "<tr><td>From</td><td>mahmmoudHfz2015@gmail.com</td></tr>"+
                "<tr><td>Complain</td><td>Bad Signals</td></tr>"+
                "<tr><td>Floor_Number</td><td>2</td></tr>"+
                "<tr><td>Address</td><td>Ali Lesy Street Msr We Sudan</td></tr>"+
                "<tr><td>Operator</td><td>Etislat</td></tr>"+
                "<tr><td>Problem Type</td><td>0</td></tr>"+
                "<tr><td>Problem Details</td><td>3</td></tr>"+
                "<tr><td>Start Date</td><td>12:8:2015</td></tr>"+
                "<tr><td>Access_network</td><td>0</td></tr>"+
                "<tr><td>Contract_Number</td><td>0127822056</td></tr></table>";

    var c_marker4_content = new google.maps.InfoWindow({
        content: c_marker4_text
    });
    google.maps.event.addListener(c_marker4, 'click', function () {
        c_marker4_content.open(map, c_marker4);
    });
    
}

