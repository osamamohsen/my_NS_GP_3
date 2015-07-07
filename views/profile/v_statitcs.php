
<?php

include_once '../../resources/resources.php';  
$event=$_SESSION['profileEvent'];
$solved=$_SESSION['total']-$_SESSION['ProfileuserunsolvedComplain'];
//var_dump($event);
?>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        // Load the Visualization API and the piechart package.
        google.load('visualization', '1.0', {'packages': ['corechart']});

        // Set a cqlback to run when the Google Visualization API is loaded.
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
                ['Drop call', <?php echo $event[0]; ?>],
                ['Call Block', <?php echo $event[1]; ?>],
                ['Poor Coverage', <?php echo $event[2]; ?>],
                ['Silent call', <?php echo $event[3]; ?>],
                ['Cross Talk', <?php echo $event[4]; ?>]
            ]);
            // Create the data table.
            var data2 = new google.visualization.DataTable();
            data2.addColumn('string', 'Topping');
            data2.addColumn('number', 'Slices');
            data2.addRows([
                ['No service', 3],
                ['No speed', 4],
                ['No data access', 2]

            ]);

            var data3 = new google.visualization.DataTable();
            data3.addColumn('string', 'Topping');
            data3.addColumn('number', 'Slices');
            data3.addRows([
                ['Solved', <?php echo $solved; ?>],
                ['Not solved', <?php echo  $_SESSION['ProfileuserunsolvedComplain'];?>]
            ]);
            // Set chart options
            var options = {'title': 'Call problems',
                'width': 400,
                'height': 300
                , is3D: true};
            // Set chart options
            var options2 = {'title': 'Data problems',
                'width': 400,
                'height': 300
                , is3D: true};
            // Set chart options
            var options3 = {'title': 'Complain',
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
        }
    </script>
</head>
<div class="row" style="border: 1px solid black; box-shadow: 5px 2px 3px 5px #3498db; background-color: white; margin-top: 17px; ">
    <table style="width: 100%;">
        <tr>


            <td style="float: left;">  <div id="chart_div"></div></td>
            <td><div id="chart_div2"></div></td>

            <td style="float: left;"><div id="chart_div3"></div></td> 
            <td style="margin-right: 30px; ">  <div id="chart_div4"></div></td>


        </tr>
    </table>
</div>