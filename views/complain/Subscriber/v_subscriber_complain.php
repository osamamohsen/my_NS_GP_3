<?php
include_once './models/links.php';
$linker = new links();
$link = $linker->send_complain();
$user = $_SESSION['user'];
$id = $user['employees']['id'];
?>
        
<style>
    .my_menubody{width: 28%; float: left; display: block; margin-top: -37px;}
    #complain_table{color: black;font-family: cursive;font-size: large;border:10px red;
                    border: 1px silver solid;width: 52%;margin: 34px 7px;}
    #complain_table td input,#complain_table td select{width: 300px;height: 40px;font-size: 13px;}
    #btn_complain{margin-left: 5px; width: 467px;font-size: x-large; margin-top: -45px; height: 51px;}
    #complain_location{width: 53%; float: right;}
    #form_loc{margin-top: -7px;}
    #pick_location{height: 53px; width: 100%;} #pick_location label{font-size: larger;}
    .my_large_inputer{height: 35px; width: 584px; margin-top: 7px;border-radius: 5px;}
    .ComplaintextArea{margin-top: 7px; width: 585px; height: 454px; border-radius: 5px; border: 1px solid silver;}
</style>
<p style="font-size: 17px; color: 0000ff; margin-left: 20px; text-align: end;">
    <?php echo $kind . " >> Complain"; ?>
</p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    
    $(document).ready(function() {
        $("#rform").on('submit', function(e){
        var An=document.getElementsByName('AN')[0].value;
        var Fn=document.getElementsByName('FN')[0].value;
        var address=document.getElementsByName('address')[0].value;
        var complain=document.getElementsByName('complain')[0].value;
        var contact=document.getElementsByName('ContactNumber')[0].value;
        var problemDial=document.getElementsByName('ProblematicDial')[0].value;
        var date=document.getElementsByName('date')[0].value;
        document.getElementsByName('AN')[0].value=document.getElementsByName('ProblematicDial')[0].value=document.getElementsByName('ContactNumber')[0].value=document.getElementsByName('complain')[0].value=document.getElementsByName('address')[0].value=document.getElementsByName('FN')[0].value="";
        var link = "<?php echo $link; ?>";
        var em_id = "<?php echo $id; ?>";
        var operator = document.getElementById('operatorSend').value;
        var ST = document.getElementById('selectTypeProblem').value;
        var ProblemDetails = document.getElementById('problemDetails').value;
        var access_network = document.getElementById('network').value;
        var dataLink = "em_id=" + em_id + "&complain=" + complain + "&Apartemant=" + An +
                "&floor_number=" + Fn + "&address=" + address + "&operator=" + operator + "&problem_type=" + ST +
                "&problem_details=" + ProblemDetails + "&start_date=" + date + "&access_Network=" + access_network +
                "&prometical_Dial=" + problemDial + "&Contract_Number=" + contact;
        var result = link + dataLink;
        alert(result);
        notification("Message", "Complain Had been Sent");
               httpGetData(result);
            e.preventDefault();
            var form = $(this);

            form.parsley().validate();

            if (form.parsley().isValid()){
                alert('valid');
            }
        });
    });
    
    function Select_Changing() {
        
        var e = document.getElementById('selectTypeProblem');
        var select = e.options[e.selectedIndex].value;

        var det = document.getElementById('problemDetails');
        if (select == 1)
            det.innerHTML = "<option value='4'>Poor Coverage</option><option value='5'>No Service</option><option value='6'>No Data Access</option><option value='7'>Bad Speech</option><option value='8'>Connection Error</option>";
        else
            det.innerHTML = "<option value='0'>Call Drop</option><option value='1'>Call Block</option><option value='2'>Silent Call</option><option value='3'>Cross Talk</option>";

    }

</script>
<form data-parsley-validate id="rform" name="rform"  data-validate="parsley" name="comform" novalidate ng-submit="comform.$valid && comform.submit()">
    <div class="my_menubody">

        <table class="table table-bordered table-box" id="complain_table">

            <tr>
                <td><label class="input-lg" for="operatorSend">Select Operator</label></td>
                <td>
                    <select id="operatorSend"  class="input-lg" name="Selectoperator" >
                        <option class="select2-choice" value="3">Etislat</option>
                        <option class="select2-choice" value="1">Mobinil</option>
                        <option class="select2-choice" value="2">Vodafone</option>
                    </select></td></tr>
            <tr><td><label class="input-lg" for="selectmenu">Select Type</label></td>
                <td><select id="selectTypeProblem" onchange="Select_Changing()" class="input-lg" name="Selecttype2" >
                        <option class="select2-choice" value="0">Call problem</option>
                        <option class="select2-choice" value="1">Data problem</option>
                    </select></td></tr>
            <tr><td> <label class="input-lg" for="problem">Problem Details</label></td>
                <td>  <select class="input-lg" id="problemDetails" name="problem" >
                        <option value="0">Call Drop</option>
                        <option value="1">Call Block</option>
                        <option value="2">Silent Call</option>
                        <option value="3">Cross Talk</option>

                    </select></td></tr>
            <tr>      <td> <label class="input-lg"  for="mydate">Problem Start Date</label></td>
                <td><input  class="input-lg" name="date" required=true type="date" id="mydate" style="height: 35px;" /></td></tr>
            <tr>   <td> <label class="input-lg" for="network">Access Network</label></td>
                <td> <select class="mytexter" id="network" name="network" >
                        <option value="2g">2G</option>
                        <option value="3g">3G</option>
                    </select></td></tr>
            <tr><td> <label class="input-lg" for="ProblematicDial">Problematic Dial</label></td>
                <td> <input type="text" id="ProblematicDial" required="required" style="height: 35px;" class="input-lg" name="ProblematicDial" ></td></tr>
            <tr> <td> <label for="ContactNumber"  class="input-lg">Contact Number</label></td>
<td><input type="text" class="input-lg" data-parsley-pattern="^01[0-9]*$" data-parsley-minlength="11"
            data-parsley-maxlength="11" data-parsley-trigger="keypress" required="required" name="ContactNumber"/><br></td></tr>
        </table>
        <input type="submit" id="btn_complain"  class="btn-lg btn-primary"  name="sendcomplain"  value="submit"
               >
    </div>
    <div id="complain_location">
        <!-- <div id="pick_location">
             <input name="location" checked="" type="radio"/><label> Detect location automatically </label>
             <input style="margin-left: 73px;" name="location" type="radio"/><label>Pick location manual</label>
         </div> -->
        <div id="form_loc">
            <div>
                <input type="number" data-parsley-trigger="keypress" class="my_large_inputer" required="required" placeholder="Apartment Number" name="AN"/>
                <input type="number" data-parsley-trigger="keypress" class="my_large_inputer" required="required" placeholder="Floor Number" name="FN"/></div>
            <input type="text" data-parsley-pattern="^[a-zA-Z]*$" class="my_large_inputer" required="required" style="height: 35px;" name="address"  placeholder="Address"><br>
            <textarea class="ComplaintextArea" name="complain" required="required" rows="7" cols="1" placeholder="Please enter your information thts help in identify and solving"></textarea>
        </div>
    </div>
</form>