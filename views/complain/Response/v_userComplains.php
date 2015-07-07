<?php
//echo 'user Complain Response<br/>';
//var_dump( $_SESSION['user']);
$user=$_SESSION['user'];
//var_dump($user);
//echo '<br/>';
//employees id
include_once './models/links.php';
$links=new links();
$link=$links->show_complain_By_id($user['employees']['id']);
//echo $link;echo '<br/>';
$res=file_get_contents($link,TRUE);
//$userComplains=count($res);
//var_dump($res);
$subscriber=json_decode($res,TRUE);
$_SESSION['Complain_userID']=$subscriber
?>



<style>
    

    .response_message{float: left; display: block; width: 60%;}
    .message-box {min-height:250px; overflow-y: scroll; height: 595px; direction: rtl; position:relative;
                  z-index:1; padding: 20px; font-family:arial;}
    .header_message{border: 2px silver solid; border-top-right-radius:8px;text-align: center;font-family: cursive;
border-top-left-radius: 8px; width: 100%; background-color: #3498db; color: white; font-size: 1.6em; padding: 9px; }
    .header_message h1{text-align: center;}
    .message-box > div {padding:0; border:1px solid #ccc; box-shadow:0 3px 3px #aaa; margin-top:-1px;}
    .message-box > div:first-child { border-top:1px solid #ccc;}

    .message-box > div.message-1 {float:left; border:1px solid #ccc; padding:5px 10px 10px; margin:0 0 10px -5px; border-radius:10px; width:490px; background:#ff693b + 180;}
    .message-box > div.message-1:before {border-bottom: 10px solid rgba(0, 0, 0, 0); border-left: 10px solid #ccc; border-top: 10px solid rgba(0, 0, 0, 0); content: ""; float:left; display: inline-block; left: 500px; position: relative; top: 20px;}
    .message-box > div.message-1 > .message-logo {padding:0; margin:0; position:absolute; left:550px; border:1px solid #ccc; border-radius:5px; width:64px; height:64px;}

    .message-box > div.message-2 {float:left; border:1px solid #ccc; padding:5px 10px 10px; margin:0 0 10px 85px; border-radius:10px; width:490px; background:#e7f1ff;}
    .message-box > div.message-2:before {border-bottom: 10px solid rgba(0, 0, 0, 0); border-right: 10px solid #ccc; border-top: 10px solid rgba(0, 0, 0, 0); content: ""; float:left; display: inline-block; left: -20px; position: relative; top: 20px;}
    .message-box > div.message-2 > .message-logo {padding:0; margin:0; position:absolute; left:20px; border:1px solid #ccc; border-radius:5px; width:64px; height:64px;}

    .message-logo > img {border-radius:5px; width:100%; height:100%;}
    .message-box > div.message-1 .sender, .message-box >  {display:none;}

    .message-box > div > div {float:left; margin:0 20px 0 0; padding:0 20px 0 0;}
    .message-box > div > div.messageheader {width:96%; border-bottom:1px solid #ccc; margin:-15px 1% 5px; padding:0 0 5px;}
    .message-box > div.message-2 > div.messageheader:before {border-bottom: 9px solid rgba(0, 0, 0, 0); border-right: 9px solid #e7f1ff; border-top: 9px solid rgba(0, 0, 0, 0); content: ""; float:right; display: inline-block; left: -485px; position: relative; top: 16px; z-index:1;}
    .message-box > div.message-1 > div.messageheader:before {border-bottom: 9px solid rgba(0, 0, 0, 0); border-left: 9px solid #ff693b + 180; border-top: 9px solid rgba(0, 0, 0, 0); content: ""; float:right; display: inline-block; left: 33px; position: relative; top: 16px; z-index:1;}
    .message-box > div > div > div.sender {float:left; width:50%; font-weight:bold;}
    .message-box > div > div >  {float:left; width:50%; font-weight:bold;}
    .message-box > div > div > div.messagecontent {}
    .message-box > div > div.message-download {margin: 10px 5px 0; padding: 2px 10px; text-align: center; width: 100px; float:right;}
    .message-box > div > div > div.messagedate {float:right; font-size:11px; font-style:italic;}
    .follow{width: 411px; margin-left: 15px; display: block; float: left;}
    .imagefollow{border-top-left-radius: 15px;border-top-right-radius: 15px; height: 105px;}
    #follwTabel th,#follwTabel td{text-align: center;}
</style>


<?php

$TotaluserComplain=  count($res);
$userComplainsunSolved=array();
$userComplainSolved=array();
$userComplainsolvedVIEWID=array();
$userComplainunsolvedVIEWID=array();

$solvedUSERComplain=0; $unsolvedUSERComplain=0; 

?>
<div>
    <div class="response_message">
        <h3 class="header_message">Complain Responses</h3>
        <div class="message-box">

            <?php for ($i = 0; $i < count($subscriber); $i++) {
                
                if($subscriber[$i]['answer']!=NULL){
                    $userComplainsolvedVIEWID[]=$subscriber[$i]['id'];
                    $solvedUSERComplain++;
                    $userComplainSolved[]=$i;
                ?>
                
                    <div class="message-1">
                        <div class="message-logo"><img  src="<?php echo $_SESSION['image']; ?>"></div>
                        <div class="messageheader">
                            <div class="messagedate">
                                <p style="float: left; margin-right: 217px;">Start Date <?php echo $response['complains'][$i]['start_date']; ?></p>
                                <p style="float: right;"> Sent: <?php echo $subscriber[$i]['time']; ?></p>

                            </div>
                        </div>
                        <div class="messagecontent"><?php echo $subscriber[$i]['complain']; ?></div>
                    </div>

                    <div class="message-2">
                        <div class="message-logo"><img src="<?php echo $_SESSION['imageoperator']; ?>"></div>
                        <div class="messageheader"><div class="messagedate">Sent: 2013-11-14 06:31</div>
                            <div class="sender">
                                <div style="float: left;">From:<?php  echo $subscriber[$i]['id'] . "<br/>"; ?> </div>
                                <div style="float: left;">Contact Number:<?php echo $subscriber[$i]['Contract_Number']; ?></div>
                            </div>

                        </div>
                        <div class="messagecontent"><?php echo $subscriber[$i]['answer']; ?> </div>
                    </div>

                    <div style="clear:both; border:0;"></div>
                <?php }else{$userComplainsunSolved[]=$i; $unsolvedUSERComplain++;} ?>
        <?php }//end for loop ?>
        </div>
    </div>
</div>


<div>
    <div><img src="./resources/images/bk-freeze-ga.jpg" class="follow imagefollow"/></div>

    <div>
        <table id="follwTabel" class="follow table-box" style="border: 1px #3498db solid;">
            <tr><th>Operator</th><th>Total</th><th>Solved</th><th>Not Solved</th></tr>
            <tr><td><?php echo $user['employees']['name']; ?></td>
                <td><div id="totalMobinil"><?php echo $solvedUSERComplain+$unsolvedUSERComplain; ?></div></td>
                <td id="solvedMobinil"><?php echo $solvedUSERComplain; ?></td>
                <td id="NotSolvedMobinil"><?php echo $unsolvedUSERComplain; ?></td>
            </tr>
        </table>
    </div>
</div>

<div>
<style>
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
    }

    .bubble {
        /*width: 100%;*/
        padding: .5em 1em;
        line-height: 1.4em;
        padding: 20px;
        /*background-color: #ecf0f1;*/
        position: relative;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        border-radius: 8px;
        text-align: left;
        /*display: inline-block;*/ 
    }

    .bubble-container {
        /*width: 75%;*/
        /*display: block;*/
        position: relative;
        padding-left: 20px;
        vertical-align: top;
        /*display: inline-block;*/ 
    
    }
    .timeline {
        width: 413px;
        /*display: block;*/
        /*margin: auto;*/
        background-color: #dde1e2;
        padding-bottom: 2em;
        float: right;
        /*-webkit-box-shadow: #bdc3c7 0 5px 5px;*/
        -moz-box-shadow: #bdc3c7 0 5px 5px;
        box-shadow: #bdc3c7 0 5px 5px;
        -moz-border-radius-bottomleft: 8px;
        -webkit-border-bottom-left-radius: 8px;
        border-bottom-left-radius: 8px;
        -moz-border-radius-bottomright: 8px;
        -webkit-border-bottom-right-radius: 8px;
        border-bottom-right-radius: 8px;
        margin-bottom: 2em; }
    .timeline li {
        padding: 1em 0; }
    .timeline li:nth-child(even) {
        background-color: #d3d7d8; }

    


    .first {
        width: 412px;
        float: right;
        background-color: #3498db;
        text-shadow: #2084c7 1px 1px 0;
        padding: 1em 0 !important;
        color: white;
        text-align: center;
        margin-top: 1em;
        font-family: "Lato";
        font-size: 1.6em;
        -moz-border-radius-topleft: 8px;
        -webkit-border-top-left-radius: 8px;
        border-top-left-radius: 8px;
        -moz-border-radius-topright: 8px;
        -webkit-border-top-right-radius: 8px;
        border-top-right-radius: 8px;
        position: relative; }

    .icon-twitter {
        font-size: 1.5em; }

    .new {
        position: absolute;
        right: 5%; }

    .over-bubble {
        line-height: 1.4em;
        padding-top: 10%;
        background-color: rgba(236, 240, 241, 0.8);
        position: relative;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        border-radius: 8px;
        text-align: center;
        display: inline-block;
        position: absolute !important;
        /*height: 100%;*/
        /*width: 100%;*/
        opacity: 0;
        top: 0;
        left: 0;
        z-index: 999;
        -webkit-transition-property: all;
        -moz-transition-property: all;
        -o-transition-property: all;
        transition-property: all;
        -webkit-transition-duration: 0.3s;
        -moz-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: ease-in;
        -moz-transition-timing-function: ease-in;
        -o-transition-timing-function: ease-in;
        transition-timing-function: ease-in;
        font-size: 2.8em;
        text-shadow: white 1px 1px 0; }

    .action {
        margin-right: .3em;
        -webkit-transition-property: all;
        -moz-transition-property: all;
        -o-transition-property: all;
        transition-property: all;
        -webkit-transition-duration: 0.2s;
        -moz-transition-duration: 0.2s;
        -o-transition-duration: 0.2s;
        transition-duration: 0.2s;
        -webkit-transition-timing-function: ease-in;
        -moz-transition-timing-function: ease-in;
        -o-transition-timing-function: ease-in;
        transition-timing-function: ease-in; }

    .icon-star {
        -webkit-transition-property: all;
        -moz-transition-property: all;
        -o-transition-property: all;
        transition-property: all;
        -webkit-transition-duration: 0.2s;
        -moz-transition-duration: 0.2s;
        -o-transition-duration: 0.2s;
        transition-duration: 0.2s;
        -webkit-transition-timing-function: ease;
        -moz-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        transition-timing-function: ease; }

    .icon-retweet {
        -webkit-transition-property: all;
        -moz-transition-property: all;
        -o-transition-property: all;
        transition-property: all;
        -webkit-transition-duration: 0.2s;
        -moz-transition-duration: 0.2s;
        -o-transition-duration: 0.2s;
        transition-duration: 0.2s;
        -webkit-transition-timing-function: ease;
        -moz-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        transition-timing-function: ease; }


    .icon-mail-reply {
        -webkit-transition-property: all;
        -moz-transition-property: all;
        -o-transition-property: all;
        transition-property: all;
        -webkit-transition-duration: 0.2s;
        -moz-transition-duration: 0.2s;
        -o-transition-duration: 0.2s;
        transition-duration: 0.2s;
        -webkit-transition-timing-function: ease;
        -moz-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        transition-timing-function: ease; }


    h3 {
        font-size: 1.2em;
        font-weight: bold;
        font-family: 'Lato';
        display: inline-block;
        margin-bottom: .2em;
        color: #95a5a6; }

    .retweet {
        position: absolute;
        opacity: 1;
        top: 0;
        right: 1em;
        display: block;
        background-color: #16a085;
        padding: 4px;
        -moz-border-radius-bottomleft: 5px;
        -webkit-border-bottom-left-radius: 5px;
        border-bottom-left-radius: 5px;
        -moz-border-radius-bottomright: 5px;
        -webkit-border-bottom-right-radius: 5px;
        border-bottom-right-radius: 5px; }
    .retweet .icon-retweet {
        color: white;
        margin: auto;
        width: 100%;
        display: block;
        font-size: 1.2em; }


</style>
<?php
for ($i = 0; $i < count($userComplainSolved); $i++) {
    echo $userComplainsunSolved[$i];
}

?>
        <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">


        <span class="first"> 
            Complains
            <span class="icon-edit new"></span>
        </span>
        
        <ul class="timeline">
        <div style="overflow-y: scroll; height: 314px;">
            <?php for ($i = 0; $i < count($userComplainsunSolved); $i++) { ?>
                             <!--$response['complains'][$i]['operator']--> 
            <li>
                <div class="avatar">
                    <img src="<?php echo $_SESSION['image']; ?>">
                </div>
                <div class="bubble-container">
                    <div class="bubble">
                        <div class="retweet">
                            <div class="icon-retweet"></div>
                        </div>
                        <h3><?php $d=$subscriber[$userComplainsunSolved[$i]]['id'];    echo "ss".$d; $userComplainunsolvedVIEWID[]=$d; echo "ID: ".$subscriber[$userComplainsunSolved[$i]]['id']; ?></h3>
                        <h3><?php echo "StartDate: ".$subscriber[$userComplainsunSolved[$i]]['start_date']; ?></h3><br/>
                        <?php echo $subscriber[$userComplainsunSolved[$i]]['complain']; ?>
                        <div class="over-bubble">
                            <div class="icon-mail-reply action"></div>
                            <div class="icon-retweet action"></div>
                            <div class="icon-star"></div>
                        </div>
                    </div>

                    <div class="arrow"></div>
                </div>
            </li>

<?php // echo $unsolvedUSERComplain[$i];  ?>
            <?php } ?>
        </div>

        </ul>
</div>

