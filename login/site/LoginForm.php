<style>
    #modelss{width: 526px;margin:auto;}
    #modelss form{width: 545px;height: 337px; border-radius: 30px; border:5px solid #0B5E96;}
    #modelss form input , #modelss form select {display: block;width: 374px; margin-left: 28px; height: 47px; margin-top: 10px; float: right;}
    /*#modelss form input type=['text']*/
    .lbl{margin-top: 3px; float: left; font: larger;}
    .login_header{width: 94%; margin-left: 11px; height: 40px; border-radius: 30px; background-color: #0B5E96;  }
    .login_header_lbl{text-align: center; font-size: x-large; color: white;}
    .login_tabel{margin-left: 16px;}
    .login_btn{width: 90%; margin-left: 11px; }
</style>
<script src="./resources/Parasley/en.js" type="text/javascript"></script>
<link href="./resources/Parasley/parsley.css" rel="stylesheet" type="text/css"/>
<script src="./resources/Parasley/parsley.js" type="text/javascript"></script>
<script src="./resources/Parasley/parsley.min.js" type="text/javascript"></script>

<div class="modal fade" id="modal-1">
    <div class="modal-dialog modal-lg">

        <div id="modelss" >
            <form data-parsley-validate data-validate="parsley" class="form-control" method="get" action="control/login/C_login.php" style="background-color: white;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <table class="login_tabel">
                    <tr>
                            <div class="login_header">
                                <p class="login_header_lbl">Join Us | Sign In</p>
                            </div>
                        </tr>
                    <tr>
                        <td><label class="lbl">Category</label></td>
                        <td>  <select name="kind" class="input-lg">
                                <option value="0">Subscriber</option>
                                <option value="1">Operator</option>
                                <option value="1">NTRA</option>
                            </select></td>
                    </tr>
                    <tr><td>
                            <label class="lbl">Email</label>
                        </td><td><input required="required" data-parsley-trigger="keypress" type="email"  class="input-lg" name="mail"/>
                        </td></tr>
                    <tr><td>
                            <label class="lbl">Password</label>
                        </td><td><input required="required" type="password" class="input-lg" name="password"/>
                            <input type="password" class="input-lg hidden" name="password333"/>
                        </td></tr>
                </table>
                <input style="width: 100%;" type="submit" class="btn-lg btn-primary login_btn" name="login" value="login"/>
                <a style="margin-left: 8px;" href="./forgetPassword.php"/>Forget Password?
            </form>
        </div>
    </div>
</div>
