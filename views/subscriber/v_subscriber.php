<?php
include_once './models/links.php';include_once './models/NSfunction.php';
$subLink=new links(); $nsfunc=new NSfunction_class();
//$id=$_SESSION['']
$link=$subLink->show_subscriber();
$res_sub=file_get_contents($link);
$res_js=  json_decode($res_sub,TRUE);
$_SESSION['subscriber_JS']=$res_js;

if($_SESSION['operator']==4){ //NTRA
    include_once 'chooseOperator.php'; 
}else if($_SESSION['operator']==1){ //Mobinil
    include_once 'v_mobinil.php';
}else if($_SESSION['operator']==2){ //Vodafone
    include_once 'v_vodafone.php';
}else if($_SESSION['operator']==3){ //Etislat
    include_once 'v_etislat.php';
}
?>

