<?php

class NSfunction_class {

    function LoginKind_GetName($number) {
        if ($number == 0)
            return "USER";
        else if ($number == 1)
            return "OPERATOR";
        else
            return "NTRA";
    }

    function LoginKind_GetID($name) {
        if ($number == "USER")
            return 0;
        else if ($number == "OPERATOR")
            return 1;
        else
            return 2;
    }

    function Login_Operator_OR_NTRA_Name_Of_Kind($operatorname) {
        if ($operatorname == "admin@mobinil.com")
            return 1;
        else if ($operatorname == "admin@vodafone.com")
            return 2;
        else if ($operatorname == "admin@etisalat.com")
            return 3;
        else
            return 4;//NTRA
    } 
    
    function Get_Binary_Image($file) 
    {  
        $contents = file_get_contents($file);
        $base64   = base64_encode($contents); 
        return ('data:;base64,' . $base64);
    }

    function move_image_Path($tmp,$path,$type){
        echo '<br/>NSFUNCTION<br/>';
        echo $tmp;        echo '<br/>';
        echo $path;    echo '<br/>';
        if ($type == "image/jpeg" || $type == "image/jpg" || $type == "image/png") {
            move_uploaded_file($tmp, $path);
        }else            echo 'NO';
    }
    
    function Image_Session_user_site($id){
        $path="./resources/images/user/";
        if($_SESSION['kind']=="NTRA") return $path."ntra1.jpg";
        else if($_SESSION['kind']=="OPERATOR")
        {
            if($_SESSION['operator']==1)  return $path."mobinil.png";
            else if($_SESSION['operator']==2) return $path."vodafone.jpg";
            else return $path."etislat.jpg";
        }
        else{
            if(file_exists($path.$id.".jpg")) return  $path.$id.".jpg"; 
            else return  $path."default.jpg" ;
        }

    }
    
    function Image_DisplayById($id){
        $path="./resources/images/user/";
         if(file_exists($path.$id.".jpg")) return  $path.$id.".jpg"; 
            else return  $path."default.jpg" ;
    }
    
    function ImageDefault(){
        if($_SESSION['kind']=="NTRA") return "./resources/images/user/ntra1.jpg";
        else if($_SESSION['kind']=="OPERATOR")
        {
            if($_SESSION['operator']==1)  return "./resources/images/user/mobinil.png";
            else if($_SESSION['operator']==2) return "./resources/images/user/vodafone.jpg";
            else return "./resources/images/user/etislat.jpg";
        }
        else{
            return  "./resources/images/user/default.jpg" ;
        }
    }
    
    function Image_Display($path,$id){

        $path=$path.$id;   
        if(file_exists($path.".jpg"))
                return $path.".jpg";
        else
            return $this->ImageDefault();
    }
    
    function Image_Session_operator_of_Response_usersite($msisdn){
        $num=  substr($msisdn, 0, 2);
        if($num=="12" ) return "./resources/images/user/mobinil.png";
        else if($num=="10") return "./resources/images/user/vodafone.png";
        else  return "./resources/images/user/etislat.png";
    }
 
    function ComplainType($i){
        if($i==0) return "Call Problem";
        else return "Data Problem";
    }
    
    function ComplainSelectDetails($i){
        if($i==0) return "Call Drop";
        else if($i==1) return "Call Block";
        else if($i==2) return "Silent Call";
        else if($i==3) return "Cross Talk";
        else if($i==4) return "Poor Coverage";
        else if($i==5) return "No Service";
        else if($i==6) return "No Data Access";
        else if($i==7) return "No Speech";
        else if($i==8) return "Connection Error";
    }
 
    function PhoneBy_Operator($num){
        echo 'num: '.$num;        echo '<br/>';
        if($num==1 || $num==4) return "12";
        else if($num==2) return "10";
        else if($num==3)return "11";
        else return 0;
    }
    
    function PS_samples($num){
        if($num<=2)            return "No Data Access";
        else "Connection Error";
    }
}
?>

