<?php
class Display {
    function GetData($linker){
        $myJsonData=file_get_contents($linker);
//        echo '<br/>GETDATA<br/>';
//        var_dump($myJsonData);
//                echo '<br/>GETDATA<br/>';

        return $myJsonData;
    }
}
