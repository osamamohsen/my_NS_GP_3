<?php 
include_once './control/Reports/v_reports_Operators.php';
$R_P=new ReportsOperator();
$J_R_O=$R_P->GetReportData();
echo $Reports=count($J_R_O['reports']);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<style>
    #ContactForm{margin-top:129px;}#myContainersss{background-color: white;}
    .btn-primary,.btn-danger{margin-left: 13%; width: 180px;  float: left; display: block;}
</style>

<style>
    body { font-family: Arial, sans-serif; background: #ccc;}
h2 {text-align: center; letter-spacing: -2px; text-transform: uppercase; color: #999; font-size: 2em; margin: 0;}
#block {width: 344px; float: left; text-align: center; padding: 20px; border-radius: 10px; margin-left: 125px; margin-top: -44px;}
p {text-align: center; font-size: 0.8em; color: #666;}
p input {padding: 10px; display: block; margin: 10px auto; width: 50px; border-radius: 2px; border: 1px solid #ccc; text-align: center;}
#loadingBar {border-radius: 3px; width: 300px; height: 32px; background: #efefef; border: 1px solid #ccc; padding: 2px; position: relative; overflow: hidden; margin-bottom: 10px; margin-left: 10px; -moz-box-shadow: 0px 0px 10px 1px #aaa;
-webkit-box-shadow: 0px 0px 10px 1px #aaa; box-shadow: 0px 0px 10px 1px #aaa;}
#container {width: 100%; height: 100%; background: #fff; border-radius: 2px; position: relative; overflow: hidden;} 
#bar {width: 100%; height: 100%; background: #666; position: absolute; top: 0; left: -100%; color: #888; text-align: center; text-transform: uppercase; letter-spacing: 1px; line-height: 30px; font-weight: bold; font-size: 0.7em;}

</style>
<script>
    $('document').ready(function(){
  $('#sendReportNTRA').click(function(){ 
  
    $('#bar').css('left','-100%');
    $('#bar').html('');
    $('#bar').stop().animate({
       left: '+=100%'
     }, 5000, function() {
       $('#bar').html('Message Had Been Sent');
     });
    });

    });
    function printReport() {
        var prtContent = document.getElementById("myContainersss");
        var WinPrint = window.open('', '', 'left=0,top=0,width=1500,height=2000,toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
    function Send_Report(text, header) {
        alert("asdas");
        document.getElementById('Report_title').value="";
        document.getElementById('Report_text').value="";
        var e = document.getElementById("ddlViewBy");
        var strUser = e.options[e.selectedIndex].value;
        if(strUser!='Choose Operator'){
        var dataUrl = 'http://corsignal.com/networksignal/parsedata/NTRA/add_report.php?to='+strUser+'&notes=' + text;
       // httpGetData(dataUrl);
    }
    }
</script>
<div class="section-page-landing" id="contact">
    <div class="inner-section">
        <div class="container" id="myContainersss">
            <form role="form" class="contact-form" id="ContactForm" method="get">

                <div class="row">
                    <p style="margin-left: 20px; font-size: 17px; color: 0000ff;">
                        <?php echo $_SESSION['user']['employees']['name'] . " >> REPORT TO"; ?>        
                    </p>

                    <div class="col-sm-4">
                        <div >
                            <select class="form-control input-lg form-group" id="ddlViewBy">
                                <option selected>Choose Operator</option>
                                <option value="3" style="color: #7fb03e;">Etislat</option>
                                <option value="1" style="color: orange;">Mobinil</option>
                                <option value="2" style="color: red;">Vodafone</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" id="Report_title"   name="YourTitle" class="form-control input-lg" style="width: 728px;" placeholder="Please Enter Your Title">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="Report_text" name="YourMessage" style="height: 400px; width: 1120px;" placeholder="Your message"></textarea>
                </div><br/>
                <input type="submit" id="sendReportNTRA"  name="send" value="Send" onclick="Send_Report((document.getElementsByName('YourMessage')[0].value), (document.getElementsByName('YourTitle')[0].value))" class="btn-lg btn-primary"/>
                <input type="submit"  class="btn-lg btn-danger" style="margin-left: 102px;" value="Print" onclick="printReport()" />
                
<div id="block">

  <h5>Sending Report</h5>
  <div id="loadingBar">
    <div id="container">
      <div id="bar"></div>
    </div>
  </div>
  
</div>
            </form><br/><br/><?php //action="./views/report/v_report.php" ?>

        </div>
    </div>
</div>