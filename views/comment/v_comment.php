<html>
    <style>
#panel-title  {font-size: 1.3em;}
.panel-header {background-color: steelblue;color: white;padding: 1%;
              border-top-left-radius: 7px;border-top-right-radius: 7px;}
.counter {background-color: #e8eaf6;color: #3f51b5;font-size: 0.8em;border-radius: 50%;padding: 0.1% 0.8%;
          margin-left: 10px;vertical-align: text-top;}
.panel-collapse {background-color: #ffffff;box-shadow: 0px 3px 5px -3px black;padding: 3% 4%;}
.comment {border-left: 4px solid #3f51b5; padding: 0 1% 1% 3%;margin-bottom: 5%;}
.comment-header {margin-bottom: 1%;}
.panel-collapse .icon {width: 3%;margin-right: 0.5%;}
.panel-collapse small {color: #777;margin-left: 2%;}
.formtitle {font-size: 1.5em;float: left;}
form textarea {clear:both;display:block;width:100%;padding: 1%;margin: 1% 0 1% 0;border-top: 0;border-left: 0;
               border-right: 0;border-bottom: 1px solid #777;resize:none;}
#author:focus, textarea:focus {border-bottom: 1px solid #3f51b5;}
form {text-align:center;}
.commentButton{border: 0px solid;background-color: #3f51b5;color: white;
              padding: 1%;box-shadow: 0 2px 5px black;width: 25%;}
    </style>    
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <?php if($kind=="NTRA"){ ?>
                <select class="form-control input-lg form-group drop">
                    <option selected>Choose Operator</option>
                    <option style="color: #7fb03e;">Etislat</option>
                    <option style="color: orange;">Mobinil</option>
                    <option style="color: red;">Vodafone</option>
                </select>
            <?php } ?>
    <div style="margin-left: 15px;">
        <div class="panel-header">
            <span id="panel-title"> Comments </span>
            <span class="counter"> 2 </span>
        </div>

        <div class="panel-collapse">

            <div class="comment">
                <div class="comment-header">
                    <img class="icon" src="http://i.imgur.com/JIt0euT.png"/>
                    <span> ahmed </span>
                    <small> 20/11/2014 2:35 PM </small>
                     <?php if($_SESSION['kind']=="OPERATOR"){ ?>
                    <img class="icon" style="float: right;" src="./resources/images/icon-images/response.png"/>
                     <?php } ?>
                </div>
                <div class="comment-text">
               Ability to see the worst signal,
                                    best signal areas and the distribution statistics
                                    of network on the website map.The ability to write complaint to your operators.Gives NTRA and operators the ability to view cell info.
                </div>
            </div>

            <div class="comment">
                <div class="comment-header">
                    <img class="icon" src="http://i.imgur.com/JIt0euT.png"/>
                    <span> mohamed </span>
                    <small> 23/11/2014 4:59 PM </small>
                    <?php if($_SESSION['kind']=="OPERATOR"){ ?>
                <img class="icon" style="float: right;" src="./resources/images/icon-images/response.png"/>
                    <?php }?>
                </div>
                <div class="comment-text">
                  Gives user the ability to see his log (Places he went, his problems history, his complaints..etc) 
                Ability to see the worst signal,
                                    best signal areas and the distribution statistics
                                    of network on the website map.
                </div>
            </div>

            <form>
                <p class="formtitle"> Leave a comment </p>

                <textarea placeholder="Comment"></textarea>
                <input class="commentButton" type='submit' value='Leave Comment' />  
            </form>
        </div>
    </div>
</html>