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

.TabNSPE_ {
    margin-top: 10px;
}

.Tab-listNSPE {
    list-style-type: none;
    padding-left: 0;
    margin-left: 162px;
}

.Tab-listNSPE li {
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

.Tab-listNSPE li a {
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


.Tab-listNSPE .active, .Tab-listNSPE .active a {
    border-bottom: none;
/*    z-index: 10;*/
}

.tabNSPE-content {
    clear: both;
    padding: 20px;
    //position: relative;
    //z-index: 1;
    top: -2px;
    /*width: 95%;*/ 
    /*Note: Set to 95% for Retina Display. Might be a weird bug where bottom right corner of border disappears*/
}

.tabNSPE-content > div {
    display: none;
}

.tabNSPE-content .active {
    display: inherit;
}

.tabNSPEContent{margin-top: 20px;}
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
    $(".Tab-listNSPE .tabNSPE1 a").click(function(e) {
        e.preventDefault();
        $(".tabNSPE-content .active").removeClass("active");
        $(".tabNSPE1").addClass("active");
        $("#NSPE_E").attr("src","./resources/images/dropDown/EtislatColor.png");
        $("#NSPE_V").attr("src","./resources/images/dropDown/VodafoneBlack.png"); 
        $("#NSPE_M").attr("src","./resources/images/dropDown/MobinilBlack.png"); 
        $(".tab1").addClass("active"); //Default for calls
        $(".tab11").addClass("active"); // Default for Drop Calls  <MUST CALL 2>
        $(".tabOperator1").addClass("active");
        //./resources/images/dropDown/VodafoneColor.png
        //NSPE_E
    });
    
    $(".Tab-listNSPE .tabNSPE2 a").click(function(e) {
        e.preventDefault();
        $(".tabNSPE-content .active").removeClass("active");
        $(".tabNSPE2").addClass("active");
        
        $("#NSPE_E").attr("src","./resources/images/dropDown/EtislatBlack.png");
        $("#NSPE_V").attr("src","./resources/images/dropDown/VodafoneColor.png"); 
        $("#NSPE_M").attr("src","./resources/images/dropDown/MobinilBlack.png"); 
$(".tab1").addClass("active"); //Default for calls
        $(".tab11").addClass("active"); // Default for Drop Calls  <MUST CALL 2>
        $(".tabOperator1").addClass("active");
    });
    
    $(".Tab-listNSPE .tabNSPE3 a").click(function(e) {
        e.preventDefault();
        $(".tabNSPE-content .active").removeClass("active");
        $(".tabNSPE3").addClass("active");
        
        
        $("#NSPE_E").attr("src","./resources/images/dropDown/EtislatBlack.png");
        $("#NSPE_V").attr("src","./resources/images/dropDown/VodafoneBlack.png"); 
        $("#NSPE_M").attr("src","./resources/images/dropDown/MobinilColor.png"); 
$(".tab1").addClass("active"); //Default for calls
        $(".tab11").addClass("active"); // Default for Drop Calls  <MUST CALL 2>
        $(".tabOperator1").addClass("active");
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
                <div class="TabNSPE_">
                    <ul class="Tab-listNSPE">
                        <li class="tabNSPE1 active"><a href="#"><img id="NSPE_E" src="./resources/images/dropDown/EtislatColor.png" class="operatoresImages"/></a></li>
                        <li class="tabNSPE2"><a href="#"><img id="NSPE_V" src="./resources/images/dropDown/VodafoneColor.png" class="operatoresImages"/></</a></li>
                        <li class="tabNSPE3"><a href="#"><img id="NSPE_M" src="./resources/images/dropDown/MobinilColor.png" class="operatoresImages"/></a></li>
                    </ul>
                    
                    <div class="tabNSPE-content">
                        <div class="tabNSPE1 active tabNSPEContent">
                            <h3 style="color: green; margin-left: 40px;">Etislat</h3>
                        <?php include_once 'Etislat/v_event.php'; ?>
                        </div>
                        <div class="tabNSPE2 tabNSPEContent">
                            <h3 style="color: red; margin-left: 40px;">Vodafone</h3>
                            <?php include_once 'Vodafone/v_event.php'; ?>
                        </div>
                        <div class="tabNSPE3 tabNSPEContent">
                            <h3 style="color: orange; margin-left: 40px;">Mobinil</h3>
                        <?php include_once 'Mobinil/v_event.php'; ?>
                        </div>
                    </div><!-- end tabNSPE-content -->
                    
                </div><!-- end TabNSPE_ -->
            </div><!-- end column87 -->
        </div><!-- end row -->
    </div><!-- end container12 -->
 