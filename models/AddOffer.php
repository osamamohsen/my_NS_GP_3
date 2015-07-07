
<?php
class ADDOFFER{
    public $startDate,$endDate,$describtion,$imagetmp,$imagetype,$link;
    
    function __construct($startDate,$endDate,$describtion) {
            session_start();

        echo $this->startDate=$startDate;echo '<br/>';
        echo $this->endDate=$endDate;echo '<br/>';
        echo $this->describtion=$describtion;echo '<br/>';
        $this->Insert_Offer();
    }
    
    function Insert_Offer(){
        include_once '../../models/links.php';
        $link=new links();
        echo $this->link=$link->add_offer();        echo '<br/>';
        echo $made_by=$_SESSION['operator'];echo '<br/>';
        try{
        $getdata = array(
                        'made_by' => "$made_by",
                        'description' => "$this->describtion",
                        'start_offer' => "$this->startDate",
                        'end_offer' => "$this->endDate"
                        );
                        //var_dump($getdata);
                        //echo '<br/>';
            $url_full=$this->link.http_build_query($getdata);
            $resp=file_get_contents($url_full);
        
        //    if($resp)                echo 'Done Saved In DataBase<br/>';
//         echo 'here:';  var_dump($getdata); echo '<br/>';
         
        } catch (Exception $ex) {
            new Exception('Error in Check Login');
        }
    }
    
    function insert_imageOffer($imagetmp,$imagetype){
        echo '<br/><br/>';
        echo "offfer:".$_SESSION['operator'];        echo '<br/>';
        echo 'insert Image Offfer<br/>';
        echo $this->imagetmp=$imagetmp;echo "<br/>"; echo $this->imagetype=$imagetype; echo '<br/>'; 
        $path= "../../resources/images/offers/";
        include_once '../../models/NSfunction.php';
        $ns=new NSfunction_class();
//        echo 'Counter'.$_SESSION['countoffer'];
        echo $counter=$_SESSION['countoffer'];        echo '<br/>';
        echo  $path.$_SESSION['operator'].$counter.".jpg";
        $ns->move_image_Path($this->imagetmp, $path.$_SESSION['operator']."_".$counter.".jpg", $this->imagetype);
    }
}


?>