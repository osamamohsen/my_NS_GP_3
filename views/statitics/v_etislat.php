<html>



    <?php

    $json_Dis_complain=$_SESSION['ViewComplains']; $events=array();
 for ($i = 0; $i < 9; $i++) {$events[$i]=0;} $solved=0;
    for ($i = 0; $i < count($json_Dis_complain['complains']); $i++) {
        if($json_Dis_complain['complains'][$i]['operator']==3){
            $events[$json_Dis_complain['complains'][$i]['problem_details']]++;
            if($json_Dis_complain['complains'][$i]['solved']!=1) $solved++;
        }
    }
//    var_dump($events);
    ?>
    <p style="font-size: 17px; color: 0000ff; margin-left: 20px; margin-top: -14px;">
        <?php echo $_SESSION['user']['employees']['name'] . " >> Statititcs"; ?>        
    </p> 
    <head>
        <!--Load the AJAX API-->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">

            // Load the Visualization API and the piechart package.
            google.load('visualization', '1.0', {'packages': ['corechart']});

            // Set a callback to run when the Google Visualization API is loaded.
            google.setOnLoadCallback(drawChart);

            // Callback that creates and populates a data table,
            // instantiates the pie chart, passes in the data and
            // draws it.
            function drawChart() {

                // Create the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                    ['Poor Coverage', <?php echo $events[4]; ?>],
                    ['No Service', <?php echo $events[5]; ?>],
                    ['No Data Access', <?php echo $events[6]; ?>],
                    ['Bad Speech', <?php echo $events[7]; ?>],
                    ['Connection error', <?php echo $events[8]; ?>]
                ]);
                // Create the data table.
                var data2 = new google.visualization.DataTable();
                data2.addColumn('string', 'Topping');
                data2.addColumn('number', 'Slices');
                data2.addRows([
                    ['Call Drop', <?php echo $events[0]; ?>],
                    ['Call Block', <?php echo $events[1]; ?>],
                    ['Silent Call', <?php echo $events[2]; ?>],
                    ['Cross Talk', <?php echo $events[3]; ?>]

                ]);

                var data3 = new google.visualization.DataTable();
                data3.addColumn('string', 'Topping');
                data3.addColumn('number', 'Slices');
                data3.addRows([
                    ['Solved', <?php echo $solved; ?>],
                    ['Not solved', <?php echo count($json_Dis_complain['complains'])-$solved; ?>]
                ]);

                var data4 = new google.visualization.DataTable();
                data4.addColumn('string', 'Topping');
                data4.addColumn('number', 'Slices');
                data4.addRows([
                    ['HTC', 3],
                    ['Samsung', 1],
                    ['Sony', 15],
                    ['Lenovo', 1],
                    ['LG', 2]
                ]);

                // Set chart options
                var options = {'title': 'Data problems',
                    'width': 400,
                    'height': 300
                    , is3D: true};
                // Set chart options
                var options2 = {'title': 'Call problems',
                    'width': 400,
                    'height': 300
                    , is3D: true};
                // Set chart options
                var options3 = {'title': 'Complain',
                    'width': 400,
                    'height': 300
                    , is3D: true};

                var options4 = {'title': 'Devices',
                    'width': 400,
                    'height': 300
                    , is3D: true};



                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);
                var chart2 = new google.visualization.PieChart(document.getElementById('chart_div2'));
                chart2.draw(data2, options2);
                var chart3 = new google.visualization.PieChart(document.getElementById('chart_div3'));
                chart3.draw(data3, options3);
                var chart4 = new google.visualization.PieChart(document.getElementById('chart_div4'));
                chart4.draw(data4, options4);


            }
        </script>
    </head>

    <body>
        <!--Divs that will hold the charts-->

        <table style="width: 87%; margin-left: 145px;">
            <tr>


                <td style="float: left;">  <div id="chart_div"></div></td>
                <td><div id="chart_div2"></div></td>

            </tr>
            <tr>
                <td style="float: left;"><div id="chart_div3"></div></td> 
                <td style="margin-right: 30px; ">  <div id="chart_div4"></div></td>


            </tr>
        </table>


    </body>
</html>