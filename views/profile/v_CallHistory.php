<?php
$user=$_SESSION['user'];
//var_dump($user);

include_once '../../models/links.php';
$links=new links();
$link=$links->call_Dislay_ByID($user['employees']['sim_id']);
$res=json_decode($link,TRUE);
//var_dump($res);
//echo count($res);
?>
<ul class="timeline">
<span class="first ComplainHeaderName"> 
    Calls History
    <span class="icon-edit new"></span>
</span>    
    <style>
        .callHistory{width: 100%;}
        .callHistory th,.callHistory td{text-align: center; padding: 5px;}
        .callHistory th{font-family: cursive; color: white; background-color: #3498db; font-size: large; }
        .callHistory td{font-family: serif; font-size: medium;}
        .noData{color: gray; font-family: cursive; text-align: center;}
    </style>
<div class="ComplainHeaderStatic ComplainHeader"> 

    <div style="margin-top: -17px; width: 112%; margin-left: -20px;">
        <table class="callHistory">
            <?php if(count($res==0)){echo "<h3 class='noData'><center>No Call History</center></h3>";}else{ ?>
            <tr><th>Start Time</th><th>End Time</th></tr>
        <?php for ($i = 0; $i < count($res); $i++) { ?>
            <!-- $response['complains'][$i]['operator'] -->
            <tr><td>oasid</td><td>asdlaslkdj</td></tr>
            <?php }} ?>
            
            </table>
    </div>
</div>
</ul>