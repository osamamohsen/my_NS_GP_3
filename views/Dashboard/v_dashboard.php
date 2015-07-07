
<?php
//echo $_SESSION['phone'];
?>
<style>
    input[type='checkbox'] {margin-left: 0px; width: 14px; height: 15px;}
    .dash_map_option{font-size: 18px; color: #0a588d;}
    .dash_map_option td img{margin-left: 15px;}
    .image-operator-icon{width:60px; height: 55px; margin-bottom: 5px; margin-right: 5px; }
</style>
<script>
    $(function () {

        //--------Tabs----------\\
        $(".tab-list .tab1 a").click(function (e) {
            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".tab1").addClass("active");
        });

        $(".tab-list .tab2 a").click(function (e) {
            e.preventDefault();
            $(".tabs .active").removeClass("active");
            $(".home_menu_tab1").addClass("active");
            $(".tab2").addClass("active");
            $(".taba").addClass("active");//Refer to Etislat once Click on Offer 
            $(".tab-list .taba a").click(e);
        });


        //--------Tabs----------\\
        $(".faq dt").click(function (e) {
            $(this).next().slideToggle();

            //hide other panels
            $(".accordion-content").not($(this).next()).slideUp();
        });

    });


</script>
</head>

<body> 
   <?php
// echo $_SESSION['kind']."<br/>".$_SESSION['operator']; ?>
    <div class="container12">
        <div class="row">
            <div class="column7" style="width: 1159px;">
                <div class="tabs">
                    <ul class="tab-list">
                            <p style="margin-left: 20px; margin-top: -37px; font-size: 17px; color: 0000ff;">
                            <?php echo $_SESSION['user']['employees']['name'] . " >> Dashboard"; ?>
                                
                        </p>
                    

                        <div style="float: right;">
                            <li class="tab1 active"><a href="#">Overview</a></li> <!-- active -->
                            <li class="tab2"><a href="#">
                                    Offers
                                </a>
                            </li>
                        </div>
                    </ul>
                    
                    <div class="tab-content">
                        <div class="tab1 active"> <!-- active -->
                            <form method="post" name="Dash_form" style="margin-bottom: 8px;">
                                <table class="dash_map_option">
                                    <tr>
                                        <?php if($kind=="NTRA"){ ?>
                                        <td> 
                                            <select onchange="changeOperatorMap()" id="mapOperator" class="form-control input-lg form-group" style="width: 184px;">
                                                <option value="" style="color: #1d78cb;">Choose Operator</option>
                                                <option value="12" style="color: orange;">Mobinil</option>
                                                <option value="11" style="color: #7fb03e;">Etislat</option>
                                                <option value="10" style="color: red;">Vodafone</option>
                                            </select>
                                        </td>
                                        <?php } ?>
                                        <?php
                                        echo '<td>';
                                        if($_SESSION['phone']==10) echo "<img class='image-operator-icon' src='./resources/images/dropDown/VodafoneColor.png'/>"
                                            . "<label class='dash_map_option' >Vodafone</label>";
                                        else if($_SESSION['phone']==12) echo "<img class='image-operator-icon' src='./resources/images/dropDown/MobinilColor.png'/>"
                                            ."<label class='dash_map_option' >Mobinil</label>";
                                        else if($_SESSION['phone']==11) echo "<img class='image-operator-icon' src='./resources/images/dropDown/EtislatColor.png'/>"
                                            ."<label class='dash_map_option'>Etisalat</label>";
                                        echo '</td>';;
                                        ?>
                                        
                                        <td>
                                            <img src="./resources/images/icon-images/event.png" alt=""/><input type="checkbox" checked="" name="Dashcheck" id="ch1" value="1"/>Samples
                                            <img src="./resources/images/icon-images/cell_tower.png" alt=""/><input type="checkbox" name="Dashcheck" id="ch2" value="2"/>Cells
                                            <!--<img src="./resources/images/icon-images/complain.png" alt=""/><input type="checkbox" name="Dashcheck" id="ch3" value="3"/>Complain-->
                                            <img src="./resources/images/icon-images/event2.png" alt=""/><input type="checkbox" name="Dashcheck" id="ch4" value="4"/>Call Problem
                                            <img src="./resources/images/icon-images/data.png" alt=""/><input type="checkbox" name="Dashcheck" id="ch5" value="5"/>Data Problem
                                            

                                        </td>
                                        <td>
                                            <input type="submit" class="btn-lg btn-primary" style="width: 189px;" onclick="success()"  name="refresh" value="Refresh Map"/> 
                                        </td>
                                    </tr>
                                </table>

                            </form>
                            <?php  include_once 'v_dashMap.php'; ?>
                        </div>
                        <!--------------------------------- Secand Tab -------------------------------------------->
                        <div class="tab2">
                            <?php include_once 'v_offers.php'; ?>
                        </div>
                        <!--------------------------------- Secand Tab -------------------------------------------->

                    </div><!-- end tab-content -->

                </div><!-- end tabs -->
            </div><!-- end column87 -->
        </div><!-- end row -->
    </div><!-- end container12 -->
</body>

</html>

<script>
function changeOperatorMap(){
//    alert("asd");
 var datad=document.getElementById('mapOperator').value;
// alert(datad);
    window.location = "./views/Dashboard/changeOperatorMap.php?data="+datad;
}
</script>