
<?php 
echo 'Etislat';
$J_R_O = $_SESSION['J_R_O']; ?>
<style>
    .report_operater_container{margin: 15px;}
    .report_operater_container:hover{cursor: pointer;}
    .report_operator_data{border: 1px solid silver;margin-top: 12px; opacity: 0.7;}
    .report_operator_data:hover{opacity: 1;}
    .header_report_operator,.txt_report_operator,.image_report_operator{margin: 10px;float: left;}
    .image_report_operator{width: 219px; height: 84px ;float: left;  /* For IE8 and earlier */}
    .header_report_operator{}
    .txt_report_operator{font-size: 21px; float:left; text-align: left;}
    .btn-report_operator{margin: 7px 7px 7px 7px;}
    .div_Eamil_Name_Date{margin-left: 7px;}
    .bd-r-left{border-top-left-radius: 16px; border-bottom-left-radius: 16px; text-align: center;}
    .labelReport{
        background-color: black; 
        color: white; 
        text-align: center; 
        width: 13%;
        font-size: 15px;
    }
    .hidden{display: none;}
    .tabelReports{border-radius: 20px;}
    .writeResponse{background-color: #BCED91; color: black;}
</style>
<script>
    //Response_OP_NTRA actionResponseReport
    var Div = 0;
    function Response_OP_Etislat(d) {
    document.getElementById('ReportText'+d).innerHTML=document.getElementById("txt_report_operator"+d).innerHTML;
        var counter=<?php echo count($J_R_O['reports']); ?>;
        for(var i=0;i<counter;i++){
            $("#Response_Report" + i).slideUp("slow");
        }
        Div = d;
        $("#Response_Report" + Div).slideToggle("slow");
    }
    function actionResponseEtislatReport(d) {
        alert("asd");
        $("#Response_Report" + Div).slideToggle("slow");
        if (d !==''){
        $url = "http://178.62.69.195/networksignal/parsedata/NTRA/add_report_response.php?uid=" + Div + "&response=" + d;
        $('#TabelResponsesDisplayNew'+Div).removeClass('hidden');     
        document.getElementById('Respose_For_Report_NTRANew'+Div).innerHTML=d;
        httpGetData($url);
        }
    }
    function printingReportEtislat(d){
        alert(d);
        var prtContent=document.getElementById("txt_report_operator"+d);
//        var  = document.getElementById("myContainersss");
        var WinPrint = window.open('', '', 'left=0,top=0,width=1500,height=2000,toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
</script>
<?php $data_Res;
$ww = 10;
?>
<?php $_SESSION['counter'] = count($J_R_O['reports']); ?>


<div id="ReportOperators" style="overflow-y: scroll; height: 635px;">
    <label id="assignValue"><?php echo $_SESSION['operator']; ?></label>
        <?php for ($R_Op = 0; $R_Op < count($J_R_O['reports']); $R_Op++) { ?>
        <div id="ReportsCheck">
    <?php if ($J_R_O['reports'][$R_Op]['to'] == 3) { ?>    
                <div class ="report_operator_data bd-r-left">

                    <table class="table_report_operator bd-r-left tabelReports" style="width: 100%;">
                        <tr>
                        <h1 id="Res_OP_JOSNID" class="hidden">
                            <?php
                            echo $eres = $J_R_O['reports'][$R_Op]['id'];

                            $data_Res[] = $J_R_O['reports'][$R_Op]['id'];
                            ?>
                        </h1>
                        <td class="bd-r-left">
                            <table class="bd-r-left" style="width: 100%;">
                                <tr><td class="labelReport">Title</td><td> <h2 class="header_report_operator">Header Data of Title Report</h2></td>
                                </tr>
                                <tr>
                                    <td class="labelReport">Message</td>
                                    <td style="width: 80%;"> 
                                        <p class='txt_report_operator' id='txt_report_operator<?php echo $eres; ?>' name="txtresponse<?php echo $eres; ?>">
        <?php echo $J_R_O['reports'][$R_Op]['notes']; ?>
                                        </p>
                                    </td>
                                    <td>
                                        <input type="submit" class="btn-primary btn-sm btn-report_operator" onclick="printingReportEtislat(<?php echo $eres; ?>)" style="float: right;display: block;" value="Print"/> 
                        <input type="submit" class="btn-primary btn-sm btn-report_operator" data-toggle="modal" data-target="#effect_op_Response" value="Replay" onclick="Response_OP_Etislat(<?php echo $eres ?>)"/>
                    
                                    </td>
                                </tr>
                                <tr>
                                    <td class="labelReport">Date And Time:</td>
                                    <td class="div_Eamil_Name_Date"><label style="margin-left: 12px;"><?php echo $J_R_O['reports'][$R_Op]['time']; ?></label></td>
                                </tr>

                            </table>
                        </td>
                        <td style="width: 1px;">
                        </td>
                        </tr>
            <tr><td> 


                         </td></tr> 
                    </table>
        <?php if ($J_R_O['reports'][$R_Op]['response'] != "") { ?>
                        <div id="" class ="report_operator_data bd-r-left" style="width: 100%;">
                            <table id="TabelResponsesDisplay<?php echo $eres; ?>" class="table_report_operator" style=" font-size: 15px; width: 100%;">
                                <tr>
                                    <td style="background-color: #BCED91; color: black; width: 16.5%;" class="bd-r-left">Response</td>
                                    <td>
                                        <div class="txt_report_operator" id="Respose_For_Report_NTRA<?php echo $eres; ?>">
            <?php echo $J_R_O['reports'][$R_Op]['response']; ?>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
        <?php } ?>
                    <div id="NewResponse<?php echo $eres; ?>">

                    </div>
                </div>
        <?php echo "<div id='Response_Report$eres'; hidden=''>"; ?>
                <div class="container-fluid">
                    <div class="row">
                        <div>
                            <form method="post" style="" id="responseReporter" class="form-group" role="form">
                                <div class="form-group">
                                    <table class="table_report_operator bd-r-left tabelReports" style="width: 100%; margin-top: 10px;">
                                        <tr>
                                            <td class="labelReport writeResponse bd-r-left" style="width: 16.5%; border-top-left-radius: 75px;">Message : </td>
                                            <td style=" border-top: 3px solid #BCED91; border-right: 3px solid #BCED91;">
                                                <label id="ReportText<?php echo $eres; ?>" style="float: left; margin-left: 12px;" ><?php echo $J_R_O['reports'][$R_Op]['notes']; ?></label></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 16.5%;" class="labelReport writeResponse" style="width: 16.5%; ">Response Report :</td>
                                            <td><textarea type="text" id="username" class="form-control" 
                                                          style="border-bottom: 3px solid #BCED91; border-right: 3px solid #BCED91;"
                                                          placeholder="Enter Your Message Here" name="txtRepsonseMessageOperator<?php echo $eres; ?>"></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                    <table style="margin-left: 300px; margin-top: 10px;" class="table_report_operator bd-r-left tabelReports">
                                        <tr>
                                            <td><input type="submit" id="btnSendResponse<?php echo $eres; ?>"  class="btn-success btn-lg"  value="Send Report" onclick="actionResponseEtislatReport(document.getElementsByName('txtRepsonseMessageOperator' + Div)[0].value)"/></td>
                                            <td><input type="submit" class="btn-success btn-lg" style="margin-left: 100px;" value="Cancel" onclick="actionResponseEtislatReport('')"/></td>

                                        </tr>

                                    </table>
                                </div>
                            </form>  
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-8">

                        </div>
                    </div>
                </div>
                <?php echo '</div>'; ?>
                <div id="NewResponse<?php echo $eres; ?>" class ="report_operator_data bd-r-left" style="width: 100%;">
            <table id="TabelResponsesDisplayNew<?php echo $eres; ?>"  class="table_report_operator hidden"  style=" font-size: 15px; width: 100%;">
                <tr>
                    <td style="background-color: #BCED91; color: black; width: 16.5%;" class="bd-r-left">Response</td>
                    <td>
                        <div class="txt_report_operator" id="Respose_For_Report_NTRANew<?php echo $eres; ?>">
                            aSasaSAsa
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <?php } ?>
        </div>
<?php } ?>

</div>

