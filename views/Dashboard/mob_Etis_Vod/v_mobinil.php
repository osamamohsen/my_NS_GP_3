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
//./resources/images/offers/1_30.jpg
include_once './models/NSfunction.php';
$func3=new NSfunction_class();
$result3=$_SESSION['offers'];
$couter=0;
$url1 = 'http://corsignal.com/networksignal/parsedata/subscribers/imgs/SH.A_Logo.jpg';  
$path="./resources/images/offers/1_";
for($i=0;$i<count($result3['offers']);$i++)
{
    if($result3['offers'][$i]['made_by']==1) //1- ID of mobinil
    { 
?>

        <table class="table_report_operator">
            <tr>
                <td>
                    <img class="image_report_operator" src="<?php echo $func3->Image_Display($path,$couter);  ?>" alt="Test image" />;
      <?php $couter++; ?>              
                    <div class="div_Eamil_Name_Date">
                        <label>Start date :<?php echo $result3['offers'][$i]['start_offer'] ?></label><br/>
                        <label>End date   :<?php echo $result3['offers'][$i]['end_offer'] ?></label><br/>
                        <label>Time       :<?php echo $result3['offers'][$i]['time'] ?></label>
                    </div>
                </td>
                
                <td> 
                    <p class="txt_report_operator"> <?php echo $result3['offers'][$i]['description'] ?></p>
                </td>
            
               
            </tr>
            </table>
<?php }

    } ?>
       <?php $_SESSION['countoffer']=$couter; ?>
        
  </div><!--wego--> 
   <!--
   <div class ="report_operator_data">
        <table>
            <tr>
                <td>
                    <img class="image_report_operator" src="./resources/images/ntra1.jpg" />
                    <div class="div_Eamil_Name_Date">
                        <label>Email :  NTRA777@gmail.com</label><br/>
                        <label>Name  :   Mohamed Mostafa Ayman</label><br/>
                        <label>Date  :   18/2/2015</label>
                    </div>
                </td>
                <td> 
                    <h2 class="header_report_operator">we go</h2>  
                    <p class="txt_report_operator">On the occasion of Egypt Economic Development Conference which will be held in Sharm el-Sheikh, the National Telecommunications Regulatory Authority (NTRA), in collaboration with the Ministry of Communications and Information Technology (MCIT) has taken all measures to facilitate the issuance of customs releases of the devices and equipment for the delegations and representatives of satellite stations companies participating in the Conference.</p>
                </td>
            
            </tr>
       </table>
  </div> 
     //-->

</div><!--ar2014-->