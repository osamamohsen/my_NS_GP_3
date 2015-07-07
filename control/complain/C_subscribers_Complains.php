<?php
class subscribers_complains extends Display{

    private  $subscribers_complains,$link;
    function __construct() {
     //   echo 'here';
        include_once './models/Display.php';
        include_once './models/links.php';
        try {
            $link_Complain_op = new links();
            $this->link = $link_Complain_op->show_complain();
          //  echo $this->link;
            $disp_v_comp_op = new Display();
            $this->subscribers_complains=$disp_v_comp_op->GetData($this->link);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }

    }//end constructor
    
    function Display_subscribers_compain() {
        try {
            $J_O_RPs = json_decode($this->subscribers_complains,TRUE);
            return $J_O_RPs;
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }

    }

}
