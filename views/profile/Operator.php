<?php
class Operator{
    function GetOperatorName($id){
        if($id==1) return "Mobinil";
        else if($id==2) return "Vodafone";
        else return "Etislat";
    }
}