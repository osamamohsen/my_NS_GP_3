<?php
//Response complain 
//http://corsignal.com/networksignal/parsedata/operator/answer_complain.php?question_id=17&answer=thisismyanswer

//http://corsignal.com/networksignal/parsedata/operator/add_offer.php?made_by=1&description=this+is+description+of+offer+&start_offer=2015-03-09&end_offer=2015-03-09&offer_photo=naser.png
class links {
    
    function Login_Check(){
        $url='http://corsignal.com/networksignal/parsedata/subscribers/login.php?';
        return $url;
    }
    
    function profile_update(){
        $url='http://corsignal.com/networksignal/parsedata/subscribers/edit_subscriber.php?';
        return $url;
    }
    function Insert_image(){
        $url="http://corsignal.com/networksignal/parsedata/imgs/upload_photo.php/";
        return $url;
    }
    
    function show_PhoneDataByID($id){
        $url="http://corsignal.com/networksignal/parsedata/show_by_id.php?show_type=2&id=".$id;
        return $url;
        
    }
    
    function show_TerminalSamples(){
        $url="http://corsignal.com/networksignal/parsedata/showall.php?show_type=3";
        return $url;
    }
    
    function show_TerminalSamples_ByID($sim_id){
        $url="http://corsignal.com/networksignal/parsedata/show_by_id.php?show_type=10&id=".$sim_id;
        return $url;
    }
    
    function show_terminal_byID($sim_id){
        $url="http://corsignal.com/networksignal/parsedata/show_by_id.php?show_type=4&id=".$sim_id;
        return $url;
    }
    //question_id=17&answer=thisismyanswer
    function map_cell() {
        $url = "http://178.62.69.195/networksignal/parsedata/showall.php?show_type=0";
        return $url;
    }    
    
    function map_psSampels(){
        $url="http://corsignal.com/networksignal/parsedata/showall.php?show_type=2";
        return $url;
    }
    
    function map_psSampels_ByID($sim_id){
        $url="http://corsignal.com/networksignal/parsedata/show_by_id.php?show_type=11&id=".$sim_id;
        return $url;
    }
            
    function send_complain() {
    //http://corsignal.com/networksignal/parsedata/subscribers/add_complaint.php?
    //em_id=1&complain=%5Bpk%5Dp&Apartemant=32&floor_number=12&address=32&operator=1&problem_type=2
    //&problem_details=0&start_date=22&access_Network=1&prometical_Dial=2&Contract_Number=01277052673&
    //detect_manual=1&solved=1&answer=no+answer+yat
        $url = "http://corsignal.com/networksignal/parsedata/subscribers/add_complaint.php?";
        return $url;
    }
    
    function show_complain(){
        $url="http://178.62.69.195/networksignal/parsedata/showall.php?show_type=4";
        return $url;
    }
    
    function show_complain_By_id($d){
        $url="http://corsignal.com/networksignal/parsedata/show_by_id.php?show_type=7&id=".$d;
        return $url;
    }
    
    function show_Device_By_ID($d){
        $url="http://corsignal.com/networksignal/parsedata/show_by_id.php?show_type=2&".$d;
        return $url;
    }
    
    function show_Mobile_By_ID($d){
        $url="http://corsignal.com/networksignal/parsedata/show_by_id.php?show_type=1&id=".$d;
        return $url;
    }
    
    function Response_complain(){
        $url="http://corsignal.com/networksignal/parsedata/operator/answer_complain.php?";
        return $url;
    }
    
    function add_Report(){
        $url="http://corsignal.com/networksignal/parsedata/NTRA/add_report.php?to=1&notes=ddad";
        return $url;
    }
    
    function show_Reports(){
        $url="http://178.62.69.195/networksignal/parsedata/showall.php?show_type=8";
        return $url;
        
    }
    
    function Response_Report(){
        //uid=2&response=dss
        $url='http://178.62.69.195/networksignal/parsedata/NTRA/add_report_response.php?uid=2&response=dss';
        return $url;
    }
    
    function show_NSPE(){// show ps_sameplse
        $url="http://corsignal.com/networksignal/parsedata/showall.php?show_type=3";
        return $url;
        
    }
            
    function show_subscriber(){
        $url="http://corsignal.com/networksignal/parsedata/showall.php?show_type=1";
        return $url;
    }
            
    function add_offer(){
        $url="http://corsignal.com/networksignal/parsedata/operator/add_offer.php?";
        return $url;
    }
    
    function show_offer(){
        //http://corsignal.com/networksignal/parsedata/showall.php?show_type=5
        $url="http://corsignal.com/networksignal/parsedata/showall.php?show_type=5";
        return $url;
    }
            
    function call_display(){
        $url="http://corsignal.com/networksignal/parsedata/showall.php?show_type=6";
        return $url;
    }
    
    function call_Dislay_ByID($sim_id){
        $url="http://corsignal.com/networksignal/parsedata/show_by_id.php?show_type=9&id=".$sim_id;
        return $url;
    }
}
