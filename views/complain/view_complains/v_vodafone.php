<style>
    * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    a {
        color: #03658c;
        text-decoration: none;
    }

    ul {
        list-style-type: none;
    }

    body {
        font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
        background: #dee1e3;
    }

    /** ====================
     * Lista de Comentarios
     =======================*/


    .comments-container h1 {
        font-size: 36px;
        color: #283035;
        font-weight: 400;
    }

    .comments-container h1 a {
        font-size: 18px;
        font-weight: 700;
    }

    .comments-list {
        margin-top: 30px;
        position: relative;
    }

    /**
     * Lineas / Detalles
     -----------------------*/
    .comments-list:before {
        content: '';
        width: 2px;
        height: 100%;
        background: #c7cacb;
        position: absolute;
        left: 32px;
        top: 0;
    }

    .comments-list:after {
        content: '';
        position: absolute;
        background: #c7cacb;
        bottom: 0;
        left: 27px;
        width: 7px;
        height: 7px;
        border: 3px solid #dee1e3;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
    }

    .reply-list:before, .reply-list:after {display: none;}
    .reply-list li:before {
        content: '';
        width: 60px;
        height: 2px;
        background: #c7cacb;
        position: absolute;
        top: 25px;
        left: -55px;
    }


    .comments-list li {
        margin-bottom: 15px;
        display: block;
        position: relative;
    }

    .comments-list li:after {
        content: '';
        display: block;
        clear: both;
        height: 0;
        width: 0;
    }

    .reply-list {
        padding-left: 88px;
        clear: both;
        margin-top: 15px;
    }
    /**
     * Avatar
     ---------------------------*/
    .comments-list .comment-avatar {
        width: 65px;
        height: 65px;
        position: relative;
        z-index: 99;
        float: left;
        border: 3px solid #FFF;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
        box-shadow: 0 1px 2px rgba(0,0,0,0.2);
        overflow: hidden;
    }

    .comments-list .comment-avatar img {
        width: 100%;
        height: 100%;
    }

    .reply-list .comment-avatar {
        width: 50px;
        height: 50px;
    }

    .comment-main-level:after {
        content: '';
        margin-bottom: 10px;
        width: 0;
        height: 0;
        display: block;
        clear: both;
    }
    /**
     * Caja del Comentario
     ---------------------------*/
    .comments-list .comment-box {
        width: 943px;
        float: right;
        margin-bottom: 10px;
        position: relative;
        -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
        -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
        box-shadow: 0 1px 1px rgba(0,0,0,0.15);
    }

    .comments-list .comment-box:before, .comments-list .comment-box:after {
        content: '';
        height: 0;
        width: 0;
        position: absolute;
        display: block;
        border-width: 10px 12px 10px 0;
        border-style: solid;
        border-color: transparent #FCFCFC;
        top: 8px;
        left: -11px;
    }

    .comments-list .comment-box:before {
        border-width: 11px 13px 11px 0;
        border-color: transparent rgba(0,0,0,0.05);
        left: -12px;
    }

    .reply-list .comment-box {
        width: 610px;
    }
    .comment-box .comment-head {
        background: #FCFCFC;
        padding: 10px 12px;
        border-bottom: 1px solid #E5E5E5;
        overflow: hidden;
        -webkit-border-radius: 4px 4px 0 0;
        -moz-border-radius: 4px 4px 0 0;
        border-radius: 4px 4px 0 0;
    }

    .comment-box .comment-head i {
        float: right;
        margin-left: 14px;
        position: relative;
        top: 2px;
        color: #A6A6A6;
        -webkit-transition: color 0.3s ease;
        -o-transition: color 0.3s ease;
        transition: color 0.3s ease;
    }

    .comment-box .comment-head i:hover {
        color: #03658c;
    }

    .comment-box .comment-name {
        color: #283035;
        font-size: 14px;
        font-weight: 700;
        float: left;
        margin-right: 10px;
    }

    .comment-box .comment-name a {
        color: #283035;
    }

    .comment-box .comment-head span {
        float: left;
        color: #999;
        font-size: 13px;
        position: relative;
        top: 1px;
    }

    .comment-box .comment-content {
        background: #FFF;
        padding: 12px;
        font-size: 15px;
        color: #595959;
        -webkit-border-radius: 0 0 4px 4px;
        -moz-border-radius: 0 0 4px 4px;
        border-radius: 0 0 4px 4px;
    }

    .comment-content:hover{ text-decoration: none;}
    .comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #03658c;}


    /** =====================
     * Responsive
     ========================*/
    @media only screen and (max-width: 766px) {
        .comments-container {
            width: 480px;
        }

        .comments-list .comment-box {
            width: 390px;
        }

        .reply-list .comment-box {
            width: 320px;
        }
    }
