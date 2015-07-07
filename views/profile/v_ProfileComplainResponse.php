<style>
    .coverResponseEdit{border-bottom-left-radius: 14px;border-bottom-right-radius: 14px;}
    .borderResponse{border-radius: 14px; padding: 5px; text-align: left; font-family: cursive; bookmark-label: attr;
                    color: green; margin-top: 8px;}
    </style>
    <?php
        $json = $_SESSION['user_complains'];
    ?>
    <ul class="timeline">
    <span class="first "> 
        Complain Response
        <span class="icon-edit new"></span>
    </span>    
    <div class="ComplainHeaderStatic ComplainHeader"> 

        <div style="margin-top: 5px;">
            <?php
            $countSolvingComplain = 0;
            for ($i = 0; $i < count($json); $i++) {
                if ( $json[$i]['answer'] != null) {
                    $countSolvingComplain++;
                    ?>    
                    <li class="cover coverResponseEdit">
                        <div class="avatar">
                            <table class="headerCover"><tr>

                                    <td>
                                        <img class="image_profile_comp" src="<?php if(file_exists($path.$id.".jpg")) echo $path.$id.".jpg"; else echo $path."default.jpg" ;?>"/>
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
                                        echo "- " . $json[$i]['complain'];
                                    ?></h4>
                                <?php
                                    echo "Address: " . $json[$i]['address'] . "<br/>Floor Number: " .
                                    $json[$i]['floor_number'] . "<br/>Apartment Number: " . $json[$i]['Apartemant'];
                                ?><br/><br/>
                            </div>

                            <div class="arrow"></div>
                        </div>
                    </li>


                    <li class="cover borderResponse">
                        <div class="avatar">
                            <?php
                                echo $json[$i]['answer'];
                            
                            ?>
                        </div>
                    </li>
                <?php } ?>
            <?php } if($countSolvingComplain==0){
     echo "<h1 style='color:gray; font:18px; font-family:cursive; text-align:center;'>Didnt found any Response complain</h1>";
                } ?>
        </div>
    </div>

</ul>
<?php
$_SESSION['ProfileusersolvedComplain'] = $countSolvingComplain;
?>