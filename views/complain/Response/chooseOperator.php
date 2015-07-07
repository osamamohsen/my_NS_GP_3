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

.TabResponseComplain {
    margin-top: 10px;
}

.Tab-listResponseComplain {
    list-style-type: none;
    padding-left: 0;
    margin-left: 162px;
}

.Tab-listResponseComplain li {
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

.Tab-listResponseComplain li a {
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


.Tab-listResponseComplain .active, .Tab-listResponseComplain .active a {
    border-bottom: none;
/*    z-index: 10;*/
}

.RepResponseComplain-content {
    clear: both;
    padding: 20px;
    //position: relative;
    //z-index: 1;
    top: -2px;
    /*width: 95%;*/ 
    /*Note: Set to 95% for Retina Display. Might be a weird bug where bottom right corner of border disappears*/
}

.RepResponseComplain-content > div {
    display: none;
}

.RepResponseComplain-content .active {
    display: inherit;
}

.RepResponseComplainContent{margin-top: 20px;}
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
    $(".Tab-listResponseComplain .RepResponseComplain1 a").click(function(e) {
        e.preventDefault();
        $(".RepResponseComplain-content .active").removeClass("active");
        $(".RepResponseComplain1").addClass("active");
        $("#ResponseComplainE").attr("src","./resources/images/dropDown/EtislatColor.png");
        $("#ResponseComplainV").attr("src","./resources/images/dropDown/VodafoneBlack.png"); 
        $("#ResponseComplainM").attr("src","./resources/images/dropDown/MobinilBlack.png"); 

        //./resources/images/dropDown/VodafoneColor.png
        //ResponseComplainE
    });
    
    $(".Tab-listResponseComplain .RepResponseComplain2 a").click(function(e) {
        e.preventDefault();
        $(".RepResponseComplain-content .active").removeClass("active");
        $(".RepResponseComplain2").addClass("active");
        
        $("#ResponseComplainE").attr("src","./resources/images/dropDown/EtislatBlack.png");
        $("#ResponseComplainV").attr("src","./resources/images/dropDown/VodafoneColor.png"); 
        $("#ResponseComplainM").attr("src","./resources/images/dropDown/MobinilBlack.png"); 

    });
    
    $(".Tab-listResponseComplain .RepResponseComplain3 a").click(function(e) {
        e.preventDefault();
        $(".RepResponseComplain-content .active").removeClass("active");
        $(".RepResponseComplain3").addClass("active");
        
        
        $("#ResponseComplainE").attr("src","./resources/images/dropDown/EtislatBlack.png");
        $("#ResponseComplainV").attr("src","./resources/images/dropDown/VodafoneBlack.png"); 
        $("#ResponseComplainM").attr("src","./resources/images/dropDown/MobinilColor.png"); 

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
                <div class="TabResponseComplain">
                    <ul class="Tab-listResponseComplain">
                        <li class="RepResponseComplain1 active"><a href="#"><img id="ResponseComplainE" src="./resources/images/dropDown/EtislatBlack.png" class="operatoresImages"/></a></li>
                        <li class="RepResponseComplain2"><a href="#"><img id="ResponseComplainV" src="./resources/images/dropDown/VodafoneBlack.png" class="operatoresImages"/></</a></li>
                        <li class="RepResponseComplain3"><a href="#"><img id="ResponseComplainM" src="./resources/images/dropDown/MobinilBlack.png" class="operatoresImages"/></a></li>
                    </ul>
                    
                    <div class="RepResponseComplain-content">
                        <div class="RepResponseComplain1 active RepResponseComplainContent">
                           <?php 
                           echo  include_once 'v_etislat.php';
                            ?>
                        </div>
                        <div class="RepResponseComplain2 RepResponseComplainContent">
                            <?php include_once 'v_vodafone.php'; ?>
                        </div>
                        <div class="RepResponseComplain3 RepResponseComplainContent">
                        <?php  include_once 'v_mobinil.php'; ?>
                        </div>
                    </div><!-- end RepResponseComplain-content -->
                    
                </div><!-- end TabResponseComplain -->
            </div><!-- end column87 -->
        </div><!-- end row -->
    </div><!-- end container12 -->
    
    