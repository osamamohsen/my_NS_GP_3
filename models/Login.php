<?php

class Login{


    private $mail,$password,$link,$type;
    
    function __construct($type,$mail,$password) {
        echo 'Model Login<br/>';
        echo $type;
        try{
            include_once '../../models/links.php';
            $this->mail=$mail;
            $this->password=$password;
            $this->type=$type;
            $Login_Link=new links();
            $this->link=$Login_Link->Login_Check();   
        } catch (Exception $ex) {
            new Exception('Error In Get Link');
        }
    }
    
    function check_Login(){
        try{
        $getdata = array(
                        'type' => "$this->type",
                        'mail' => "$this->mail",
                        'password' => "$this->password"         
                        );
                        
            echo $url_full=$this->link.http_build_query($getdata);
            $resp=file_get_contents($url_full);
        } catch (Exception $ex) {
            new Exception('Error in Check Login');
        }  
        echo "<br/>".$resp;        echo '<br/>';
        if($resp!='{"result":"invalid user name or password "}' && $resp!='{"employees":{"result":"0"}}')
        {echo '<br/>here<br/>';return $resp; } else {
     echo '<br/> False<br/>';
        return FALSE;}
    }
}