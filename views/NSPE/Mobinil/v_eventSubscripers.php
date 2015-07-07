
<!doctype html>

<script src="http://variancecharts.com/cdn/variance-noncommercial-standalone-061badd.min.js" charset="UTF-8"></script>
<link id="sales" rel="variance-data" href="https://variancecharts.com/data/sales.csv">
<style>
    @import url('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
    .more{background-color: #3CB371;font-family: cursive; color: white;}
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
    function show_NSPE(data) {
        var myData = data;
//    alert(data);
        document.getElementsByName();
        document.getElementById("show_NSPE").innerHTML = "<div class='modal fade' id='effectNSPE' role='dialog'><div  class='modal-dialog'><div class='modal-content' style='margin-top:92px;'><div class='modal-body'><p>"


                + document.getElementById("tableNSPE" + myData).innerHTML +
                "</p></div></div></div></div>";
    }
</script>
<div class="row">
    <div class="col-xs-12">
<div id="f-accordion">
    <div>
        
      <!--  <div class="modal fade" role="dialoge" id="show_NSPE">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-top: 120px;">
                    <div class="modal-body">
                        <p>here table show</p>
                    </div>
                </div>
            </div>
        </div> -->
        <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /> 
        <section class="table-box" style="height: 370px;">
                <table class="order-table">
                    <thead style="background-color:#7a7a7a; color: white; ">
                       <tr>
                            <th>Select</th>
                            <th>Incident/Complain ID</th>
                            <th>Event Source</th>
                            <th>Symbol</th>
                            <th>Terminal</th>
                            <th> Date / Time </th>
                            <th>Signal Level</th>
                            <th>More</th>
                          <!--  
                            <th>Signal Quality</th>
                            <th>BER</th>
                            <th>Failures</th>
                            <th>Cell ID</th>
                            <th>Position Source</th>
                            <th>Long</th>
                            <th>Lat</th>
                            <th>Address</th>
                            <th>Speed (Km/h)</th>
                            <th>Battery Lev.</th>
                            <th>Call Type</th>
                            <th>Model</th>
                            <th>MCC</th>
                            <th>MNC</th>
                            <th>IMEI</th>
                            <th>IMSI</th>
                            <th>Subscriber</th>
                            <th>Subscriber Category</th>
                            <th>Reg. MSISDN</th>
                            <th>Problomatic MSISDN</th>
                            <th>Remark</th> -->                    
                        </tr>
                    </thead>
                    <tbody>
                    <div>
                        <?php
                        for ($d = 0; $d < 5; $d++) {
                            echo '<tr>
                            <td><input type="checkbox" name="checkbox-inline"></td>
                            <td>15520521140123602033225410001 </td>
                            <td>Detected</td>
                            <td>Mobile</td>
                            <td>Mobile</td>
                            <td>15/7/2014 - 11:55:33 AM</td>
                            <td>-101 dBm</td>';
                            echo '<td><button data-toggle="modal" class="more" data-target="#effectNSPE" onclick="show_NSPE(' . $d . ')">More</button></td>';
                            echo "<td><div id='tableNSPE$d'; hidden=''>
                            <table>
                                <tr><td>Signal Quality</td><td>0  '.$d.'</td></tr>
                                <tr><td>BER</td><td>0.14</td></tr>
                                <tr><td>Failures</td><td>Weak Signal  '.$d.'</td></tr>
                                <tr><td>Cell ID</td><td>32541  '.$d.'</td></tr>
                                <tr><td>Position Source</td><td>GPS  '.$d.'</td></tr>
                                <tr><td>Long</td><td>NULL  '.$d.'</td></tr>
                                <tr><td>Lat</td><td>NULL  '.$d.'</td></tr>
                                <tr><td>Address</td><td>NULL  '.$d.'</td></tr>
                                <tr><td>Speed</td><td>NULL  '.$d.'</td></tr>
                                <tr><td>Battery Level</td><td>85%  '.$d.'</td></tr>
                                <tr><td>Call Type</td><td>Voice  '.$d.'</td></tr>
                                <tr><td>Model</td><td>NOKIA  '.$d.'</td></tr>
                                <tr><td>MCC</td><td>602  '.$d.'</td></tr>
                                <tr><td>MNC</td><td>01  '.$d.'</td></tr>
                                <tr><td>IMEI</td><td>NULL  '.$d.'</td></tr>
                                <tr><td>IMSI</td><td>NULL  '.$d.'</td></tr>
                                <tr><td>Subscriber</td><td>Moahmed  '.$d.'</td></tr>
                                <tr><td>Subscriber Category</td><td>VIP  '.$d.'</td></tr>
                                <tr><td>Reg. MSISDN</td><td>01000602820  '.$d.'</td></tr>
                                <tr><td>Problomatic MSISDN</td><td>NULL  '.$d.'</td></tr>
                                <tr><td>Remark</td><td>NULL  '.$d.'</td></tr>
                            </table>
                        </div></td>";
                            echo '</tr>';
                        }
                        ?>
                    </div>
                        </tr>
                    </tbody>
                </table>
            </div>

            <?php ?>
            <div id="show_NSPE">
            </div>
        </div>
    </div>
</div>