</style>
<?php
//echo 'mobinil<br/>';
//echo 'sadasdas';
$ComplainJson = $_SESSION['ViewComplains'];
include_once './models/links.php';include_once './models/NSfunction.php';
//question_id=17&answer=thisismyanswer
$linker = new links(); $ns=new NSfunction_class();
$link = $linker->Response_complain();
$counter = count($ComplainJson['complains']);
$ComplainsVodafone = 0;
$solvedVodafone = 0;
$unsolvedVodafone = 0;
$id_unSolvedComplainsVodafone = array();
$id_SolvedComplainsVodafone = array();
include_once './models/NSfunction.php';
$ns=new NSfunction_class();

?>
<script>
    var Comp;
    function sender() {
        alert("sending");
    }
    function VodafoneAnswer(d) {
        var res = "<?php echo $counter; ?>";
        for (var i = 0; i < res; i++) {
            if ($('#Complain_Complain' + i).is(":visible"))
                $('#Complain_Complain' + i).slideUp();
        }
        Comp = d;
        $('#Complain_Complain' + d).slideToggle("slow");
        $('#Complain_Complain' + d).removeAttr('hidden');
    }

    function actionComplainVodafone(d) {
        $('#Complain_Complain' + Comp).slideToggle("slow");
        if (d === '')
            return;
        var ID = document.getElementById('subscriberID' + Comp).innerHTML;
        $('#TabelResponsesDisplayData' + Comp).removeClass('hidden');
        document.getElementById('AnswerComplains' + Comp).innerHTML = d;
        var myurl = "<?php echo $link; ?>";
        myurl += "question_id=" + ID + "&answer=" + d;
        httpGetData(myurl);
    }
</script>


