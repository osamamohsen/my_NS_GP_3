<div class="home_menu_tabs" style="margin-top: 37px;">
    <?php if($_SESSION['kind']=="NTRA"){ ?>
    <ul class="home_menu_tab-list" style="float: left; width: 16%;height: 894px; margin-bottom: 1px; margin-top: -8px; background-color: steelblue;">
    <?php }else{ ?>
        <ul class="home_menu_tab-list" style="float: left; width: 16%;height: 793px; margin-bottom: 1px; margin-top: -8px; background-color: steelblue;">
<?php } ?>
        <li class="home_menu_tab1 active"><a href="#"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a></li>
        <li class="home_menu_tab3"><a href="#"><i class="fa fa-weibo"></i>&nbsp;NSPE</a></li>
        <?php if($kind=="OPERATOR" || $kind=="NTRA"){ ?>
        <li class="home_menu_tab2"><a href="#"><i class="fa fa-bar-chart-o"></i>&nbsp;statitcs</a></li>
        <li class="home_menu_tab6"><a href="#"><i class="fa fa-users"></i>&nbsp;Subscriber</a></li>
        <!--<li class="home_menu_tab9"><a href="#"><i class="fa fa-comments"></i>&nbsp;Call History</a></li>-->
        <li class="home_menu_tab11"><a href="#"><i class="fa fa-reply-all"></i>&nbsp;View Report</a></li>
        <li class="home_menu_tab12"><a href="#"><i class="fa fa-code-fork"></i>&nbsp;View Compalin</a></li>
        <?php } ?>
        <li class="home_menu_tab10"><a href="#"><i class="fa fa-mail-forward"></i>&nbsp;Complain Responses</a></li>

        <?php if($kind=="NTRA"){ ?>
        <li class="home_menu_tab7"><a href="#"><i class="fa fa-arrow-circle-right"></i>&nbsp;Send Report</a></li>
        <?php } ?>
         <?php if($kind=="USER"){ ?>
        <li class="home_menu_tab4"><a href="#"><i class="fa fa-book"></i>&nbsp;Complain</a></li>
        <?php } ?>
        <li class="home_menu_tab8"><a href="#"><i class="fa fa-heart"></i>&nbsp;Help</a></li>
       <!-- <li class="home_menu_tab17"><a href="#"><i class="fa fa-heart"></i>&nbsp;Help</a></li> -->

    </ul>

    <div class="home_menu_tab-content" style="float: left; width: 84%;">
        <div class="home_menu_tab1 active">
            <p><?php include './views/Dashboard/v_dashboard.php'; ?></p> <!-- DASHBOARD -->
        </div>
        <div class="home_menu_tab2" style="background-color: white; width: 1146px;">
            <p><?php include_once './views/statitics/v_statitcs.php'; ?></p><!-- STATITICS -->
        </div>
        <div class="home_menu_tab3">
        
            <p><?php include_once './views/NSPE/v_event.php'; ?></p> <!-- NSPE -->
        </div>
        <div class="home_menu_tab4"> <!-- Complain -->
            <p><?php include_once './views/complain/Subscriber/v_subscriber_complain.php'; ?></p> <!-- COMPLAIN -->
        </div>
        <div class="home_menu_tab6"> <!-- SUBSCRIBER -->
            <p><?php include_once './views/subscriber/v_subscriber.php'; ?></p>
        </div>
        <div class="home_menu_tab7"> <!-- REPORT TO -->
            <p><?php include_once './views/report/v_report.php'; ?></p>
        </div>
        <div class="home_menu_tab8">
            <p><?php include_once './views/help/FAQ.php'; ?></p>
        </div>
        <div class="home_menu_tab9">
            <p><?php include_once './views/calls/v_calls.php'; ?></p>
        </div>
        <div class="home_menu_tab10">
            <p><?php include_once './views/complain/Response/v_Response_complain.php'; ?></p>
        </div>
        <div class="home_menu_tab11">
            <p><?php include_once './views/report/v_operator_Report.php'; ?></p>
        </div>
        <div class="home_menu_tab12">
            <p><?php include_once './views/complain/view_complains/v_ViewComplain.php'; ?></p>
        </div>
        <div class="home_menu_tab17">
            <p><?php include_once './views/complain/view_complains/v_ViewComplain.php'; ?></p>
        </div>
    </div><!-- end home_menu_tab-content -->

</div><!-- end home_menu_tabs -->
