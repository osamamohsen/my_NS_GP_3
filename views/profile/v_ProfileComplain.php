
<?php
//$countUNSolvingComplain 
//    echo 'Here Not Complain <br/>';
    $user = $_SESSION['user'];
    include_once '../../models/links.php';
    $linker = new links();
    $link = $linker->show_complain_By_id($user['employees']['id']);
    $res=file_get_contents($link);
    $json=  json_decode($res,TRUE);
    $_SESSION['user_complains']=$json;
    $_SESSION['total']=count($json);
//    var_dump($json);
    
?>
<ul class="timeline">
    <span class="first "> 
        Complains
        <span class="icon-edit new"></span>
    </span>    
    <div class="ComplainHeaderStatic ComplainHeader"> 

        <div style="margin-top: 5px;">
            <?php 
            $countUNSolvingComplain = 0;
            for ($i = 0; $i < count($json); $i++) { 
                if ($json[$i]['answer'] == null) {
                    $countUNSolvingComplain++;
                ?>
                <!-- $response['complains'][$i]['operator'] -->
                <li class="cover">
                    <div class="avatar">
                        <table class="headerCover"><tr>
                                <td>                        <img class="image_profile_comp" src="<?php if(file_exists($path.$id.".jpg")) echo $path.$id.".jpg"; else echo $path."default.jpg" ;?>"/>
                                </td>
                                <td>
                                    <h5><?php
                                    echo "<p class='lbl'>Time: " . $json[$i]['time'], "  ";
                                    echo "StartDate: " . $json[$i]['start_date'] . "</p>"; 
                                    ?>
                                    </h5>
                                </td></tr></table> </div>
                    <div class="bubble-container">
                        <div class="bubble">
                            <div class="retweet">
                                <div class="icon-retweet"></div>
                            </div>
                            <h4><?php
                                echo "- " .  $json[$i]['complain']; 
                            ?></h4>
                            <?php
                            echo "Address: " . $json[$i][   'address'] . "<br/>Floor Number: " .
                            $json[$i]['floor_number'] . "<br/>Apartment Number: " .  $json[$i]['Apartemant'];
                            ?>
<br/><br/><br/><br/>
                            <div class="over-bubble">
                                <div class="icon-mail-reply action"></div>
                                <div class="icon-retweet action"></div>
                                <div class="icon-star"></div>
                            </div>
                        </div>

                        <div class="arrow"></div>
                    </div>
                </li>
                        <?php } ?>
            <?php } if($countUNSolvingComplain==0){
echo "<h1 style='color:gray; font:18px; font-family:cursive; text-align:center;'>Didnt found any complain</h1>";} ?>
        </div>
    </div>

</ul>
<?php
$_SESSION['ProfileuserunsolvedComplain']=$countUNSolvingComplain;
?>