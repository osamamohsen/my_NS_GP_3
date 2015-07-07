<?php
echo 'Vodafone';
?>
<?php
$response = $_SESSION['ViewComplains'];
$counter = count($response['complains']);

$ComplainsVodafone=$_SESSION['ComplainsVodafone'];
$solvedVodafone=$_SESSION['solvedVodafone'];
$unsolvedVodafone=$_SESSION['unsolvedVodafone'];
$id_unSolvedComplainsVodafone=$_SESSION['id_unSolvedComplainsVodafone'];
$id_SolvedComplainsVodafone=$_SESSION['id_SolvedComplainsVodafone'];
include_once './models/NSfunction.php';
$ns3= new NSfunction_class();
$path="./resources/images/user/";
?>

<div>
    <div class="response_message">
        <h3 class="header_message">Complain Responses</h3>
        <div class="message-box">

            <?php for ($i = 0; $i < count($id_SolvedComplainsVodafone); $i++) {?>
                
                    <div class="message-1">
                        <div class="message-logo"><img src="<?php echo $ns3->Image_Display($path, $response['complains'][$id_unSolvedComplainsVodafone[$i]]['from']); ?>"></div>
                        <div class="messageheader">
                            <div class="messagedate">
                                <p style="float: left; margin-right: 217px;">Start Date <?php echo $response['complains'][$i]['start_date']; ?></p>
                                <p style="float: right;"> Sent: <?php echo $response['complains'][$id_SolvedComplainsVodafone[$i]]['time']; ?></p>

                            </div>
                        </div>
                        <div class="messagecontent"><?php echo $response['complains'][$id_SolvedComplainsVodafone[$i]]['complain']; ?></div>
                    </div>

                    <div class="message-2">
                        <div class="messageheader"><div class="messagedate">Sent: 2013-11-14 06:31</div>
                            <div class="sender">
                                <div style="float: left;">From:<?php echo $response['complains'][$id_SolvedComplainsVodafone[$i]]['id'] . "<br/>"; ?> </div>
                                <div style="float: left;">Contact Number:<?php echo $response['complains'][$id_SolvedComplainsVodafone[$i]]['Contract_Number']; ?></div>
                            </div>

                        </div>
                        <div class="messagecontent"><?php echo $response['complains'][$id_SolvedComplainsVodafone[$i]]['answer']; ?> </div>
                    </div>

                    <div style="clear:both; border:0;"></div>
        <?php }//end for loop ?>
        </div>
    </div>
</div>
<!--<script>
function follow(){
    alert("asda");
    var complains="<?php echo $ComplainsVodafone; ?>";
    var solved="<?php echo $solvedVodafone; ?>";
    var unsolved="<?php echo $unsolvedVodafone; ?>";
    var data=document.getElementById('follwTabel tr td').innerHTML;
//    document.getElementById('solvedMobinil').innerHTML=solved;
//    document.getElementById('NotSolvedMobinil').innerHTML=unsolved;
alert(data);
    alert(complains);
//    alert(solved);
//    alert(unsolved);
//    alert("here");
}
</script>-->

<?php // echo "<script type='text/javascript'>follow();</script>"; ?>

<div>
    <div><img src="./resources/images/bk-freeze-ga.jpg" class="follow imagefollow"/></div>

    <div>
        <table id="follwTabel" class="follow table-box" style="border: 1px #3498db solid;">
            <tr><th>Operator</th><th>Total</th><th>Solved</th><th>Not Solved</th></tr>
            <tr><td>Vodafone</td>
                <td><div id="totalMobinil"><?php echo $ComplainsVodafone; ?></div></td>
                <td id="solvedMobinil"><?php echo $solvedVodafone; ?></td>
                <td id="NotSolvedMobinil"><?php echo $unsolvedVodafone; ?></td>
            </tr>
        </table>
    </div>
</div>

<div>
        <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">


        <span class="first"> 
            Complains
            <span class="icon-edit new"></span>
        </span>
        
        <ul class="timeline">
        <div style="overflow-y: scroll; height: 314px;">
            <?php for ($i = 0; $i < count($id_unSolvedComplainsVodafone); $i++) { ?>
                            <!-- $response['complains'][$i]['operator'] -->
            <li>
                <div class="avatar">
                    <img src="<?php echo $ns3->Image_DisplayById($response['complains'][$id_unSolvedComplainsVodafone[$i]]['from']); ?>">
                </div>
                <div class="bubble-container">
                    <div class="bubble">
                        <div class="retweet">
                            <div class="icon-retweet"></div>
                        </div>
                        <h3><?php echo "ID: ".$response['complains'][$i]['id']; ?></h3>
                        <h3><?php echo "StartDate: ".$response['complains'][$i]['start_date']; ?></h3><br/>
                        <?php echo $response['complains'][$id_unSolvedComplainsVodafone[$i]]['complain']; ?>
                        <div class="over-bubble">
                            <div class="icon-mail-reply action"></div>
                            <div class="icon-retweet action"></div>
                            <div class="icon-star"></div>
                        </div>
                    </div>

                    <div class="arrow"></div>
                </div>
            </li>
            <?php } ?>

        </div>

        </ul>
</div>

