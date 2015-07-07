<?php
class ReportsOperator extends Display{
    private $links;
    function __construct() {
        include_once './models/links.php';
        include_once './models/Display.php';
        $link_view_operator_reports = new links();
        $this->links = $link_view_operator_reports->show_Reports();
    }
    function GetReportData(){
        $json_Operator_Reports = new Display();
        $Get_Report_Data=$json_Operator_Reports->GetData($this->links);
        $J_O_RPs = json_decode($Get_Report_Data,TRUE);
        return $J_O_RPs;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

