<!DOCTYPE html>
<?php 

$user=$_SESSION['user'];
//../../resources/images/user/
?>
<script>
    
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
    
</script>

<head>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/ValidationFormScript.js"></script>
<!--<title>bootstrap login validation demo</title>-->
</head>
<style>
    .textForm{margin-left: 5px; text-align: center;padding-top: 7px; color: #3498db; font-family: cursive; font-size: larger;}
</style>
<body>
    <form action="../../control/profile/C_profile.php" method="post" class="form-horizontal"  enctype="multipart/form-data" id="form1">
    <div class="form-group">
      <label class="col-md-4 textForm" for="Email">Name</label>
      <div class="col-md-3"style="width: 63%;">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o fa-user"></i></span>
            <input id="name" name="name" type="text" placeholder="Enter Your Name" value="<?php echo $user['employees']['name']; ?>" class="form-control input-md">
        </div>
      </div>
    </div>
        <div class="form-group">
      <label class="col-md-4 textForm" for="Email">Email</label>
      <div class="col-md-3"style="width: 63%;">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o fa-mail-forward"></i></span>
            <input id="email" name="email" type="text" placeholder="Enter Your Email" value="<?php echo $user['employees']['email']; ?>" class="form-control input-md">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 textForm" for="Email">Title</label>
      <div class="col-md-3"style="width: 63%;">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o fa-ticket"></i></span>
            <input id="Email" name="title" type="text" placeholder="Enter Your Title" value="<?php echo $user['employees']['title']; ?>" class="form-control input-md">
        </div>
      </div>
    </div><div class="form-group">
      <label class="col-md-4 textForm" for="Email">Address</label>
      <div class="col-md-3"style="width: 63%;">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o fa-home"></i></span>
            <input id="Email" name="address" type="text" placeholder="Enter Your Address" value="<?php echo $user['employees']['address']; ?>" class="form-control input-md">
        </div>
      </div>
    </div><div class="form-group">
      <label class="col-md-4 textForm" for="Email">Date Of Birth</label>
      <div class="col-md-3"style="width: 63%;">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o fa-calendar"></i></span>
            <input id="date_birth" name="date_birth"  type="date" placeholder="Enter Your Date-Birth" value="<?php echo $user['employees']['Datre_of_birth']; ?>" class="form-control input-md">
        </div>
      </div>
    </div>
    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 textForm" for="Password">Password</label>
      <div class="col-md-3" style="width: 63%;">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input id="password" name="password" type="password" placeholder="Enter Your Password" value="<?php echo $user['employees']['password']; ?>" class="form-control input-md">
        </div>
      </div>
    </div>
    
    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 textForm" for="ConfirmPassword">Confirm Password</label>
      <div class="col-md-3" style="width: 63%;">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input id="password_again" name="password_again" type="password" value="<?php echo $user['employees']['password']; ?>" placeholder="Enter Your Password Again" class="form-control input-md">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 textForm" for="ConfirmPassword">Upload Image</label>
      <div class="col-md-3" style="width: 63%;">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-image"></i></span>
            <input id="user_image" name="upload" onchange="previewFile('#user_profile','#user_image')" type="file" placeholder="Upload Your Image" class="form-control input-md">
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 textForm" for="ConfirmPassword">Upload Cover Image</label>
      <div class="col-md-3" style="width: 63%;">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-image"></i></span>
            <input id="cover_image" name="uploadc" onchange="previewFile('#user_cover','#cover_image')" type="file" placeholder="Upload Your Image" class="form-control input-md">
        </div>
      </div>
    </div>
    <!-- Button -->
    <div class="form-group" >
      <label class="col-md-4 control-label" style="width: 100%; margin-left: 15px;" for="Submit"></label>
      <div class="col-md-4" style="width: 100%;">
          <input type="submit" value="Update" name="submit" id="Submit" class="btn btn-primary" style="width: 100%; margin-left: 16px;"/>
      </div>
    </div>
</form>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>