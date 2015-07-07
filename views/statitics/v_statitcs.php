<html>
    <?php
    
     include_once './control/complain/C_subscribers_Complains.php';
    include_once './models/NSfunction.php';
    $data = new subscribers_complains(); $ns=new NSfunction_class();
    $json_Dis_complain = $data->Display_subscribers_compain();
    $_SESSION['ViewComplains'] = $json_Dis_complain; 
    
    if($_SESSION['operator']==1){
        include_once 'v_mobinil.php';
    }else if($_SESSION['operator']==2){
        include_once 'v_vodafone.php';
    }else if($_SESSION['operator']==3){
        include_once 'v_etislat.php';
    }else{
        include_once 'v_chooseOperator.php';
    }
    
    ?>
