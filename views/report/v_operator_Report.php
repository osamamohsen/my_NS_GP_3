<?php

include_once './control/Reports/v_reports_Operators.php';
$R_P=new ReportsOperator();
$J_R_O=$R_P->GetReportData();
$_SESSION['J_R_O']=$J_R_O;

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