<!-- Contenedor Principal -->
<div class="comments-container" style="overflow-y: scroll; height: 764px; width: 101%;">

    <ul id="comments-list" class="comments-list">
        <li>
            <?php for ($i = 0; $i < count($ComplainJson['complains']); $i++) { ?>
                <div class="comment-main-level">
                    <!-- Avatar -->
                    <?php if ($ComplainJson['complains'][$i]['operator'] == '2') {
                        $ComplainsVodafone++; ?>
                    <div class="comment-avatar"><img style="float: left;" src="<?php echo $ns->Image_DisplayById($ComplainJson['complains'][$i]['from']); ?>" alt=""></div>
                        <!-- Contenedor del Comentario -->
                        <div class="comment-boxerss">   
                            <div class="comment-headerss">
                                <a href="">
                                    <form class="TabelComplain" >
                                        <table style="width: 100%;">
                                            <tr><td>
                                                    <label id="subscriberID<?php echo $i; ?>"><?php echo $ComplainJson['complains'][$i]['id']; ?></label></a></h6>
                            </td><td><span class="date"><?php echo "Time :  " . $ComplainJson['complains'][$i]['time']; ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color: green;">Floor Number: <?php echo $ComplainJson['complains'][$i]['floor_number']; ?></td>
                                                <td style="color: green;">Apartment Number: <?php echo $ComplainJson['complains'][$i]['Apartemant']; ?></td>
                                                <td style="color: green;">Address <?php echo "<label>".$ComplainJson['complains'][$i]['address']."</label>"; ?></td>
                                                
                                            </tr>
                                            <tr>
                                            <tr><td style="color: green;">Problem Type</td><td><?php echo $ns->ComplainType($ComplainJson['complains'][$i]['problem type']); ?></td></tr>
                                            <tr><td style="color: green;">Problem Details</td><td><?php echo $ns->ComplainSelectDetails($ComplainJson['complains'][$i]['problem_details']); ?></td></tr>

                                            </tr>
                                        </table>
                                   
        <?php echo "<div id='Display_Complains_op$i'; hidden=''>"; ?>
                                        <table>
                                            <tr><td><span><?php echo "Contract Number :  " . $ComplainJson['complains'][$i]['Contract_Number']; ?></span></td></tr>
                                            <tr><td><span><?php echo "Start Date :  " . $ComplainJson['complains'][$i]['start_date']; ?></span></td></tr>
                                            <tr><td><span><?php echo "solved :  " . $ComplainJson['complains'][$i]['solved']; ?></span></td></tr>
                                            <tr><td><span><?php echo "Address :  " . $ComplainJson['complains'][$i]['address']; ?></span></td></tr>
                                            <tr><td><span><?php echo "detect_manual :  " . $ComplainJson['complains'][$i]['detect_manual']; ?></span></td></tr>
                                            <tr><td><span><?php echo "access_Network :  " . $ComplainJson['complains'][$i]['access_Network']; ?></span></td></tr>
                                            <tr><td><span><?php echo "problem type :  " . $ComplainJson['complains'][$i]['problem type']; ?></span></td></tr>
                                            <tr><td><span><?php echo "Apartemant :  " . $ComplainJson['complains'][$i]['Apartemant']; ?></span></td></tr>
                                            <tr><td><span><?php echo "Floor Number :  " . $ComplainJson['complains'][$i]['floor_number']; ?></span></td></tr>
                                            <tr><td><span><?php echo "Address :  " . $ComplainJson['complains'][$i]['address']; ?></span></td></tr>
                                        </table>
        <?php echo '</div>'; ?>
                                        
                            
                                        <div class="comment-content">
        <?php echo $ComplainJson['complains'][$i]['complain']; ?>
                                        </div>
                                       
        <?php if ($ComplainJson['complains'][$i]['answer'] != NULL) {
            $solvedVodafone++;
            $id_SolvedComplainsVodafone[] = $i; ?>
                                            <table id="TabelResponsesDisplayData<?php echo $i; ?>"  class="table_report_operator"  style=" font-size: 15px; wihidddensdth: 100%;">
                                                <tr>
                                                    <td style="background-color: #BCED91; color: black; width: 16.5%;" class="bd-r-left">Response</td>
                                                    <td>
                                                        <div class="txt_report_operator" id="AnswerComplains<?php echo $i; ?>">
            <?php echo $ComplainJson['complains'][$i]['answer']; ?>
                                                        </div>
                                                    </td>
                                                </tr> 
                                            </table>
        <?php } else {
            $unsolvedVodafone++;
            $id_unSolvedComplainsVodafone[] = $i; ?>
                                            <table id="TabelResponsesDisplayData<?php echo $i; ?>"  class="table_report_operator hidden"  style=" font-size: 15px; wihidddensdth: 100%;">
                                                <tr>
                                                    <td style="background-color: #BCED91; color: black; width: 16.5%;" class="bd-r-left">Response</td>
                                                    <td>
                                                        <div class="txt_report_operator" id="AnswerComplains<?php echo $i; ?>">
                                                            aSasaSAsa
                                                        </div>
                                                    </td>
                                                </tr> 
                       <input type="submit" id="ResponseVodafoneAnswer<?php echo $i; ?>" onclick="VodafoneAnswer(<?php echo $i; ?>)" style="margin-left: 67px; margin-top: 12px" class="btn-success btn-lg" value="Response For Complain"/>

                                            </table>
        <?php } ?>
                         </form>
                                    </a>
                            </div>
                            </div>
                        
                            
                                            <?php echo "<div id='Complain_Complain$i'; hidden=''>"; ?>
                        <a href="">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div>
                                                    <form method="post" style="" id="responseComplainer" class="form-group" role="form">
                                                        <div class="form-group">
                                                            <table class="table_complain_operator bd-r-left tabelComplains" style="width: 100%; margin-top: 10px;">
                                                                <tr>
                                                                    <td class="labelComplain writeComplain bd-r-left" style="width: 16.5%; border-top-left-radius: 75px;">Message : </td>
                                                                    <td style=" border-top: 3px solid #BCED91; border-right: 3px solid #BCED91;">
                                                                        <label id='ComplainTexts<?php echo $i; ?>' style="float: left; margin-left: 12px;" ><?php echo $ComplainJson['complains'][$i]['complain']; ?></label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 16.5%;" class="labelComplain writeComplain" style="width: 16.5%; ">Response Answer</td>
                                                                    <td><textarea type="text" id="username" class="form-control" style="border-bottom: 3px solid #BCED91; border-right: 3px solid #BCED91;"
                                                                                  placeholder="Enter Your Message Here" name="ResponseAnswerComplain<?php echo $i; ?>"></textarea>
                                                                    </td>
                                                                </tr>
                                                            </table>

                                                            <table style="margin-left: 300px; margin-top: 10px;" class="table_complain_operator bd-r-left tabelComplains">
                                                                <tr>
                                                                    <td><input type="submit" id="btnSCVodafone<?php echo $i; ?>"  class="btn-success btn-lg" value="Send Complain" onclick="actionComplainVodafone(document.getElementsByName('ResponseAnswerComplain' + Comp)[0].value)"/></td>
                                                                    <td><input type="submit" id="btnCancelVodafone<?php echo $i; ?>" class="btn-success btn-lg" style="margin-left: 100px;" value="Cancel" onclick="actionComplainVodafone('')"/></td>

                                                                </tr>

                                                            </table>
                                                        </div>
                                                    </form>  
                                                </div>
                                                <div class="col-sm-9 col-md-6 col-lg-8">

                                                </div>
                                            </div>
                                        </div>
                            </a>
        <?php echo '</div>'; ?>
                                        </div>
                                    <?php } ?>
                                <?php } ?> 
                                </li>
                                </ul>
                                </div>
                                <?php
//echo $ComplainsVodafone."<br/>";echo $solvedVodafone."<br/>";
                                $_SESSION['ComplainsVodafone'] = $ComplainsVodafone;
                                $_SESSION['solvedVodafone'] = $solvedVodafone;
                                $_SESSION['unsolvedVodafone'] = $unsolvedVodafone;
                                $_SESSION['id_unSolvedComplainsVodafone'] = $id_unSolvedComplainsVodafone;
                                $_SESSION['id_SolvedComplainsVodafone'] = $id_SolvedComplainsVodafone;
//var_dump($_SESSION['id_SolvedComplainsVodafone']);
//
                                $_SESSION['ProfileunsolvedComplain'] = $id_unSolvedComplainsVodafone;
                                $_SESSION['ProfilesolvedComplain'] = $id_SolvedComplainsVodafone;
                                ?>