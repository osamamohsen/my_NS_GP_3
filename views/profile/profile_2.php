<?php session_start(); 

$user2=$_SESSION['user'];
$id=$user2['employees']['id'];
$path="../../resources/images/user/";
/*
 * 
 * 
 * ../../resources/images/user/
 * 
 * 
 */


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <![endif]-->
        <title>Profile</title>

        <style>
            .image_profile_comp{border-radius: 60px;width: 43px;}

            .first { width: 412px;float: right;background-color: #3498db;padding: 1em 0 !important;color: white;
                     text-align: center;font-size: 1.6em;-moz-border-radius-topleft: 8px;-webkit-border-top-left-radius: 8px;
                     -moz-border-radius-topright: 8px;-webkit-border-top-right-radius: 8px;margin-bottom: 5px; margin-top: 10px}
            .ComplainHeaderStatic{overflow-y: scroll; height: 314px; padding: 20px; float: right; width: 369px;border-top: none;
                                  list-style-type: none; border-radius: 10px; border-top-left-radius: 0px; border-top-right-radius: 0px;}
            /*.ComplainHeaderName{ margin-top: 10px;}*/
            .ComplainHeader{ border:1px solid #3498df;margin-top: -5px;box-shadow: 5px 0px 10px #CCE6E6; width: 412px;}
            .ComplainResponse{border:1px solid greenyellow;margin-top: -5px;box-shadow: 5px 0px 10px #CCE6E6;}
            .ImageResult{width: 326px; border-top-left-radius: 20px; border-top-right-radius: 20px;}
            .tabelDiplayResult{border-radius: 20px; margin-left: 20px; border:1px solid #3498df; padding: 2px; width: 333px;
                               margin-left: 59px;}
            .tabelDiplayResult td{padding: 2px; margin-left: 5px; font-family: cursive; color: navy; text-align: center;}
            .tabelDiplayResult th{width: 81px; text-align: center;}
            .headerCover{border-bottom: 1px solid navy;}
            .cover{background: #d8ecf9; margin-top: 10px; border: 1px solid #4b738e;border-radius: 45px; padding: 5px;}
            .lbl{ text-align: center;font-family: cursive;float: right; width: 70%; color: navy;}

            /*.header:hover{text-decoration: none;}*/
        </style>   

        <?php
//    include_once './userKind.php';
        ?>
        <body style="background: #f2f8fd;">

            <div class="main">
                <div class="header" style="text-align: center;">
                    <div class="header_resize">
                        <div class="logo">
                            <h4><a href="../../index.php"><span>Network</span>Signals</a></h4>
                        </div>
                        <div class="clr"></div>
                        <a><img id="user_cover" src="<?php if(file_exists($path."c_".$id.".jpg")) echo $path."c_".$id.".jpg"; else echo $path."c_default.jpg"; ?>" style="width: 100%; margin-bottom: 8px; height: 200px;" alt=""/></a>
                        <a><img id="user_profile" src="<?php if(file_exists($path.$id.".jpg")) echo $path.$id.".jpg"; else echo $path."default.jpg" ;?>" 
                                style="width: 188px; height: 131px; border-radius: 17px;
                                margin-top:-108px; margin-right: 1009px;" alt=""/></a>

                    </div>
                </div>

                <div class="hbg">
                    <div class="hbg_resize">
                        <div class="clr"></div>
                   
                        
                    <!--<a href="#"><img src="images/download (1).jpg" width="135" height="67" alt="" border="0"  style="height: 132px; width: 192px; margin-top: -77px; margin-left: 90px;" /></a>--> 

                        
                    </div>
                </div>
                <div class="content">
                    <div class="content_resize" style="width: 100%;">
                        <div class="mainbar" style="width: 100%;">
                            <table style="">
                                <tr>
                                    <td style="float: left;">
<?php include_once 'v_CallHistory.php'; ?>
                                        <div class="clr"></div>
                                    </td>
                                    <td>
<?php include_once './FormValidation/form.php'; ?>
                                    </td>
                                    <td>
<?php include_once './v_ProfileComplain.php'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
<?php include_once './v_ProfileComplainResult.php'; ?>
                                    </td>
                                    <td>
<?php include_once 'v_PhoneDevice.php'; ?>
                                    </td>
                                    <td>
<?php include_once './v_ProfileComplainResponse.php'; ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div>
            </div>
        </body>
<?php include_once './v_statitcs.php'; ?>
</html>
