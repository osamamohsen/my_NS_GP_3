<?php
    $tmp = $_FILES['upload']['tmp_name'];  $type = $_FILES['upload']['type'];
    $sdate=$_POST['Sdate']; $Edate=$_POST['Edate']; ;
    include_once '../../models/AddOffer.php';
    $of=new ADDOFFER($_POST['Sdate'], $_POST['Edate'], $_POST['offer']);
    $of->insert_imageOffer($tmp, $type);
    include_once '../../models/NSfunction.php';
    header("Location: ../../index.php");

?>