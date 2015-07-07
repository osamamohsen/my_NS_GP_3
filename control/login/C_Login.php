<?php

session_start();
//echo "staringssssssssss<br/>";
include_once '../../models/NSfunction.php';
include_once '../../models/Login.php';

if (isset($_GET['login'])) {
    try {
        $_SESSION['operator'] = NULL;  $_SESSION['kind'] = 'null'; $_SESSION['phone']=NULL;
        $mail = $_GET['mail'];  $password = $_GET['password'];
        if ($mail != "" && $password != "") {
            
            
            echo "mail" . $mail . " password" . $password . "<br/>";
            $Login_Check = new Login($_GET['kind'], $mail, $password);
            echo $Login_response = $Login_Check->check_Login();
            echo '<br/><br/>';
            // echo $Login_response;
            echo 'Doner<br/>';
            if ($Login_response == TRUE) {

                $network=new NSfunction_class();
                $_SESSION['kind']=$network->LoginKind_GetName($_GET['kind']);
                if($mail=="admin@NTRA.com"){ $_SESSION['operator'] = 4; $_SESSION['kind']="NTRA";}
               
                else if($_GET['kind']!=0){
                    $_SESSION['operator']=$network->Login_Operator_OR_NTRA_Name_Of_Kind($mail);
                }
                if($_SESSION['kind']!="USER"){$_SESSION['phone'] = $network->PhoneBy_Operator($_SESSION['operator']);}
                else $_SESSION['phone']=0;
                $user = json_decode($Login_response, TRUE);
                $user['employees']['email']=$mail;
                $user['employees']['password']=$password;
                $_SESSION['user'] = $user;
                var_dump($_SESSION['user']);
//                echo $_SESSION['user']['employees'][0][''];
//                echo $[''];
                //mohamednaseramein@hotmail.com
//                echo $_SESSION['user']['employees']['name'];
//                if(isset($_SESSION['user']['employees']['username'])){
//                    
//                }
                
                 header('Location: ../../index.php');
            } else {
                header('Location: ../../inCorrect.php');
            }
        } else {
            header('Location: ../../inCorrect.php');
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
        echo '<br/>';
    }
} else {
    echo '<br/>Not Set';
}