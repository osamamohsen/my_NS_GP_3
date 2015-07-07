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

    .TabComplain {
        margin-top: 10px;
    }

    .Tab-listComplain {
        list-style-type: none;
        padding-left: 0;
        margin-left: 162px;
    }

    .Tab-listComplain li {
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

    .Tab-listComplain li a {
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


    .Tab-listComplain .active, .Tab-listComplain .active a {
        border-bottom: none;
        /*    z-index: 10;*/
    }

    .tabComplain-content {
        clear: both;
        padding: 20px;
        //position: relative;
        //z-index: 1;
        top: -2px;
        /*width: 95%;*/ 
        /*Note: Set to 95% for Retina Display. Might be a weird bug where bottom right corner of border disappears*/
    }

    .tabComplain-content > div {
        display: none;
    }

    .tabComplain-content .active {
        display: inherit;
    }

    .tabComplainContent{margin-top: 20px;}
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
        $(".Tab-listComplain .tabComplain1 a").click(function (e) {
            e.preventDefault();
            $(".tabComplain-content .active").removeClass("active");
            $(".tabComplain1").addClass("active");
            $("#ComplainE").attr("src", "./resources/images/dropDown/EtislatColor.png");
            $("#ComplainV").attr("src", "./resources/images/dropDown/VodafoneBlack.png");
            $("#ComplainM").attr("src", "./resources/images/dropDown/MobinilBlack.png");

            //./resources/images/dropDown/VodafoneColor.png
            //ComplainE
        });

        $(".Tab-listComplain .tabComplain2 a").click(function (e) {
            e.preventDefault();
            $(".tabComplain-content .active").removeClass("active");
            $(".tabComplain2").addClass("active");

            $("#ComplainE").attr("src", "./resources/images/dropDown/EtislatBlack.png");
            $("#ComplainV").attr("src", "./resources/images/dropDown/VodafoneColor.png");
            $("#ComplainM").attr("src", "./resources/images/dropDown/MobinilBlack.png");

        });

        $(".Tab-listComplain .tabComplain3 a").click(function (e) {
            e.preventDefault();
            $(".tabComplain-content .active").removeClass("active");
            $(".tabComplain3").addClass("active");


            $("#ComplainE").attr("src", "./resources/images/dropDown/EtislatBlack.png");
            $("#ComplainV").attr("src", "./resources/images/dropDown/VodafoneBlack.png");
            $("#ComplainM").attr("src", "./resources/images/dropDown/MobinilColor.png");

        });

        //--------Tabs----------\\

    });


</script>
<title>Menu, Tabs and Accordion</title>    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,700' rel='stylesheet' type='text/css'>


</head>

<div class="container12">
    <div class="row">
        <div class="column7">
            <div class="TabComplain">
                <ul class="Tab-listComplain">
                    <li class="tabComplain1 active"><a href="#"><img id="ComplainE" src="./resources/images/dropDown/EtislatBlack.png" class="operatoresImages"/></a></li>
                    <li class="tabComplain2"><a href="#"><img id="ComplainV" src="./resources/images/dropDown/VodafoneBlack.png" class="operatoresImages"/></</a></li>
                    <li class="tabComplain3"><a href="#"><img id="ComplainM" src="./resources/images/dropDown/MobinilBlack.png" class="operatoresImages"/></a></li>
                </ul>

                <div class="tabComplain-content">
                    <div class="tabComplain1 active tabComplainContent">
                        <?php
                        echo include_once 'v_etislat.php';
                        ?>
                    </div>
                    <div class="tabComplain2 tabComplainContent">
                        <?php include_once 'v_vodafone.php'; ?>
                    </div>
                    <div class="tabComplain3 tabComplainContent">
                        <?php include_once 'v_mobinil.php'; ?>
                    </div>
                </div><!-- end tabComplain-content -->

            </div><!-- end TabComplain -->
        </div><!-- end column87 -->
    </div><!-- end row -->
</div><!-- end container12 -->

