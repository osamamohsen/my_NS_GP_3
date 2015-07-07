<?php

class Attribute extends All_Attribute{
    function Attr_Complain(){
        $data= $this->att_complain;
        echo "<br/><br/><br/>Attribute:      ".count($data)."<br/>";
        return $data;
    }
}