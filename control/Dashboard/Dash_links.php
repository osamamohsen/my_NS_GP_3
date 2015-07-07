<?php

class Dash_links extends Display{
private $link;

function Link_Cell_Map(){
    $link=new links();
    $this->link=$link->map_cell();
    $Data=$this->getAllJsonData();
    return $Data;
}

function Link_PsSamples_Map(){
//    echo "sim: ".$_SESSION['user']['employees']['sim_id']."<br/>";
    $link=new links();
    if($_SESSION['kind']!="USER") $this->link=$link->map_psSampels();
    else         $this->link=$link->map_psSampels_ByID($_SESSION['user']['employees']['sim_id']);
    $Data=$this->getAllJsonData();
////    var_dump($)
//    if($_SESSION['kind']=="USER") $Data='{"ps_samples":'.$Data.'}';

    return $Data;
}

function Link_Tsamples(){
    $link=new links();
    if($_SESSION['kind']!="USER") $this->link=$link->show_TerminalSamples();
    else $this->link=$link->map_psSampels_ByID($_SESSION['user']['employees']['sim_id']);
    $Data=$this->getAllJsonData();
//    if($_SESSION['kind']=="USER") $Data='{"terminal_samples":'.$Data.'}';
//echo $Data;
//        var_dump($Data);
    return $Data;
}


private function getAllJsonData(){
    return $this->GetData($this->link);
}

}//end class DashLink
