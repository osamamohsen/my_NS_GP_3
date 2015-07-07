<?php
include_once './models/links.php';
include_once './models/NSfunction.php';
$ps = new links();
$url = $ps->show_offer();
$json = file_get_contents($url);
$result = json_decode($json, TRUE);
$_SESSION['offers'] = $result;
?>
<!DOCTYPE html>
<style>
    #newoffer{font-size: 22px; color: orange;float: right; margin-right: 40px; 
              background-color: rgb(235, 235, 235); border: none;}
    #newoffer:hover{cursor: pointer;}

</style>
<style>

    /**
     * ----------------------------------------------------------------------------------------
     * Tabs
     * ----------------------------------------------------------------------------------------
     */

    .tabs {
        margin-top: 30px;
    }

    .tab-list {
        list-style-type: none;
        padding-left: 0;
    }

    .tab-list li {
        float: left;
        width: 150px;
        height: 40px;
        background: steelblue;
        margin-right: 3px;
        border: 1px solid royalblue;
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
        z-index: 1000;
    }

    .tab-list li a {
        text-decoration: none;
        text-align: center;
        position: absolute;
        width: 150px;
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

    .tab-list li a:hover {
        background: #fff;
        color: black;
        border: 1px solid royalblue;
        border-bottom: 0;
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
    }

    .tab-list .active, .tab-list .active a {
        background: #fff;
        color: black;
        border: 1px solid steelblue;
        border-bottom: none;
        /*    z-index: 10;*/
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
    }

    .tab-content {
        clear: both;
        border: 2px solid steelblue !important;
        padding: 20px;
        box-shadow: rgba(0, 0, 0, .25) 1px 2px 2px 0px;
        z-index: 1;
        top: -2px;
        /*width: 95%;*/ 
        /*Note: Set to 95% for Retina Display. Might be a weird bug where bottom right corner of border disappears*/
    }

    .tab-content > div {
        display: none;
    }

    .tab-content .active {
        display: inherit;
    }


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
        z-index: 100;
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
        //  position: relative;
        top: -4px;
        z-index: 10;
        margin-bottom: 10px;
        display: none;
    }

    .accordion-content.default {
        display: block;
    }

    .tabsss{margin-left: 10px;}
    .taba a{background-color: green;} .tabb a{background-color: orange;} .tabc a{background-color: red;}
    .taba,.tabb,.tabc{border-radius: 7px; color: white;}
    .taba a:focus,.tabb a:focus,.tabc a:focus{background-color: white;  border-top: 5px solid black;} 
    .taba a:focus{color: green;} .tabb a:focus{color: orange;} .tabc a:focus{color: red;} 
    .tab-list{border-radius: 20px;}


</style>
<script>
    $(function () {

        //--------Tabs----------\\
        $(".tab-list .taba a").click(function (e) {
            e.preventDefault();
            $(".tabsss .active").removeClass("active");
            $(".home_menu_tab1").addClass("active");
            $(".taba").addClass("active");
        });

        $(".tab-list .tabb a").click(function (e) {
            e.preventDefault();
            $(".tabsss .active").removeClass("active");
            $(".home_menu_tab1").addClass("active");
            $(".tabb").addClass("active");
        });

        $(".tab-list .tabc a").click(function (e) {
            e.preventDefault();
            $(".tabsss .active").removeClass("active");
            $(".home_menu_tab1").addClass("active");
            $(".tabc").addClass("active");
        });

        $(".tab-list .tabd a").click(function (e) {
            e.preventDefault();
            $(".tabsss .active").removeClass("active");
            $(".home_menu_tab1").addClass("active");
            $(".tabd").addClass("active");
        });

        //--------Tabs----------\\
        $(".faq dt").click(function (e) {
            $(this).next().slideToggle();

            //hide other panels
            $(".accordion-content").not($(this).next()).slideUp();
        });

    });

</script>
<style>.ofs{float: left;margin-top: 5px;}</style>   
<div class="container12">
    <div class="row">
        <div class="column7">
            <div class="tabsss">

                <ul class="tab-list">
                    <div class="ofs">
                        <?php if ($_SESSION['kind'] != "OPERATOR") { ?>
                            <li class="taba active" ><a  href="#">Etislat</a></li>
                            <li class="tabb"><a  href="#">Mobinil</a></li>
                            <li class="tabc"><a  href="#">Vodafone</a></li>
                        <?php } else if ($_SESSION['kind'] == "OPERATOR") { ?>
                            <li class="tabd"><a href="#">Add new offers</a></li>
                        <?php } ?>
                    </div>
                </ul>

                <div class="tab-content" style="margin-bottom: -5px; height: 504px;">
                    <?php if ($_SESSION['operator'] == 1) { ?>
                        <div class="taba active">
                            <?php include 'mob_Etis_Vod/v_mobinil.php'; ?>
                        </div>    
                    <?php } else if ($_SESSION['operator'] == 2) { ?>

                        <div class="taba active">
                            <?php include 'mob_Etis_Vod/v_vodafone.php'; ?>
                        </div>
                        <?php } else if($_SESSION['operator']==3) { ?>
                        <div class="taba active">
                            <?php include 'mob_Etis_Vod/v_etislat.php'; ?>
                        </div>

                        <?php } else{ ?>
                        <div class="taba active">
                            <?php include 'mob_Etis_Vod/v_etislat.php'; ?>
                        </div>
                        <div class="tabb">
                            <?php include 'mob_Etis_Vod/v_mobinil.php'; ?>
                        </div>
                        <div class="tabc">
                            <?php include 'mob_Etis_Vod/v_vodafone.php'; ?>
                        </div>
                        
                    <?php } ?>
                    <div class="tabd">
                            <?php include 'mob_Etis_Vod/v_addoffer.php'; ?>
                    </div>
                </div><!-- end tab-content -->

            </div><!-- end tabs -->
        </div><!-- end column87 -->
    </div><!-- end row -->
</div><!-- end container12 -->