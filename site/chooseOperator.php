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
            <?php if($kind=="NTRA"){ ?>
                <select class="form-control input-lg form-group drop">
                    <option selected>Choose Operator</option>
                    <option value="2" style="color: #7fb03e;">Etislat</option>
                                <option value="0" style="color: orange;">Mobinil</option>
                                <option value="1" style="color: red;">Vodafone</option>
                </select>
            <?php } ?>
            <p style="margin-left: 20px; margin-top: -6px; font-size: 17px; color: 0000ff;">
           
                                            <?php echo $kind . " >> NSPE"; ?>
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
                                            <li class="tab2a2"><a href="#">Network Busy</a></li>
                                            <li class="tab3"><a href="#">Bad Speech Quality</a></li>
                                            <li class="tab4"><a href="#">Silent Call</a></li>
                                            <li class="tab5"><a href="#">Cross talk</a></li>
                                            <li class="tab6"><a href="#">Connection Error</a></li>

                                        </div>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab1 active">
                                            <p><?php include 'v_eventSubscripers.php'; ?></p>
                                        </div>
                                        <div class="tab2a2">
                                            <p><?php include 'v_eventSubscripers.php'; ?></p>
                                        </div>
                                        <div class="tab3">
                                            <p><?php include 'v_eventSubscripers.php'; ?></p>
                                        </div>

                                        <div class="tab4">
                                            <p><?php include 'v_eventSubscripers.php'; ?></p>
                                        </div>

                                        <div class="tab5">
                                            <p><?php include 'v_eventSubscripers.php'; ?></p>
                                        </div>

                                        <div class="tab6">
                                            <p><?php include 'v_eventSubscripers.php'; ?></p>
                                        </div>

                                    </div><!-- end tab-content -->

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
                                            <p><?php include 'v_eventSubscripers.php'; ?></p>
                                        </div>
                                        <div class="tab9">
                                            <p><?php include 'v_eventSubscripers.php'; ?></p>
                                        </div>

                                        <div class="tab10">
                                            <p><?php include 'v_eventSubscripers.php'; ?></p>
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
