<!doctype html>
<html lang="en" class="no-js">
    
    <!--Login Resources  -->
    <?php include_once './login/site/resources.php'; 
          
   
    ?>
    
<!--<script type="text/javascript" src="https://www.google.com/jsapi"></script>-->

<!--<script type="text/javascript">
  google.load("search", "1");
  google.load("jquery", "1.4.2");
  google.load("jqueryui", "1.7.2");
</script>-->
    <!--Login Resources End -->

    <body>

        <div class="pre-loader">
            <div class="load-con">
                <img src="login/img/freeze/logo.png" class="animated fadeInDown" alt="">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
        <!--Login Header -->
        <?php include_once './login/site/header.php'; ?>
        <!--Login Header End-->


        <!--Login Form -->
        <?php include_once './login/site/LoginForm.php'; ?>
        <!--Login Form End-->

       <!-- 
       <div class="modal fade" id="modal-2">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" id="model-content2">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h1 class="text">Enter your email.</h1>
                    </div>
                    <div class="modal-body">
                        <form>
                            <input type='text' id="email" name='example@example.com'>


                            <div class="modal-footer">
                                <input type='submit' value='Send'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!--Login About -->
        <?php include_once './login/site/About.php'; ?>
        <!--Login About End-->


        <!--Login Featuers -->
        <?php include_once './login/site/features.php'; ?>
        <!--Login Featuers End-->


        <!--Login Screens -->
        <?php include_once './login/site/screens.php'; ?>
        <!--Login Screens End-->


        <!--Login GetApp -->
        <?php include_once './login/site/GetApp.php'; ?>
        <!--Login GetApp End-->


        <!--Login Support -->
        <?php include_once './login/site/support.php'; ?>
        <!--Login Support End -->

        <!--Login Footer-->
        <?php include_once './login/site/footer.php'; ?>
        <!-- Login Footer End -->


    </body>

</html>
