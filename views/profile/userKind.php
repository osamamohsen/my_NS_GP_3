<?php
if(isset($_SESSION['operator'])){
    echo 'operator';
    if($_SESSION['operator']==1){
        $_SESSION['solvedcomplain']=$_SESSION['ProfilesolvedComplain1'];
        $_SESSION['unsolvedcomplain']=$_SESSION['ProfileunsolvedComplain1'];
    }else if($_SESSION['operator']==2){
        $_SESSION['solvedcomplain']=$_SESSION['ProfilesolvedComplain2'];
        $_SESSION['unsolvedcomplain']=$_SESSION['ProfileunsolvedComplain2'];    
    }else if($_SESSION['operator']==3){
        $_SESSION['solvedcomplain']=$_SESSION['ProfilesolvedComplain3'];
        $_SESSION['unsolvedcomplain']=$_SESSION['ProfileunsolvedComplain3'];        
    }
}else{
    echo 'user';
    $_SESSION['solvedcomplain']=$_SESSION['ProfilesolvedComplain'];
    $_SESSION['unsolvedcomplain']=$_SESSION['ProfileunsolvedComplain'];

}
