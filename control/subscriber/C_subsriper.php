<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_subsriper
 *
 * @author Osama
 */
class C_subsriper extends Display {
    function Display_subscriber($link){
        
    echo "<h1>Control/subcscriber/C_subscriber</h1>";
        return $this->GetData($link);
    }
    //put your code here
}
