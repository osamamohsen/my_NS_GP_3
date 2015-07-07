<!DOCTYPE html>
<style>
    @import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);

    /**
     * ----------------------------------------------------------------------------------------
     * Tabs
     * ----------------------------------------------------------------------------------------
     */

    .operatoresImages{
        width: 125px; height: 67px;
    }

    .TabMobinilNSPE {
        margin-top: 10px;
    }

    .Tab-listMobinilNSPE {
        list-style-type: none;
        padding-left: 0;
        margin-left: 162px;
    }

    .Tab-listMobinilNSPE li {
        float: left;
        margin-left: 100px;
        -webkit-border-top-left-radius: 6px;
        -moz-border-top-left-radius: 6px;
        -ms-border-top-left-radius: 6px;
        -o-border-top-left-radius: 6px;
        border-top-left-radius: 6px;
        -webkit-border-top-right-radius: 6px;
        -moz-border-top-right-radius: 6px;
        -ms-border-top-right-radius: 6px;
        -o-border-top-right-radius: 6px;
        border-top-right-radius: 6px;
        border-bottom: 0;
        //position: relative;
        //z-index: 1000;
    }

    .Tab-listMobinilNSPE li a {
        text-decoration: none;
        text-align: center;
        //position: relative;
        //background-color: yellow;
        height: 40px;
        padding-top: 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        color: #fff;
        font-size: 15px;
        font-family: Lato;
        font-weight: 400;
    }


    .Tab-listMobinilNSPE .active, .Tab-listMobinilNSPE .active a {
        border-bottom: none;
        /*    z-index: 10;*/
    }

    .tabMobinilNSPE-content {
        clear: both;
        padding: 20px;
        //position: relative;
        //z-index: 1;
        top: -2px;
        /*width: 95%;*/ 
        /*Note: Set to 95% for Retina Display. Might be a weird bug where bottom right corner of border disappears*/
    }

    .tabMobinilNSPE-content > div {
        display: none;
    }

    .tabMobinilNSPE-content .active {
        display: inherit;
    }

    .tabMobinilNSPEContent{margin-top: 20px;}
    /**
     * ----------------------------------------------------------------------------------------
     * FAQ
     * ----------------------------------------------------------------------------------------
     */

    .faq dt {
        border: 1px solid royalblue;
        cursor: pointer;
        padding: 10px;
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        box-sizing: border-box;
        //z-index: 100;
        //position: relative;
        width: 100%;
        height: 40px;
        background-color: white;
        color: black;
        font-weight: bold;
        margin-top: 10px;
    }

    .faq > dt:first-child {
        /*    margin-top: -10px;*/
        margin-top: 31px;
    }



    .faq dd {
        padding: 10px 20px;
        border: 1px solid #7cc576;
        //position: relative;
        top: -4px;
        z-index: -1;
        margin-bottom: 10px;
        display: none;
    }

    .accordion-content.default {
        display: block;
    }





</style>
<script>
    $(function () {

        //--------Tabs----------\\
        $(".Tab-listMobinilNSPE .tabMobinilNSPE1 a").click(function (e) {
            e.preventDefault();
            $(".tabMobinilNSPE-content .active").removeClass("active");
            $(".tabMobinilNSPE1").addClass("active");
            $("#MobinilNSPEE").attr("src", "./resources/images/dropDown/EtislatColor.png");
            $("#MobinilNSPEV").attr("src", "./resources/images/dropDown/VodafoneBlack.png");
            $("#MobinilNSPEM").attr("src", "./resources/images/dropDown/MobinilBlack.png");

            //./resources/images/dropDown/VodafoneColor.png
            //MobinilNSPEE
        });

        $(".Tab-listMobinilNSPE .tabMobinilNSPE2 a").click(function (e) {
            e.preventDefault();
            $(".tabMobinilNSPE-content .active").removeClass("active");
            $(".tabMobinilNSPE2").addClass("active");

            $("#MobinilNSPEE").attr("src", "./resources/images/dropDown/EtislatBlack.png");
            $("#MobinilNSPEV").attr("src", "./resources/images/dropDown/VodafoneColor.png");
            $("#MobinilNSPEM").attr("src", "./resources/images/dropDown/MobinilBlack.png");

        });

        $(".Tab-listMobinilNSPE .tabMobinilNSPE3 a").click(function (e) {
            e.preventDefault();
            $(".tabMobinilNSPE-content .active").removeClass("active");
            $(".tabMobinilNSPE3").addClass("active");


            $("#MobinilNSPEE").attr("src", "./resources/images/dropDown/EtislatBlack.png");
            $("#MobinilNSPEV").attr("src", "./resources/images/dropDown/VodafoneBlack.png");
            $("#MobinilNSPEM").attr("src", "./resources/images/dropDown/MobinilColor.png");

        });

        //--------Tabs----------\\

    });


</script>
<title>Menu, Tabs and Accordion</title>    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,700' rel='stylesheet' type='text/css'>


</head>

<style>
    .drop{width: 220px; margin-left: 16px;}
