
<!doctype html>

<?php
include_once './models/NSfunction.php';
$ns=new NSfunction_class();
$MobinilNSPE=$_SESSION['NSPEdata'];
//var_dump($MobinilNSPE);
?>
<script src="http://variancecharts.com/cdn/variance-noncommercial-standalone-061badd.min.js" charset="UTF-8"></script>
<link id="sales" rel="variance-data" href="https://variancecharts.com/data/sales.csv">
<style>
    @import url('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
    .more{background-color: #3CB371;font-family: cursive; color: white;}
    .orderTabel{overflow-x: scroll; overflow-y: scroll;}
.order-table{margin-top: 8px;}
    menu, ol, ul {padding: 0 0 0 40px;}
    nav ul, nav ol {list-style: none outside none;}
    textarea {overflow: auto;vertical-align: top;}
    table {border-collapse: collapse;border-spacing: 0;}
    .table-box table {text-align: left;width: 100%;}
    .table-box td, .table-box th {padding: 10px;}
    .input-group-addon {background-color: #EEEEEE;border: 1px solid #CCCCCC;border-radius: 4px;font-size: 14px;
                        font-weight: normal;line-height: 1;padding: 6px 12px;text-align: center;}
    .input-group-addon.input-sm {border-radius: 3px;font-size: 12px;padding: 5px 10px;}
    .input-group-addon.input-lg {border-radius: 6px;font-size: 18px;padding: 10px 16px;}
</style>
<script>
    $(function () {
        $("#f-accordion").accordion({
            collapsible: true,
            heightStyle: "content"
        });
    });

    //Alert button
    $('.button').click(function () {
        $('.alert').slideToggle();
    });

    $('i.close').click(function () {
        $('.alert').slideToggle();
    });


    //JS table filter
    (function (document) {
        'use strict';

        var LightTableFilter = (function (Arr) {

            var _input;

            function _onInputEvent(e) {
                _input = e.target;
                var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                Arr.forEach.call(tables, function (table) {
                    Arr.forEach.call(table.tBodies, function (tbody) {
                        Arr.forEach.call(tbody.rows, _filter);
                    });
                });
            }

            function _filter(row) {
                var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
                row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
            }

            return {
                init: function () {
                    var inputs = document.getElementsByClassName('light-table-filter');
                    Arr.forEach.call(inputs, function (input) {
                        input.oninput = _onInputEvent;
                    });
                }
            };
        })(Array.prototype);

        document.addEventListener('readystatechange', function () {
            if (document.readyState === 'complete') {
                LightTableFilter.init();
            }
        });

    })(document);
    //Filter Table
</script>
<script>
//    function show_NSPE(data) {
//        var myData = data;
////    alert(data);
//        document.getElementsByName();
//        document.getElementById("show_NSPE").innerHTML = "<div class='modal fade' id='effectNSPE' role='dialog'><div  class='modal-dialog'><div class='modal-content' style='margin-top:92px;'><div class='modal-body'><p>"
//
//
//                + document.getElementById("tableNSPE" + myData).innerHTML +
//                "</p></div></div></div></div>";
//    }
</script>
<div class="row">
    <div class="col-xs-12">
        <div id="f-accordion">
            <div class="orderTabel">
                <input type="search" class="light-table-filter" data-table="order-table" placeholder="Search OF Event Detect" /> 
                <section class="table-box" style="height: 370px;">
                    <table class="order-table">
                        <thead style="background-color:#7a7a7a; color: white; ">
                            <tr>
                                <th>Incident/Complain ID</th>
                                <th> Date / Time </th>
                                <th>Upload Rate</th>
                                <th>Download Rate</th>
                                <th>Data Source</th>
                                <th>Location Provider</th>
                                <th>signal_level</th>
                                <th>longitude</th>   
                                <th>latitude</th>
                                <th>Speed</th>
                                <th>Battery Level</th>
                                <th>cid</th>
                                <th>MSisdn</th>
                                <th>event</th>
                                <th>WIFI status</th>
                                <th>Packet Service Status</th>
                                <th>GPS Status</th>
                                <th>terminal Sim ID</th>
                            </tr>
                        </thead>
                       <tbody>
                            <?php for ($d = 0; $d < count($MobinilNSPE['ps_samples']); $d++) {
                            if($MobinilNSPE['ps_samples'][$d]['event']==2 && $MobinilNSPE['ps_samples'][$d]['msisdn']==3){
                                ?>   
                                <tr>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['id']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['time']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['upload_rate']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['download_rate']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['data_source']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['data_activity']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['location_provider']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['signal_level']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['longitude']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['latitude']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['speed']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['battary_level']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['cid']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['msisdn']; ?></td>
                                    <td><?php echo $ns->PS_samples($MobinilNSPE['ps_samples'][$d]['event']); ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['wifi_status']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['packet_service_status']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['GPS_status']; ?></td>
                                    <td><?php echo $MobinilNSPE['ps_samples'][$d]['terminal_sim_sim_id']; ?></td>

                                </tr>
                            <?php  }
                            } ?>
                        </tbody>
                    </table>
            
                </section>
            </div>
        </div>
    </div>
</div>