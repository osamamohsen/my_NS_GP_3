

<?php 

    if($_SESSION['kind']!=null){$kind=$_SESSION['kind'];} 
        
        include_once './models/NSfunction.php';
        $func=new NSfunction_class();
        $id=$_SESSION['user']['employees']['id'];
        $_SESSION['image']=$func->Image_Session_user_site($id);                                    
        if($_SESSION['kind']=="USER")
            $_SESSION['imageoperator']=$func->Image_Session_operator_of_Response_usersite($_SESSION['user']['employees']['msisdn']);
        
        ?>
<html>
<head>
    <link rel="stylesheet" href="resources/css/bootstrap.css">
    <link rel="stylesheet" href="resources/css/style.css">

</head>
<body>

<header class="navbar">
    <div class="container-fluid expanded-panel">
        <div class="row" style="width: 104%;">
            <div id="logo" class="col-xs-12 col-sm-2" style="font-size: 17px; line-height: 51px; width: 203px;">
                <a href="#" style="width: 185px;">Network Signals</a>
            </div>
            <div id="top-panel" class="col-xs-12 col-sm-10" style="color: #bdbdbd;">
                <div class="row" >
                    <div class="col-xs-8 col-sm-4">
                         
                    </div>
                    
                    <div class="col-xs-4 col-sm-8 top-panel-right">
                        <ul class="nav navbar-nav pull-right panel-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                                    <div class="avatar">
                                        <!--<img width="100" height="100" src="./resources/images/user/72.jpg"/>-->
                                        <img src="<?php echo $_SESSION['image'];?>" class="img-rounded" alt="avatar" />
                                    </div>
                                    <i class="fa fa-angle-down pull-right"></i>
                                    <div class="user-mini pull-right" style="margin-top: 31px;">
                                        <span class="welcome" >Welcome,</span>
                                        <span><?php echo $_SESSION['user']['employees']['name']; ?></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php if($_SESSION['kind']=="USER"){ ?>
                                    <li>
                                        <!--./views/profile/v_profile.php-->
                                        <a href="./views/profile/profile_2.php">
                                            <i class="fa fa-user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                  <!--  <li>
                                        <a href="ajax/page_messages.html" class="ajax-link">
                                            <i class="fa fa-envelope"></i>
                                            <span>Messages</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ajax/gallery_simple.html" class="ajax-link">
                                            <i class="fa fa-picture-o"></i>
                                            <span>Albums</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ajax/calendar.html" class="ajax-link">
                                            <i class="fa fa-tasks"></i>
                                            <span>Tasks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-cog"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>  -->
                                    <li>
                                        <a href="./login.php">
                                            <i class="fa fa-power-off"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</body>
</html>