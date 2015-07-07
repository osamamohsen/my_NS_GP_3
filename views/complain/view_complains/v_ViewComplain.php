<?php

//view Operator Complains <-------------controll=control/complain/c_subscriber_complains----------------------

//var_dump($json_Dis_complain);
//var_dump($_SESSION['ViewComplains']);
//echo $_SESSION['operator']; echo '<br/>';
if($_SESSION['operator']==4){ //NTRA
//    echo 'HERE<br/>';
    include_once 'chooseOperator.php'; 
}else if($_SESSION['operator']==1){ //Mobinil
    include_once 'v_mobinil.php';
}else if($_SESSION['operator']==2){ //Vodafone
    include_once 'v_vodafone.php';
}else if($_SESSION['operator']==3){ //Etislat
    include_once 'v_etislat.php';
}
?>
