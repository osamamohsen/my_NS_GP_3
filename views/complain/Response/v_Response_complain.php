
<?php

//echo "hereheeeeeeeeeeeeeeees";
$response = $_SESSION['ViewComplains'];
$counter = count($response['complains']);

//echo $_SESSION['operator'];

if ($_SESSION['operator'] == 1) { //Mobinil
    include_once 'v_mobinil.php';
} else if ($_SESSION['operator'] == 2) { //Vodafone
    include_once 'v_vodafone.php';
} else if ($_SESSION['operator'] == 3) { //Etislat
    include_once 'v_etislat.php';
}else if($_SESSION['operator'] == 4){
    include_once 'chooseOperator.php';
}else{
    include_once 'v_userComplains.php';
}

?>
