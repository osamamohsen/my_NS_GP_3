
$(function () {
  
    //--------Tabs----------\\
    $(".home_menu_tab-list .home_menu_tab1 a").click(function(e) { //for Dashboard Click
        e.preventDefault();
        $(".home_menu_tabs .active").removeClass("active");
        $(".home_menu_tab1").addClass("active");
        $(".tab1").addClass("active"); // Default overview once click on Dashboard
        $(".tabOperator1").addClass("active");
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    });
    
    $(".home_menu_tab-list .home_menu_tab2 a").click(function(e) { //For Statitics 
        e.preventDefault();
        $(".home_menu_tabs .active").removeClass("active");
        $(".home_menu_tab2").addClass("active");
        $(".tabOperator1").addClass("active");
        $(".tabNSPE1").addClass("active");
        $("#NSPE_E").attr("src","./resources/images/dropDown/EtislatColor.png");
        $("#NSPE_V").attr("src","./resources/images/dropDown/VodafoneBlack.png");
        $("#NSPE_M").attr("src","./resources/images/dropDown/MobinilBlack.png");
        
    });
    
    $(".home_menu_tab-list .home_menu_tab3 a").click(function(e) { // NSPE
        ////alert("asdas");
        e.preventDefault();

        $(".home_menu_tabs .active").removeClass("active");
        $(".home_menu_tab3").addClass("active");
        $(".tab1").addClass("active"); //Default for calls
        $(".tab11").addClass("active"); // Default for Drop Calls  <MUST CALL 2>
        $(".tabOperator1").addClass("active");
        $(".tabNSPE1").addClass("active");
        $("#NSPE_E").attr("src","./resources/images/dropDown/EtislatColor.png");
        $("#NSPE_V").attr("src","./resources/images/dropDown/VodafoneBlack.png");
        $("#NSPE_M").attr("src","./resources/images/dropDown/MobinilBlack.png");
        
    });
    $(".home_menu_tab-list .home_menu_tab4 a").click(function(e) { //Complain
        //alert("asdas");
        e.preventDefault();
        $(".home_menu_tabs .active").removeClass("active");
        $(".home_menu_tab4").addClass("active");
        $(".tabOperator1").addClass("active");
        google.maps.event.trigger(map_canvas, "resize");
        map_canvas.setCenter(center);
    });
    $(".home_menu_tab-list .home_menu_tab6 a").click(function(e) {//subsciber
        
        //alert("asdas");
        e.preventDefault();
        $(".home_menu_tabs .active").removeClass("active");
        $(".home_menu_tab6").addClass("active");
        $(".tabComplain1").addClass("active");
        $("#ComplainE").attr("src", "./resources/images/dropDown/EtislatBlack.png");
        $("#ComplainV").attr("src", "./resources/images/dropDown/VodafoneColor.png");
        $("#ComplainM").attr("src", "./resources/images/dropDown/MobinilBlack.png");
    });
    $(".home_menu_tab-list .home_menu_tab7 a").click(function(e) {
        //alert("asdas");
        e.preventDefault();
        //var pos="echo $GLOBAL";
       // //alert("pos"); 
        $(".home_menu_tabs .active").removeClass("active"); //send Report
        $(".home_menu_tab7").addClass("active");
    });
    $(".home_menu_tab-list .home_menu_tab8 a").click(function(e) {
        //alert("asdas");
        e.preventDefault();
        $(".home_menu_tabs .active").removeClass("active");
        $(".home_menu_tab8").addClass("active");
    });
    
    $(".home_menu_tab-list .home_menu_tab9 a").click(function(e) {
        //alert("asdas");
        e.preventDefault();
        $(".home_menu_tabs .active").removeClass("active");
        $(".home_menu_tab9").addClass("active");
    });
    
     $(".home_menu_tab-list .home_menu_tab10 a").click(function(e) {
        //alert("asdas");
         e.preventDefault();
        $(".home_menu_tabs .active").removeClass("active");
        $(".home_menu_tab10").addClass("active");
        $(".RepResponseComplain1").addClass("active");
        $("#ResponseComplainE").attr("src","./resources/images/dropDown/EtislatColor.png");
        $("#ResponseComplainV").attr("src","./resources/images/dropDown/VodafoneBlack.png"); 
        $("#ResponseComplainM").attr("src","./resources/images/dropDown/MobinilBlack.png"); 
    });
    $(".home_menu_tab-list .home_menu_tab11 a").click(function(e) {
        e.preventDefault();
        
        $(".home_menu_tabs .active").removeClass("active");
        $(".home_menu_tab11").addClass("active");
        $(".tabReport1").addClass("active");
        $("#ReportE").attr("src","./resources/images/dropDown/EtislatColor.png");
        $("#ReportV").attr("src","./resources/images/dropDown/VodafoneBlack.png");
        $("#ReportM").attr("src","./resources/images/dropDown/MobinilBlack.png");
    });
    $(".home_menu_tab-list .home_menu_tab12 a").click(function(e) {
        e.preventDefault();
        $(".home_menu_tabs .active").removeClass("active");
        $(".home_menu_tab12").addClass("active");
        $(".tabNSPE1").addClass("active");
//        $(".tabComplain1").addClass("active");
//        $("#ComplainE").attr("src","./resources/images/dropDown/EtislatColor.png");
//        $("#ComplainV").attr("src","./resources/images/dropDown/VodafoneBlack.png");
//        $("#ComplainM").attr("src","./resources/images/dropDown/MobinilBlack.png");
    });
    $(".home_menu_tab-list .home_menu_tab17 a").click(function(e) {
        e.preventDefault();
        $(".home_menu_tabs .active").removeClass("active");
        $(".home_menu_tab17").addClass("active");
    });
    
    //--------Tabs----------\\
    $(".faq dt").click(function(e) {
        $(this).next().slideToggle();
        //alert("adsadasad");
        //hide other panels
        $(".accordion-content").not($(this).next()).slideUp();
    });
  
});