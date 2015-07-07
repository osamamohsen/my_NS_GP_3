function httpGetData(theUrl)
{
    var xmlHttp = null;
    xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", theUrl, false);
    xmlHttp.send(null);
    return xmlHttp.responseText;
}

function GetOperatorByName(d){
    
    if(d=='Etislat') return 2;
    else if(d=='Mobinil') return 3;
    else if(d=='Vodafone') return 1;
}

function notification(header,message){
    if(! ('Notification' in window) ){
                     alert('Sorry bro, your browser is not good enough to display notification');
                     return;
             }	

             Notification.requestPermission(function(permission){
                     var notification = new Notification(header,{body:message,icon:'./login/img/freeze/logo2.png',dir:'auto'});
    });
}