<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Profile</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="css/bootstrap.min.css"></script>
    <!-- BOOTSTRAP CORE STYLE CSS -->
<!--    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     CUSTOM STYLE CSS 
    <link href="assets/css/style.css" rel="stylesheet" />-->
      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
      <script type="text/javascript">
        // Load the Visualization API and the piechart package.
          google.load('visualization', '1.0', {'packages':['corechart']});

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
              ['Drop call', 3],
              ['Network busy', 1],
              ['Cross talk', 1],
              ['Silent call', 1],
              ['Connection error', 2]
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

            var data3 =new google.visualization.DataTable();
            data3.addColumn('string', 'Topping');
            data3.addColumn('number', 'Slices');
            data3.addRows([
              ['Solved', 4],
              ['Not solved', 5]
            ]);
                   // Set chart options
            var options = {'title':'Call problems',
                           'width':400,
                           'height':300
               ,is3D: true};
            // Set chart options
            var options2 = {'title':'Data problems',
                           'width':400,
                           'height':300
               ,is3D: true};
            // Set chart options
            var options3 = {'title':'Complain',
                           'width':400,
                           'height':300
               ,is3D: true};
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
<body>
    <?php
    echo 'here<br/><br/>';
    session_start();
    $complain=$_SESSION['Complain_userID'];
    var_dump($_SESSION['Complain_userID']);
    //json for user
//    include_once '../../models/links.php';
    echo '<br/><br/><br/><br/><br/>';
    include_once '../../models/links.php';
    $linker=new links();
    $link=$linker->show_PhoneDataByID(55);
    
    var_dump($link);
        echo '<br/><br/><br/><br/><br/>';

    $user=$_SESSION['user'];
    var_dump($user);
        echo '<br/><br/><br/><br/><br/>';

    $url_user='http://corsignal.com/networksignal/parsedata/show_by_id.php?show_type=2&id=4';
    $json=file_get_contents($url_user);
    $result_user= json_decode($json,TRUE);
//    var_dump($result_user);
//    echo $result_user[0]['name'];
    //end json for user
    
    //json for calls 
    $url_calls='http://corsignal.com/networksignal/parsedata/showall.php?show_type=6';
    $json_calls= file_get_contents($url_calls);
    $result_calls= json_decode($json_calls,TRUE);
    //end json for calls
    
    //json mobile data
    //hna elmfrod el ID ba5do lam el user y5osh wa7oto fl link da 
      $url_mobile='http://corsignal.com/networksignal/parsedata/show_by_id.php?show_type=1&id=1';
    $json_mobile= file_get_contents($url_mobile);
    $result_mobile= json_decode($json_mobile,TRUE);
    //end json mobile data 
    ?>
    <div class="container outer-section">
        
       
                               
        <div id="print-area">
                  <div class="row pad-top font-big">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="assets/img/logo.png" alt="Wlcome Betty" height="100" width="100"/>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    
                    <strong>Name         : </strong><?php echo $result_user[0]['name']; ?>
                    <br />
                    <strong>Phone nubmber   :</strong>+01-345-908-55-89<br />
                    <strong>Birth date      :</strong><?php echo $result_user[0]['Datre_of_birth']; ?><br />
                     <strong>Your IMEI      :</strong><?php echo $result_mobile[0]['imei']; ?><br />
                     <strong>Your OS version:</strong><?php echo $result_mobile[0]['os_version']; ?><br />
                    <br />
                   
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <strong>Last visit:</strong>30/3/2015
                    <br />
                      <strong>E-mail   :</strong><?php echo $result_user[0]['email']; ?>
                    <br />
                        <strong>Terminal ID   :</strong><?php echo $result_mobile[0]['terminal_id']; ?>
                     <br />
                       <strong>Your mobile   :</strong><?php echo $result_mobile[0]['manufacturer']; ?>
                       <br />
                </div>

            </div>
            <br />
            <hr />
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
               Yor calls history &nbsp;<strong> </strong>
                </div>
            </div>
            <hr />
            <hr />
         
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID of the call</th>
                                    <th>Start time</th>
                                    <th>End time</th>
                                    <th>your Sim id</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($result_calls['calls']); $i++) { ?>
                                <tr>
                                    <td><?php echo $result_calls['calls'][$i]['id']; ?></td>
                                    <td><?php echo $result_calls['calls'][$i]['start_time']; ?></td>
                                    <td><?php echo $result_calls['calls'][$i]['end_time']; ?></td>
                                    <td><?php echo $result_calls['calls'][$i]['sim_sim_id']; ?></td>        
                                </tr> <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr />
        
                                  
         
                <hr />
         
            </div>
            <hr />
            <div class="row">
                  <table style="width: 100%;">
    <tr>
                

        <td style="float: left;">  <div id="chart_div"></div></td>
       <td><div id="chart_div2"></div></td>

        <td style="float: left;"><div id="chart_div3"></div></td> 
        <td style="margin-right: 30px; ">  <div id="chart_div4"></div></td>
               

    </tr>
</table>
            </div>
            
  
      
</body>

</html>
