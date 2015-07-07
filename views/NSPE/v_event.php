<?php include_once './models/links.php';
include_once './models/Display.php';
include_once './control/Dashboard/Dash_links.php';

$link=new links();
if($_SESSION['kind']!="USER"){
    $linker=$link->show_NSPE();
    $DataLinker=$link->map_psSampels();
}
else{
    $linker=$link->show_TerminalSamples_ByID($_SESSION['user']['employees']['sim_id']);
    $DataLinker=$link->map_psSampels_ByID($_SESSION['user']['employees']['sim_id']);
    
}

$Disp=new Display();
$data=$Disp->GetData($linker); $Packet=$Disp->GetData($DataLinker);

$result=json_decode($data,TRUE); $packetResult=  json_decode($Packet,TRUE);
$_SESSION['NSPE']=$result; $_SESSION['NSPEdata']=$packetResult;
//var_dump($_SESSION['NSPE']);
//var_dump($result);
if($_SESSION['operator']==1 || $_SESSION['kind']=="USER"){
    include_once 'Mobinil/v_event.php';
}else if($_SESSION['operator']==2){
    include_once 'Vodafone/v_event.php';
}else if($_SESSION['operator']==3){
    include_once 'Etislat/v_event.php';
}else if($_SESSION['operator']==4){
    include_once 'chooseOperator.php'; 
}

?>