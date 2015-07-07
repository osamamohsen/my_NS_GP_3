

function Event(num){
    if(num==1) return "Call Drop";
    else if(num==2) return "Call Block";
    else if(num==3) return "Poor Coverage";
    else if(num==4) return "Silent Call";
    else if(num==5) return "Cross Talk";
    else return "Call Problem";
}

function network_type(num){
    if(num==0) return "GSM";
    else if(num==1) return "GPRS";
    else if(num==2) return "EDGE";
    else if(num==3) return "UMTS";
    else if(num==4) return "HSDPA";
    else if(num==5) return "HSUPA";
    else if(num==6) return "HSUPA+";
    else return "LTE";
    
}


//Data Package Service
function Data_PS(num){
    if(num==0) return "Low Speed";
    else if(num==1) return "No Service";
    else if(num==2) return "No Data Access";
    else return "No Service";
}

function Data_source(num){
    if(num==0) return "Package Service";
    else return "WIFI";
}

function Data_Activity(num){
   if(num==0) return "Upload";
   else if(num==1) return "Download Rate";
   else return "Both";
}

function Location_provider(num){
    if(num==0) return "No Location(N/A)";
    else if(num==1) return "Network";
    else return "GPS";
}

function wifi_status(num){
    if(num==0) return "ON";
    else return "OFF";
}


function operator_msidn_map(operatorNum,phone){
    var d=phone.substr(0,2);
//    alert(operatorNum+","+phone+","+d);
    if(d==operatorNum || operatorNum==0) return true;
    else return false;
}