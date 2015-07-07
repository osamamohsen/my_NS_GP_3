<?php
//using for map
class buildData {
    private $link,$data,$att;
    function __construct($link,$data,$att) {
        echo '<br/>start build data<br/>';
        echo count($data)."<br/>";
        echo count($att)."<br/>";
        $this->data=$data;
        $this->att=$att;
        //echo $link;
        $this->link=$link;
       // echo '---ss-------------------------------------------------';
        //echo $this->link;
        //echo count($this->data)."<br/>";
       // echo count($this->att)."<br/>";
    }
    function BuildData(){
        try{
                                    echo '<br/><br/><br/>';

                                    print_r($this->data);
                        echo '<br/><br/><br/>';
         //   echo '<br/>--------------------------------------------------------<br/>';
            //echo count($this->data)."<br/>";
            //echo count($this->att)."<br/>";
            $buildLink="";
            for ($index = 0; $index < count($this->data); $index++) {
               if($index<count($this->data)-1)
               {$buildLink.=$this->att[$index]."=".$this->data[$index]."&";
               }else{$buildLink.=$this->att[$index]."=".$this->data[$index];
               }
            }
            echo $this->link."<br/>";echo '<br/>';
echo "here : ".$buildLink."<br/>";
            echo $this->link.=$buildLink;
            echo '<br/>';
            $data=new sendJsonData($this->link);
            return $data;
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
}
