
<style>
    #complain_table{color: black;font-family: cursive;font-size: large;border:10px red;
                    border: 1px silver solid;width: 100%;margin: -4px 7px;}
    #complain_table td input,#complain_table td select{width: 400px;margin-left: 20px;;height: 40px;font-size: 13px;}
    #complain_table td label{font-size: 14px;}
    #btn_complain{margin-left: 5px; width: 190px; margin-top: 31px; margin-left: 300px;font-size: large;float: left;display: block;}
    #complain_place_table{width: 30px;float: left;margin: 566px;margin-top: -543px; border: 1px silver solid;}
    #complain_place_table td input{padding: 8px;margin-top: -51px;margin-left: 14px;}
    .offer_area{width:1051px; margin-left: 3px; border-radius: 5px; margin-top:-30px;  }
    #complain_place_table td .input-lg{width: 20px;}
    .btn_addoffers{margin-left: 350px;}
</style>
<?php
    $mylink=new links();
    $link=$mylink->add_offer();
    include_once './models/NSfunction.php';
    $nser=new NSfunction_class();
    //echo $link;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- made_by=1&description=this+is+description+of+offer+&start_offer=2015-03-09&end_offer=2015-03-09&offer_photo=naser.png
 -->
 
<script>
    $(document).ready(function (){
       $('#Oform').on("submit",function (e){
           var Sdate=document.getElementsByName('Sdate')[0].value; 
           var Edate=document.getElementsByName('Edate')[0].value;
           var offer=document.getElementsByName('offer')[0].value; 
           var image=document.getElementsByName('image')[0].value;
           var link="<?php echo $link; ?>";
           alert("asda");
           var madeBy="<?php echo $_SESSION['operator']; ?>";
           var data="made_by="+madeBy+"&description="+offer+"&start_offer="+Sdate+"&end_offer="+Edate+"&offer_photo="+image;
           var all_data=link+data;
         //  httpGetData(all_data);
     //Offer Message! Your offer Has Been Sent
          notification('Offer Message!','Your offer Has Been Sent');
          e.preventDefault();
          var form=$(this);
          form.parsley().validate();
          if(form.parsley.isvalid()){
              alert("Valid");
          }
       });
    });
    function previewFile(id_image,id_file){
       var preview = document.querySelector(id_image); //selects the query named img
       var file    = document.querySelector(id_file).files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           preview.src = "";
       }
  }
    
    function addoffer(name,Sdate,Edate,offer,image){
        alert("Save");
        var link="<?php echo $link; ?>";
        alert("asda");
        var madeBy="<?php echo $_SESSION['operator']; ?>";
    alert(madeBy);   
    var data="made_by="+madeBy+"&description="+offer+"&start_offer="+Sdate+"&end_offer="+Edate+"&offer_photo="+image;
        var all_data=link+data;
        httpGetData(all_data);
        //Offer Message! Your offer Has Been Sent
        notification('Offer Message!','Your offer Has Been Sent');
    }
</script>
<!--./control/Dashboard/C_AddOffer.php-->
<form data-parsley-validate data-validate="parsley" id="Oform" method="post" action="./control/Dashboard/C_AddOffer.php" enctype="multipart/form-data" >
<div class="my_menubody" style="height: 512px;">
    <table><tr><td>
    <table class="table  table-bordered table-box" id="complain_table">
        <tr>
            <td><label class="input-lg" for="name">Name</label></td>
            <td>
                <input type="text" id="name" style="height: 35px;" required="required" class="input-lg" name="name" >
            </td>
            <td> <label class="input-lg"  for="Sdate">Start Date</label></td>
            <td><input  class="input-lg"  name="Sdate" type="date" id="mydate" required="required" style="height: 35px;" /></td>
        </tr>
        <tr>
            <td><label class="input-lg" for="myEmail">Email</label></td>
            <td> <input type="email" id="ProblematicDial" data-parsley-trigger="keypress" required="required" style="height: 35px; float: left;" class="input-lg" name="myEmail" ></td>
            
            <td> <label class="input-lg"  for="Edate">End Date</label></td>
            <td><input class="input-lg" required="required" name="Edate" type="date" id="Edate" style="height: 35px; float: right;" /></td>
        </tr>
        
        <tr>
            <td> <label class="input-lg" for="title">Title</label></td>
            <td> <input name="title" required="required" type="text" id="title" style="height: 35px;" class="input-lg" name="title" ></td>
            <td> <label  class="input-lg"  for="mydate">Images</label></td>
            <td><input type="file" name="upload" id="fileImage" class="image" onchange="previewFile('#offerImage','#fileImage')"/></td>
        </tr>          
    </table>
    </td>
    <td>
        <h3 style="margin-top: -29px;">Your Upload Image Is Here</h3>
        <img id="offerImage" src="<?php  echo $nser->Image_Session_user_site(1); ?>" style="width: 232px; height: 158px; border-top-left-radius: 30px;"/>
    </td>
    </tr></table>
    <textarea class="offer_area" required="required" name="offer" rows="10" cols="80" placeholder="Your Description is here ........"></textarea>
    <table style="margin-left: 264px; margin-top: 5px;"><tr> 
            <td><input  type="submit" class="btn-lg btn-danger" value="Print" /></td>
            <td><input type="submit" class=" btn-lg btn-primary" name="submit" style="margin-right: 73px;" value="Submit"
                       
                       /></td>
      </tr></table>
</div>
    </form>