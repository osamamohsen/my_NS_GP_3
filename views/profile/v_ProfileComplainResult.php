
<style>
#tabel_Event_Result{width: 100%;}
#tabel_Event_Result th{color: #3498DB; font-size: medium;}
    
</style>
<?php 

include_once '../../models/links.php';
$lin=new links();
$link=$lin->show_TerminalSamples_ByID($_SESSION['user']['employees']['sim_id']);
$js=file_get_contents($link);
$json=json_decode($js,TRUE);
//var_dump($json);
$event=array();
for ($i = 0; $i < 6; $i++) {$event[$i]=0;}
for ($i = 0; $i < count($json); $i++) {
    if($json['terminal_samples'][$i]['event']>0 && $json['terminal_samples'][$i]['event']<6) $event[$json['terminal_samples'][$i]['event']]++;
}
$_SESSION['profileEvent']=$event;
$_SESSION['ProfileusersolvedComplain']=null;
?>
<div Class="tabelDiplayResult" style="margin-bottom: 100px;">
    <div><img src="../../resources/images/bk-freeze-ga.jpg" class="ImageResult" /></div>
    <!--class="follow imagefollow"-->
    <div>
        <table id="tabel_Event_Result">
            <tr><th>Problem</th><th>Count</tr>
            <tr><td>Call Drop</td><td><?php echo $event[0]; ?></td></tr>
            <tr><td>Call Block</td><td><?php echo $event[1]; ?></td></tr>
            <tr><td>Poor Coverage</td><td><?php echo $event[2]; ?></td></tr>
            <tr><td>Silent Call</td><td><?php echo $event[3]; ?></td></tr>
            <tr><td>Cross Talk</td><td><?php echo $event[4]; ?></td></tr>
        </table>
    </div>
</div>
<div Class="tabelDiplayResult">
    <div><img src="../../resources/images/bk-freeze-ga.jpg" class="ImageResult" /></div>
    <!--class="follow imagefollow"-->
    <div>
        <table >
            <tr><th>Name</th><th>Total</th><th>Solved</th><th>Not Solved</th></tr>
            <tr>
                <?php
                   $user= $_SESSION['user'];  ?>
                <td><?php echo $user['employees']['name']; ?></td>
                <td><div id="totalMobinil"><?php echo $_SESSION['total']; ?></div></td>
                <td id="solvedMobinil"><?php echo  $_SESSION['total']-$_SESSION['ProfileuserunsolvedComplain']; ?></td>
                <td id="NotSolvedMobinil"><?php echo $_SESSION['ProfileuserunsolvedComplain']; ?></td>
                    
                
            </tr>
        </table>
    </div>
</div>