</style>
<script>
    $(function () {

        $(".tab-list .tab11 a").click(function (e) {
            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".tab1").addClass("active");
            $(".tab11").addClass("active");
        });

        $(".tab-list .tab22 a").click(function (e) {

            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".tab8").addClass("active");
            $(".tab22").addClass("active");
        });

        //--------Tabs----------\\
        $(".tab-list .tab1 a").click(function (e) {
            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".tab11").addClass("active");
            $(".tab1").addClass("active");
        });

        $(".tab-list .tab2a2 a").click(function (e) {
            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".tab11").addClass("active");
            $(".tab2a2").addClass("active");
        });

        $(".tab-list .tab3 a").click(function (e) {
            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".tab11").addClass("active");
            $(".tab3").addClass("active");
        });

        $(".tab-list .tab4 a").click(function (e) {
            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".tab11").addClass("active");
            $(".tab4").addClass("active");
        });

        $(".tab-list .tab5 a").click(function (e) {
            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".tab11").addClass("active");
            $(".tab5").addClass("active");
        });
        $(".tab-list .tab6 a").click(function (e) {
            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".tab11").addClass("active");
            $(".tab6").addClass("active");
        });
        $(".tab-list .tab7 a").click(function (e) {
            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".tab11").addClass("active");
            $(".tab7").addClass("active");
        });
        $(".tab-list .tab8 a").click(function (e) {
            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".tab22").addClass("active");
            $(".tab8").addClass("active");
        });

        $(".tab-list .tab9 a").click(function (e) {
            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".tab22").addClass("active");
            $(".tab9").addClass("active");
        });

        $(".tab-list .tab10 a").click(function (e) {
            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".tab22").addClass("active");
            $(".tab10").addClass("active");
        });




        //--------Tabs----------\\
        $(".faq dt").click(function (e) {
            $(this).next().slideToggle();

            //hide other panels
            $(".accordion-content").not($(this).next()).slideUp();
        });

    });
</script> 
<div class="container12">
    <div class="row">
        <div class="column7">

            <p style="margin-left: 20px; margin-top: -6px; font-size: 17px; color: 0000ff;">

                <?php echo $_SESSION['user']['employees']['name'] . " >> NSPE"; ?>
            </p>
            <div class="tabs" style=" margin-top: -10px; margin-left: 17px; width: 103%;">
                <ul class="tab-list">
                    <div style="float: right;">
                        <li class="tab11 active"><a href="#">Calls</a></li>
                        <li class="tab22"><a href="#">Data</a></li>
                    </div>
                </ul>

                <div class="tab-content">
                    <div class="tab11 active">
                        <!-- statrt Data All__________________________________________________________________ !-->                                                            


                        <div class="row">  
                            <div class="column7">
                                <div class="tabs"> 
                                    <ul class="tab-list">

                                        <div style="float: left;">
                                            <li class="tab1 active"><a href="#">Drop Calls</a></li>
                                            <!--<li class="tab2a2"><a href="#">Network Busy</a></li>-->
                                            <li class="tab3"><a href="#">Call Block</a></li>
                                            <li class="tab4"><a href="#">Poor Coverage</a></li>
                                            <li class="tab5"><a href="#">Silent Call</a></li>
                                            <li class="tab6"><a href="#">Cross Talk</a></li>

                                        </div>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab1 active">
                                            <p><?php include 'MobinilCallDrop.php'; ?></p>
                                        </div>
                                        <div class="tab3">
                                            <p><?php include 'MobinilCallBlock.php'; ?></p>
                                        </div>

                                        <div class="tab4">
                                            <p><?php include 'MobinilPoorCaverage.php'; ?></p>
                                        </div>

                                        <div class="tab5">
                                            <p><?php include 'MobinilSilentCall.php'; ?></p>
                                        </div>

                                        <div class="tab6">
                                            <p><?php include 'MobinilCrossTalk.php'; ?></p>
                                        </div>
                                    </div>
                                </div><!-- end tabs -->
                            </div><!-- end column87 -->
                        </div><!-- end row -->
                    </div>

                    <!-- End Data All__________________________________________________________________ !-->  
                    <div class="tab22">     
                        <div class="row">  
                            <div class="column7">
                                <div class="tabs">
                                    <ul class="tab-list">
                                        <div style="float: left;">
                                            <li class="tab8 active"><a href="#">No service</a></li>
                                            <li class="tab9"><a href="#">No Data Access</a></li>
                                            <li class="tab10"><a href="#">No Speed</a></li>

                                        </div>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab8 active">
                                            <p><?php include 'Mobinil_NoService.php'; ?></p>
                                        </div>
                                        <div class="tab9">
                                            <p><?php include 'Mobinil_noDataAccess.php'; ?></p>
                                        </div>

                                        <div class="tab10">
                                            <p><?php include 'Mobinil_lowSpeed.php'; ?></p>
                                        </div>

                                    </div><!-- end tab-content -->

                                </div><!-- end tabs -->
                            </div><!-- end column87 -->
                        </div><!-- end row -->
                    </div>
                </div>
            </div><!-- end tab-content -->

            <!--  End Tab 22  -->
        </div>     
    </div><!-- end tabs -->
</div>
