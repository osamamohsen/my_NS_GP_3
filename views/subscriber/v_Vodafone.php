
<?php
$res_js_V=$_SESSION['subscriber_JS'];

?>


<script type="text/javascript"
src="attachment/file/filterTable/filterTable.js"></script>
<script src="jquery.js" type="text/javascript"></script>
<script src="bootstrap.min.js" type="text/javascript"></script>

<style>
    #subscribers{width: 1125px; height: 558px; overflow: scroll;}
    #subscribers table th{background-color: #71acd6;}
</style>

<!--<h1>asdas;jdlaisjdlaskjdkla</h1>-->
 <section style="background-color: #DEE1E3;" class="container">
    <!--<h1>asdas;jdlaisjdlaskjdkla</h1>-->
<p style="margin-left: 20px; margin-top: 100px; font-size: 17px; color: 0000ff;">
                  <?php echo $_SESSION['kind']." >> Statitics"; ?>
            </p>
    <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter">

    <div id="subscribers">
    <table  class="order-table table">
		<thead>
			<tr>
                            <th>upload_pic</th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Date_of_Birth</th>
                            <th>Msisdn</th>
                            <th>Email</th>
                            <th>password</th>
                            <th>How_know</th>
                            <th>Other_know</th>
			</tr>
		</thead>
		<tbody>
                    <?php for ($i = 0; $i < count($res_js_V['subscribers']); $i++) {
                        if(substr($res_js_V['subscribers'][$i]['msisdn'], 0, 2)=="10"){?>
			<tr>
                <td><img src="<?php echo $nsfunc->Image_DisplayById($res_js_V['subscribers'][$i]['id']); ?>" style="width: 85px; height: 60px"/></td>
                    <td><?php echo $res_js_V['subscribers'][$i]['id']; ?></td>
                    <td><?php echo $res_js_V['subscribers'][$i]['name']; ?></td>
                    <td><?php echo $res_js_V['subscribers'][$i]['title']; ?></td>
                    <td><?php echo $res_js_V['subscribers'][$i]['gender']; ?></td>
                    <td><?php echo $res_js_V['subscribers'][$i]['address']; ?></td>
                    <td><?php echo $res_js_V['subscribers'][$i]['Datre_of_birth']; ?></td>
                    <td><?php echo $res_js_V['subscribers'][$i]['msisdn']; ?></td>
                    <td><?php echo $res_js_V['subscribers'][$i]['email']; ?></td>
                    <td><?php echo $res_js_V['subscribers'][$i]['password']; ?></td>
                    <td><?php echo $res_js_V['subscribers'][$i]['how_know']; ?></td>
                    <td><?php echo $res_js_V['subscribers'][$i]['other_know']; ?></td>

                        </tr>
                    <?php } 
                    }?>
		</tbody>
	</table>
</div>
</section>

<script>(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>