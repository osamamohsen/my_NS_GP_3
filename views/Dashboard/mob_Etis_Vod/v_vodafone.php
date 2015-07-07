<style>
    .report_operater_container{margin: 15px;}
    .report_operator_data{border: 1px solid silver;margin-top: 12px; opacity: 0.7;}
.report_operator_data:hover{opacity: 1;}
.header_report_operator,.txt_report_operator,.image_report_operator{margin: 10px; color: black;}
.image_report_operator{width: 219px; height: 84px;float: left;  /* For IE8 and earlier */}
.header_report_operator{font-size: 21px; font-family: cursive;}
.txt_report_operator{font-size: 16px; float: right; color: black;}
.btn-report_operator{margin: 7px 7px 7px 7px;}
.div_Eamil_Name_Date{margin-left: 7px; color: black;}
</style>
<div style="overflow-y: scroll; height: 450px;">
    <div class ="report_operator_data" >
<?php
echo 'VODAFONE<br/>';
//offers id starts from id=13
include_once './models/NSfunction.php';
$func2=new NSfunction_class();
$result2=$_SESSION['offers'];
$url2 = 'http://corsignal.com/networksignal/parsedata/subscribers/imgs/SH.A_Logo.jpg';  
$couter=0;
$path="./resources/images/offers/2_";
for($i=0;$i<count($result2['offers']);$i++)
{
    if($result2['offers'][$i]['made_by']==2) //2- ID of vodafone
    {
?>

        <table class="table_report_operator">
            <tr>
                <td>
                      <img class="image_report_operator" src="<?php echo $func2->Image_Display($path,$couter);  ?>" alt="Test image" />;
     <?php $couter++; ?>              
                    <div class="div_Eamil_Name_Date">
                        <label>Start date :<?php echo $result2['offers'][$i]['start_offer'] ?></label><br/>
                        <label>End date   :<?php echo $result2['offers'][$i]['end_offer'] ?></label><br/>
                        <label>Time       :<?php echo $result2['offers'][$i]['time'] ?></label>
                    </div>
                </td>
                
                <td>  
                    <p class="txt_report_operator"> <?php echo $result2['offers'][$i]['description'] ?></p>
                </td>
            
               
            </tr>
        </table>
<?php }

    } ?>
       <?php $_SESSION['countoffer']=$couter; ?>
        
  </div>
</div>